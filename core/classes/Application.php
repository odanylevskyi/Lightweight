<?php
namespace core\classes;

use App;
use Exception;
use core\classes\db\DbFactory;

class Application {
	public  $request;
	private $_properties = array();
	private $_db_config = array();
	private $_db = array();
	
	public function __construct($config = []) {
		$this->configure($config['app']);
		$this->configureDb($config['db']);
	}
	
	private function configureDb($config) {
		$this->_db_config = $config;
	}
	
	private function configure($config) {
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
	
	public function getDbConnections() {
		return $this->_db;
	}
	
	public function run() {
		$this->request = new Request();
		$this->_db = DbFactory::create($this->_db_config);

		App::create($this);
		
		ThemeFactory::create();
		$controller = CommandFactory::create();
		try {
			$controller->execute();
		} catch (\ErrorException $e) {
			print 'Error: '.$e->getCode().'. Message: '.$e->getMessage();
		}
	}
}