<?php
namespace controllers;

use core\classes\Controller;

class DefaultController extends Controller {
	public function actionIndex() {
		$test = "DefaultController";
		$this->render('index',[ 
			'test' => $test,
		]);
	}
}