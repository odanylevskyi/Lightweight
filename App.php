<?php

class App {
	public static $entity;
	
	private static $_aliases;
	
	public static function getAlias($alias) {
		return self::$_aliases[$alias];
	}
	
	public static function create($object) {
		self::$entity = $object;
		self::$_aliases = [
			'app' => __DIR__,
			'core' => '/core',
			'themes' => '/themes',
			'basePath' => '/',
			'fullPath' => __DIR__,
			'models' => '/models',
			'controllers' => '/controllers',
			'views' => '/views',
			'blocks' => '/blocks',
		];
	}
}