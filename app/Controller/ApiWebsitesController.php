<?php
App::uses('ApiController', 'Controller');
/**
 * Websites Controller
 *
 * @property Website $Website
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ApiWebsitesController extends ApiController {

/**
 * Components
 *
 * @var array
 */
//	public $components = array('Session');
	public $viewClass  = 'Json';

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$apiWebsites = $this->ApiWebsite->find('all', array('order' => array('sort_no ASC')));


		foreach ($apiWebsites as $key => &$apiWebsite) {

			unset($apiWebsite['websites']['email']);

			if (!is_null($this->api_website_id)
				&& $this->api_website_id == $apiWebsite['websites']['id']) {
				unset($apiWebsites[$key]);
				continue;
			} else {
				$apiWebsite['websites']['api_key'] = null;

			}
		}

		$apiWebsites['AuthInfo'] = array(
			'my_site_id' => $this->api_website_id,
		);

		$this->set('result', $apiWebsites);
		$this->set('_serialize', array('result'));

	}

}
