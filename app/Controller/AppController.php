<?php

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package        app.Controller
 * @link        http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
	public $components = array(
		'Session',
		'Auth' => array(
			'loginRedirect' => array('controller' => 'users', 'action' => 'index'),
			'logoutRedirect' => array('controller' => 'users', 'action' => 'index'),
			'authError' => "Nie msz dostępu do tej strony",
			'authorize' => array('Controller'),
			'authenticate' => array(
				'Form' => array(
					'fields' => array('username' => 'email')
				)
			)
		)
	);

	// for login users provalages
	public function isAuthorized($user)
	{
		return true; // all subpages are available
	}

	public function beforeFilter()
	{
		//actions which are available for all users
		$this->Auth->allow('index', 'view');
		$this->set('logged_in', $this->Auth->loggedin());
		$this->set('current_user', $this->Auth->user());
	}


}
