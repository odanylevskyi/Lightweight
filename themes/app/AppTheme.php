<?php

namespace themes\app;

use core\classes\Theme;

class AppTheme extends Theme {
	public static function init() {
		return [
			'css' => [
				'main.css',
			],
			'js' => [],
			'dependency' => ['bootstrap'],
		];
	}
}