<?php
namespace controllers;

use core\classes\Controller;

class DefaultController extends Controller {
	protected $_layout = 'left';
	
	public function actionIndex() {
		$test = "DefaultController";
		$this->render('index',[ 
			'test' => $test,
		]);
	}
	
	public function actionLogin() {
		$this->_layout = 'main';
		$this->render('index',[
				'test' => 'TEST',
		]);
	}
}