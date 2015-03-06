<?php

namespace core\classes;

use core\classes\View;
use ErrorException;
use core\classes\Object;

class Controller extends Object{
	private $_name = 'default';
	protected $_layout = 'main';
	protected $_action = 'index';
	
	public function __construct($name, $action) {
		$this->_name = $name;
		$this->_action = $action;
	}
	
	public function execute() {
		if (method_exists($this, $this->_action) && is_callable([$this, $this->_action])) {
			call_user_func(array($this, $this->_action));
		} else {
			throw new \ErrorException("There is no action You want to execute...", "403");
		}
	}
	
	public function render($view, $params = []) {
		$view = new View($this->_name, $view);
		
		$content = $view->renderFile($params);
		$output = $view->renderLayout($this->_layout, ['content' => $content]);
		print $output;
	}
	
	
}