<?php
namespace core\classes\db;

use core\interfaces\IObject;
use core\classes\Object;
use App;

class DbObject extends Object {
	protected $connector;
	protected $table;
	public $attributes = [];
	
	public function __construct($id = null) {
		$this->connector = $this->getDb();
		$this->table = $this->getTableName();
		if (!is_null($id) && is_int($id)) {
			$this->attributes = $this->find(['id' => $id]);
		}
	}
	
	protected function getTableName() {
		$className = get_called_class();
		$from = strpos($className, "\\") + 1;
		return strtolower(substr($className, $from));
	}
	
	protected function getDb() {
		return App::db();
	}
	
	public function __set($key, $value) {
		$this->attributes[$key] = $value;
	}
	
	public function __get($key) {
		if (isset($this->attributes[$key])) {
			return $this->attributes[$key];
		} else {
			exit("There is no attributes {$key}");
		}
	}
	
	public function find($options = null) { 
		$query = new Query($this->connector);
		if (!is_null($options) && is_array($options)) {
			return $query->select()->from($this->table)->where($options)->one();			
		} else {
			return $query;
		} 
	}
	
	public function findAll($options = null) {
		$query = new Query($this->connector);
		if (!is_null($options) && is_array($options)) {
			return $query->select()->from($this->table)->where($options)->all();
		} else {
			return $query;
		}
	}
}