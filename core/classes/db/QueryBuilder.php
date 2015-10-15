<?php
namespace core\classes\db;

use core\classes\Object;

class QueryBuilder extends Object {
	public function equal($value, $column) {
		return '`'.$column.'`='.$value;
	}
}