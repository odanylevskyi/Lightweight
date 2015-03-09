<?php

use core\classes\Application;

class App {
	
	public static $entity;
	private static $db_connections = [];
	private static $_aliases;
	
	public static function getAlias($alias) {
		return self::$_aliases[$alias];
	}
	
	public static function create(Application $object) {
		self::$entity = $object;
		foreach (self::$entity->getDbConnections() as $name => $dbEntity) {
			self::$db_connections[$name] = $dbEntity;
		}
		self::$_aliases = self::initAliases();
	}
	
	public static function __callStatic($name, $arguments = '') {
		return self::$db_connections[$name];
	}
	
	public static function getAppMainTheme() {
		return self::$entity->theme;
	}
	
	public static function setAppMainTheme($themeName) {
		self::$appTheme = $themeName;
	}
	
	public static function getVersion() {
		return '0.0.1';
	}
	
	
	private static function initAliases() {
		return [
			'app' => __DIR__,
			'core' => '/core',
			'themesDir' => '/themes',
			'themes' => '/themes/'.self::$entity->theme,
			'basePath' => '/',
			'fullPath' => __DIR__,
			'models' => '/models',
			'controllers' => '/controllers',
			'views' => '/themes/'.self::$entity->theme.'/views',
			'images' => '/themes/'.self::$entity->theme.'/images/',
			'blocks' => '/blocks',
		];
	}
}