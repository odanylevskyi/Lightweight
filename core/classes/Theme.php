<?php

namespace core\classes;

use core\interfaces\ITheme;
use App;
use core\interfaces\IObject;

class Theme implements ITheme {
	protected static $_css = [];
	protected static $_js = [];
	
	public static function register() {
		$themesName = self::themeName();
		$themesPath = App::getAlias('themes').'/'.$themesName;
		foreach (self::$_css as $file) {
			$cssPath = $themesPath.'/css/'.$file;
			print self::registerCssFile($cssPath);
		}
		foreach (self::$_js as $file) {
			$jsPath = $themesPath.'/js/'.$file;
			print self::registerJsFile($jsPath);
		}
	}
	
	public static function initCss($css = []) {
		self::$_css = $css;
	}
	
	public static function initJs($js = []) {
		self::$_js = $js;
	}
	
	public static function registerCssFile($file) {
		return Html::cssFile($file);
	}
	public static function registerCss() {
	}
	
	public static function registerJSFile($file) {
		return Html::jsFile($file);
	}
	public static function registerJS() {
		
	}
	
	public static function themeName() {
		$themeName = explode('\\', get_called_class());
		$themeName = $themeName[count($themeName) - 1];
		$themeName = substr($themeName, 0, strpos($themeName, 'Theme'));
		$themeName = strtolower($themeName);
		return $themeName;
	}
}