<?php

namespace core\classes;

use core\interfaces\IFactory;

class DbFactory implements IFactory {
	public static function create($options = '') {
		$databases = []; 
		foreach ($options as $key => $value) {
			list($dsn, $username, $password, $options) = array_values($value);
			try {
				$databases[$key] = DbConnector::connect($dsn, $username, $password, $options);
			} catch (PDOException $e) {
				echo $e->getFile().$e->getLine().$e->getCode().$e->getMessage();
			}
		}
		
		return $databases;
	}	
}