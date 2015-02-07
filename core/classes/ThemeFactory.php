<?php

namespace core\classes;

use core\interfaces\IFactory;
use themes\app\AppTheme;
use App;

class ThemeFactory implements IFactory {
	public static function create() {
		$theme = 'themes\\'.App::$entity->mainTheme.'\\'.ucfirst(App::$entity->mainTheme).'Theme';
		$theme::init();
	}
}
