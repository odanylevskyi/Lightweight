<?php

namespace core\interfaces;

interface ITheme {
	public static function register();
	
	public static function registerCssFile($file);
	public static function registerCss();
	
	public static function registerJSFile($file);
	public static function registerJS();
}