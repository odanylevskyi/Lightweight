<?php
namespace controllers;

use core\classes\Controller;

class SiteController extends Controller {
	public function actionIndex() {
		$test = "SiteController";
		$this->render('index',[ 
			'test' => $test,
		]);
	}
}