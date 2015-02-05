<?php
namespace core\classes;

class Request {
	private $_params;
	
	public function __construct() {
		$this->_params = $_REQUEST;
	}
	
	public function __set($key, $value) {
		$this->_params[$key] = $value;
	}
	
	public function __get($key) {
		if (isset($this->_params[$key])) {
			return $this->_params[$key];
		} else {
			return null;
		}
	}
	
	public function __isset($key) {
		if (isset($this->_params[$key])) {
			return true;
		} else {
			return false;
		}
	}
	
	public function __unset($key) {
		unset($this->_params[$key]);
	}
}