<?php

namespace core\classes\db;

use PDO;

class Connector {
	private $_dsn;
	private $_username;
	private $_passwd;
	private $_options = [];
	
	public $pdo;
	
	public function __construct($dsn, $username, $passwd, $options = []) {
		$this->_dsn = $dsn;
		$this->_username = $username;
		$this->_passwd = $passwd;
		$this->_options = $options;
		
		$this->pdo = new PDO($dsn, $username, $passwd, $options);
	}
}