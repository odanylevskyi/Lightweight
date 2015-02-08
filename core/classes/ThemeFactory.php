<?php

namespace core\classes;

use core\interfaces\IFactory;
use themes\app\AppTheme;
use App;

class ThemeFactory implements IFactory {
	public static function create() {
		$config = AppTheme::init();
		$config['dependency'][] = App::getAppMainTheme();
		AppTheme::configure($config);
	}
}
