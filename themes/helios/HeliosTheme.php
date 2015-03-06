<?php

namespace themes\helios;

use core\classes\Theme;

class HeliosTheme extends Theme {
	public static function init() {
		return [
			'css' => [
				'skel.css',
				'style-normal.css',
				'style-noscript.css',
				'style.css',
			],
			'js' => [
				'jquery.min.js',
				'jquery.dropotron.min.js',
				'jquery.scrolly.min.js',
				'jquery.onvisible.min.js',
				'skel.min.js',
				'skel-layers.min.js',
				'init.js',
			],	
		];
	}
}