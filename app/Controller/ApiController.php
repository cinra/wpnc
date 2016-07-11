<?php

/*
  from: http://be-hase.com/php/478/
*/

App::uses('AppController', 'Controller');
App::uses('AuthComponent', 'Controller/Component');

class ApiController extends Controller
{
  //CakeのJsonViewとXmlViewを使用するので、RequestHandler必須。
  public $components = array(
    'RequestHandler',
    'Session',
    'Auth',
    //'Security',
    //'Auth' => array(
    //'authenticate' => array('Basic'),
    //),
  );

  public $api_website_id = null;
  public $viewClass  = 'Json';

  // JSONやXMLにして返す値を格納するための配列です。
  protected $result = array();

  public function beforeFilter()
  {

    parent::beforeFilter();
    // AuthComponent::$sessionKey = false;
    // $this->Auth->login();

    // Authenticate a user using api key
    if (isset($this->params['url']['apikey']) && $this->authApi($this->params['url']['apikey']))
    {
      $this->Auth->allow($this->action);
    }
    else
    {
      throw new NotFoundException();
    }

    // Ajaxでないアクセスは禁止。直アクセスを許すとXSSとか起きかねないので。
    // if (!$this->request->is('ajax')) throw new BadRequestException('Ajax以外でのアクセスは許可していません。');

    //meta情報とかを返すといいですね。とりあえずいまアクセスしているurlとhttp methodでも含めておきましょう
    $this->result['meta'] = array(
      'url' => $this->request->here,
      'method' => $this->request->method(),
    );

    // nosniffつけるべし。じゃないとIEでXSS起きる可能性あり。
    $this->response->header('X-Content-Type-Options', 'nosniff');

  }

  public function beforeRender()
  {
    // jsonp対応。JsonpViewクラスを自作(後述)
    if ($this->viewClass === 'Json' && isset($this->request->query['callback']))
    {
      $this->viewClass = 'Jsonp';
    }
  }

  // 成功系処理。$this->resultに値いれる
  protected function success($response = array())
  {
    $this->result['response'] = $response;

    $this->set('meta', $this->result['meta']);
    $this->set('response', $this->result['response']);
    $this->set('_serialize', array('meta', 'response'));
  }

  // エラー系処理。$this->resultに値いれる
  protected function error($message = '', $code)
  {
    $this->result['error']['message'] = $message;
    $this->result['error']['code'] = $code;

    //ちゃんと400ステータスコードにするの大事。後述
    $this->response->statusCode(400);
    $this->set('meta', $this->result['meta']);
    $this->set('error', $this->result['error']);
    $this->set('_serialize', array('meta', 'error'));
  }

  // バリデーションエラー系処理。$this->resultに値いれる
  protected function validationError($modelName, $validationError = array())
  {
    $this->result['error']['message'] = 'Validation Error';
    $this->result['error']['code'] = '422'; //エラーコードはプロジェクトごとに定義すべし
    $this->result['error']['validation'][$modelName] = array();
    foreach ($validationError as $key => $value)
    {
        $this->result['error']['validation'][$modelName][$key] = $value[0];
    }

    //ちゃんと400ステータスコードにするの大事。後述
    $this->response->statusCode(400);
    $this->set('meta', $this->result['meta']);
    $this->set('error', $this->result['error']);
    $this->set('_serialize', array('meta', 'error'));
  }


  /**
   * Helper function to authenticate a user given their api key.
   *
   * @param $apiKey String API key for the request
   * @return Boolean
   */
  // SEE: http://deadlytechnology.com/php/api-cakephp-app/
  private function authApi($apiKey = null)
  {

    if ($apiKey == null) return false;

    $this->loadModel('Website');
    $model_website = new Website();

    $website = $model_website->find('first', array(
      'conditions' => array( 'Website.api_key' => $apiKey ),
      'contain' => false
    ));

    if (isset($website['Website']['id']))
    {
      $this->api_website_id = $website['Website']['id'];
      return $this->api_website_id;
    }
    else
    {
      return null;
    }

  }

}