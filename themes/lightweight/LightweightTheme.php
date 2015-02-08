<?php

namespace themes\lightweight;

use core\classes\Theme;

class LightweightTheme extends Theme {
	public static function init() {
		return [
			'css' => [
				'jquery-ui.min.css',
				'jquery-ui.structure.min.css',
				'jquery-ui.theme.min.css',
			],
			'js' => [
				'jquery-1.11.2.min.js',
				'jquery-ui.min.js',
			],	
		];
	}
}