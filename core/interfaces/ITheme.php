<?php

namespace core\interfaces;

interface ITheme {
	public static function register();
	
	public static function registerCssFile();
	public static function registerCss();
	
	public static function registerJSFile();
	public static function registerJS();
}