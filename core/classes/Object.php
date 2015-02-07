<?php

namespace core\classes;

use core\interfaces\IObject;

class Object implements IObject {
	public static function className() {
		return __CLASS__;
	}
}