<?php

namespace core\classes;


class View {
	private $_controller;
	private $_action;
	private $_file;
	
	public function __construct($controller, $action) {
		$this->_controller = $controller;
		$this->_action = $action;
		$this->_file = realpath('views/'.$controller.'/'.$action.'.php');
	}
	
	public function getController() {
		return $this->_controller;
	}
	
	public function renderFile($params = []) {
		ob_start();
        ob_implicit_flush(false);
        extract($params, EXTR_OVERWRITE);
        require($this->_file);

        return ob_get_clean();
	}
	
	public function renderLayout($layout, $params = []) {
		ob_start();
        ob_implicit_flush(false);
        extract($params, EXTR_OVERWRITE);
        require(realpath('views/layouts/'.$layout.'.php'));

        return ob_get_clean();
	}
}