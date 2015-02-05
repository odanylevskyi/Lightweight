<?php

class App {
	public static $entity;
	
	public static function create($object) {
		self::$entity = $object;
	}
}