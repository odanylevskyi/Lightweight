<?php
namespace core\classes\db;

use core\interfaces\IFactory;

class DbObjectFactory implements IFactory {
	public static function create($options = '') {}
	
	public static function createObject($id) {
		return new DbObject($id);
	}
	
	public static function createCollection(DbObject $object) {
		return new DbObjectCollection();
	}
} 