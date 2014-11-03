<?php

App::uses('ApiController', 'Controller');

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
    // $conditions = array('limit'=>10);
    // $this->ApiNotification->recursive = 0;
    // $this->set('notifications', $this->ApiNotification->find('all'),$conditions);
    if (!isset($this->api_website_id))
    {
      $result = array();
    }
    else
    {
      $website_id = $this->api_website_id;

      $options = array('conditions' => array(
        'notifications.website_id =' => $website_id
      ));
      $result = $this->ApiNotification->find('all', $options);
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
    // Configure::write('debug', 2);
    //

    if (!isset($this->api_website_id))
    {
      return;
    }
    $website_from_id = $this->api_website_id; // TODO: get website_id by APIKey
    
    // find by website_id, post_id

    // error_log(print_r($this->request, true));
    if ($this->request->is('post'))
    {
      $data = $this->request->input('json_decode', true);

      // error_log(print_r($data,true));
      if (!isset($data['wp_postid']))
      {
        $this->error('NO VAILD DATA', 500);
        return;
      }

      #$data['website_id'] = $website_id;

      $apiNotification = $this->ApiNotification->find('first', array(
        'conditions' => array(
          'notifications.website_id' => $website_id,
          'notifications.wp_postid' => $data['wp_postid'],
        )
      ));
      error_log(print_r($apiNotification, true));

      if (count($apiNotification) < 1)
      {
        $this->ApiNotification->create();
        if ($this->ApiNotification->save($data))
        {
          CakeLog::write('debug', 'ADD OK. website_id: '.$website_id);
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
    $website_id = 1; // TODO: get website_id by APIKey

    if (!$this->ApiNotification->exists($id)) {
      $this->error('RECORD NOT FOUND', 404);
      return;
    }
    if ($this->request->is(array('post', 'put'))) {
      $data = $this->request->input('json_decode', true);
      $data['id'] = $id;
      $data['website_id'] = $website_id;

      if ($this->ApiNotification->save($data)) {
        $this->success(array('status' => 'UPDATE OK'));
      } else {
        $this->error('UPDATE FAILED', 500);
      }
    } else {
      $this->error('BAD METHOD', 400);
    }

    return ;
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


