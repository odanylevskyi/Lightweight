<?php

namespace core\classes;

class Html {
	public static function cssFile($file) {
		return '<link rel="stylesheet" type="text/css" href="'.$file.'">';
	}
	
	public static function jsFile($file) {
		return '<script type="text/javascript" src="'.$file.'"></script>';
	}
}