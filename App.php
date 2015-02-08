<?php

use core\classes\Application;

class App {
	
	public static $entity;
	public static $appTheme = 'lightweight';
	
	private static $_aliases;
	
	public static function getAlias($alias) {
		return self::$_aliases[$alias];
	}
	
	public static function create(Application $object) {
		self::$entity = $object;
		self::$_aliases = self::initAliases();
	}
	
	public static function getAppMainTheme() {
		return 'lightweight';
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