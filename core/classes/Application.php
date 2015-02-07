<?php
namespace core\classes;

use App;
use Exception;

class Application {
	public  $request;
	private $_properties = array();
	
	public function __construct($config = []) {
		$this->configure($config['app']);
		App::create($this);
	}
	
	public function configure($config) {
		try {
			foreach ($config as $key => $value) {
				$this->{$key} = $value;
			}
		} catch (\Exception $e) {
			print $e->getMessage();
		}
	}
	
	public function __set($key, $value) {
		$this->_properties[$key] = $value;
	}
	
	public function __get($key) {
		if (isset($this->_properties[$key])) {
			return $this->_properties[$key];
		} else {
			throw new Exception("The key '$name' does not exists.");
		}
	}
	
	public function run() {
		$this->request = new Request();

		ThemeFactory::create();
		$controller = CommandFactory::build($this->request);
		try {
			$controller->execute();
		} catch (\ErrorException $e) {
			print 'Error: '.$e->getCode().'. Message: '.$e->getMessage();
		}
	}
	
	private function setAlias($path) {
		
	}
}