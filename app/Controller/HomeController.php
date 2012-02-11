<?php
App::uses('AppController', 'Controller');
/**
 * Home Controller
 *
 * @property User $User
 */
class HomeController extends AppController {
	
	var $layout = null;
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->set('home', 'hello world');
	}


}
