<?php

namespace themes\bootstrap;

use core\classes\Theme;
use App;

class BootstrapTheme extends Theme {
	public static function init () {
		return [
			'css' => [
				'bootstrap-theme.css',
				'bootstrap.css',
			],
			'js' => [
				'bootstrap.js',
			],
			'dependency' => [],
		];
	}
}