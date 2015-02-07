<?php

namespace themes\bootstrap;

use core\classes\Theme;
use App;

class BootstrapTheme extends Theme {
	public static function init () {
		$css = [
			'bootstrap-theme.css',
			'bootstrap.css',
		];
		
		$js = [
			'bootstrap.js',
		];
		
		self::initCss($css);
		self::initJs($js);
	}
}