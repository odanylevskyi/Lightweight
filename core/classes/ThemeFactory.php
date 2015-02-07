<?php

namespace core\classes;

use core\interfaces\Factory;
use themes\app\AppTheme;
use App;

class ThemeFactory implements Factory {
	public static function create() {
		$theme = 'themes\\'.App::$entity->theme.'\\'.ucfirst(App::$entity->theme).'Theme';
		$theme::init();
		AppTheme::init();
	}
}