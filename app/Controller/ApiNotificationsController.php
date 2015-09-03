<?php

App::uses('ApiController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Notifications Controller
 *
 * @property Notification $Notification
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ApiNotificationsController extends ApiController
{

/**
 * Components
 *
 * @var array
 */
  // public $components = array('Session');
  public $viewClass  = 'Json';

  /**
   * index method
   *
   * @return void
   */
  public function index()
  {
    
    if (!isset($this->api_website_id))
    {
      $result = array();
    }
    else
    {
      $website_id = $this->api_website_id;

      $options = array('conditions' => array(
        'notifications.website_id =' => $website_id,
        'notifications.notification_status' => array('NEW', 'UPDATE'),
      ));
      $result = $this->ApiNotification->find('all', $options);
    }
    
    if ($result)
    {
      foreach ($result as $v)
      {
        $v['notifications']['notification_status'] = 'RECEIVED';
        $this->ApiNotification->save( $v['notifications'] );
      }
    }
    
    $this->set('result', $result);
    $this->set('_serialize', array('result'));
    
  }

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
  public function view($id = null)
  {
    
    if (!$this->ApiNotification->exists($id))
    {
      $this->error('RECORD NOT FOUND', 404);
      return;
    }
    
    $options = array('conditions' => array('notifications.' . $this->ApiNotification->primaryKey => $id));
    $this->set('result', $this->ApiNotification->find('first', $options));
    $this->set('_serialize', array('result'));
    
  }

/**
 * add method
 *
 * @return void
 */
  public function add()
  {
    
    if (!isset($this->api_website_id)) return;
    
    if ($this->request->is('post'))
    {
      $data = $this->request->input('json_decode', true);
      
      $data['org_website_id'] = $this->api_website_id;
      
      if (!isset($data['wp_postid']))
      {
        $this->error('NO VALID DATA', 500);
        return;
      }

      $apiNotification = $this->ApiNotification->find('first', array(
        'conditions' => array(
          'notifications.website_id' => $data['website_id'],
          'notifications.wp_postid' => $data['wp_postid'],
          'notifications.org_website_id' => $data['org_website_id'],
        )
      ));
      error_log(print_r($apiNotification, true));

      if (count($apiNotification) < 1)
      {
        $this->ApiNotification->create();
        if ($apiNotification = $this->ApiNotification->save($data))
        {
          $this->loadModel('Notification');
          $notificationId = $apiNotification['notifications']['id'];
          $options        = array('conditions' => array('Notification.' . $this->Notification->primaryKey => $notificationId));
          $notification   = $this->Notification->find('first', $options);

          // 受信側の管理者に送信通知を行う
          $email = new CakeEmail();
          $email->template('notification');
          $email->viewVars(array('notification' => $notification));
          $email->from('web-renew@list.waseda.jp');
          $email->to($notification['Website']['email']);
          $email->subject('Webシステムからのお知らせ：他箇所から記事を受信しました');
          $email->send();

          CakeLog::write('debug', 'Send Mail to: '. $notification['Website']['email']);
          CakeLog::write('debug', 'ADD OK. website_id: '.$data['website_id']);
          $this->success(array('status' => 'OK'));
        }
        else
        {
          $this->error('ADD FAILED', 500);
        }
      }
      else
      {
        $this->edit($apiNotification['notifications']['id']);
        return;
      }
    }
    else
    {
      $this->error('BAD METHOD', 400);
    }

    return;
  }

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
  public function edit($id = null)
  {
    
    if (!$this->ApiNotification->exists($id))
    {
      $this->error('RECORD NOT FOUND', 404);
      return;
    }
    
    if ($this->request->is(array('post', 'put')))
    {
      
      $data = $this->request->input('json_decode', true);
      $data['id'] = $id;
      $data['notification_status'] = 'UPDATE';
      $data['org_website_id'] = $this->api_website_id;

      if ($this->ApiNotification->save($data))
      {
        $this->success(array('status' => 'UPDATE OK'));
      }
      else
      {
        $this->error('UPDATE FAILED', 500);
      }
    }
    else
    {
      $this->error('BAD METHOD', 400);
    }

    return;
    
  }

/**
 * delete method
 *
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
  public function delete($id = null)
  {
    
    $this->ApiNotification->id = $id;
    
    if (!$this->ApiNotification->exists())
    {
      $this->error('RECORD NOT FOUND', 404);
      return;
    }
    
    $this->request->onlyAllow('post', 'delete');
    
    if ($this->Notification->delete())
    {
      $this->success(array('status' => 'OK'));
    }
    else
    {
      $this->error('DELETE FAILED', 500);
    }

    return;
  }


}


