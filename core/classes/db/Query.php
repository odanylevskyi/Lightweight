<?php
namespace core\classes\db;

use core\classes\db\QueryBuilder;
use \PDO;
use \PDOStatement;

class Query {
	protected $_pdo;
	protected $_statement;
	protected $_sql;
	
	public function __construct(Connector $connector) {
		$this->_pdo = $connector->pdo;
	}
	
	public function select($fields = null) {
		$this->_sql .= 'SELECT';
		if (is_null($fields)) {
			$this->_sql .= ' * ';
		} else {
			$this->_sql .= ' '.implode(',', $fields);
		}
		
		return $this;
	}
	
	public function from( $table ) {
		$this->_sql .= ' FROM '.$table.' ';
		
		return $this;
	}
	
	public function where( array $options ) {
		$this->_sql .= ' WHERE ';
		if (!empty($options)) {
			$this->_sql .= ' '.implode(' AND ', array_map([new QueryBuilder, 'equal'], array_values($options), array_keys($options)));
		}
		
		return $this;
	}
	
	public function one() {
		try {
			$this->_statement = $this->_pdo->prepare($this->_sql);
			$this->_statement->execute();
			return $this->_statement->fetch(PDO::FETCH_ASSOC);
		} catch (\PDOException $e) {
			echo $e->getMessage();
		} 
	}
	
	public function all() {
		try {
			$this->_statement = $this->_pdo->prepare($this->_sql);
			$this->_statement->execute();
			return $this->_statement->fetchAll(PDO::FETCH_ASSOC);
		} catch (\PDOException $e) {
			echo $e->getMessage();
		}
	}
	
}