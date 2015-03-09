<?php
namespace core\classes;

use core\interfaces\IObject;
use App;

class DbObject extends Object {
	protected $connector;
	protected $table;
	public $attributes = [];
	
	public function __construct($id = null) {
		$this->connector = $this->getDb();
		$this->table = $this->getTableName();
		if (!is_null($id) && is_int($id)) {
			$this->attributes = $this->find($id);
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
	
	public function find($id) {
		return $this->connector->query("select * from {$this->table} where id = {$id}")->fetch();
	}
}