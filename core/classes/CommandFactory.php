<?php
namespace core\classes;

use core\classes\Request;

class CommandFactory {
	public static function build(Request $request) {
		$controller_name = $request->c;
		if (!isset($controller_name)) {
			$controller_name = 'default';
		}
		$controller = 'controllers\\'.ucfirst($controller_name).'Controller';
		if (!class_exists($controller)) {
			$controller = 'controllers\\DefaultController';
		}
		$action_name = $request->a;
		if (!isset($action_name)) {
			$action_name = 'index';
		}
		$action = 'action'.ucfirst($action_name);
		
		return new $controller($controller_name, $action);
	}
}