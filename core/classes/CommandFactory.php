<?php
namespace core\classes;

use core\classes\Request;

class CommandFactory {
	public static function build(Request $request) {
		$name = $request->getValue('c');
		if (!isset($name)) {
			$name = 'default';
		}
		$class = 'controllers\\'.ucfirst($name).'Controller';
		if (!class_exists($class)) {
			$class = 'controllers\\DefaultController';
		}
		$action = $request->getValue('a');
		if (!isset($action)) {
			$action = 'index';
		}
		$action = 'action'.ucfirst($action);
		
		return new $class($name, $action);
	}
}