<?php
namespace controllers;

use core\classes\Controller;
use models\Article;

class SiteController extends Controller {
	protected $_layout = 'right';
	
	public function actionIndex() {
		$article = new Article(25);
		
		$this->render('index',[ 
			'article' => $article,
		]);
	}
	
	public function actionTest() {
		$this->_layout = 'no-sidebar';
		$article = new Article(25);
		
		$this->render('index',[
				'article' => $article,
		]);
	}
}