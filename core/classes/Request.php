<?php
namespace core\classes;

class Request {
	private $_params;
	
	public function __construct() {
		$this->_params = $_REQUEST;
	}
	
	public function getValue($key) {
		if (isset($this->_params[$key])) {
			return $this->_params[$key];
		} else {
			return null;
		}
	}
}