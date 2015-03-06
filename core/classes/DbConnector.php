<?php

namespace core\classes;

use PDO;

class DbConnector {
	public static function connect($dsn, $username, $passwd, $options = '') {
		return new PDO($dsn, $username, $passwd, $options);
	}
}