<?php

namespace core\classes;

use core\interfaces\ITheme;

class Theme implements ITheme {
	protected static $_css = [];
	protected static $_js = [];
	
	public static function register() {
		foreach (self::$_css as $file) {
			print self::registerCssFile($file);
		}
		foreach (self::$_js as $file) {
			print self::registerJsFile($file);
		}
	}
	
	public static function registerCssFile($file) {
		return Html::cssFile($file);
	}
	public static function registerCss();
	
	public static function registerJSFile($file) {
		return Html::jsFile($file);
	}
	public static function registerJS();
}