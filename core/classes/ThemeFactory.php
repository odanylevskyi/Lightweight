<?php

namespace core\classes;

use core\interfaces\IFactory;
use themes\app\AppTheme;
use App;

class ThemeFactory implements IFactory {
	public static function create($options = '') {
		$themeName = App::getAppMainTheme();
		$theme = 'themes\\'.$themeName.'\\'.ucfirst($themeName).'Theme';
		$config = $theme::init();
// 		$config['dependency'][] = App::getAppMainTheme();
		$theme::configure($config);
	}
}
