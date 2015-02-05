<?php
namespace controllers;

use core\classes\Controller;

class SiteController extends Controller {
	public function actionIndex() {
		$test = "TEST TEST TEST";
		$this->render('index',[ 
			'test' => $test,
		]);
	}
}