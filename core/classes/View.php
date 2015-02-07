<?php

namespace core\classes;

use App;

class View {
	private $_file;
	
	public function __construct($controller, $action) {
		$this->_file = App::getAlias('app').App::getAlias('views').'/'.$controller.'/'.$action.'.php';
	}
		
	public function renderFile($params = []) {
		ob_start();
        ob_implicit_flush(false);
        extract($params, EXTR_OVERWRITE);
        require($this->_file);

        return ob_get_clean();
	}
	
	public function renderLayout($layout, $params = []) {
		$path = App::getAlias('app').App::getAlias('views').'/layouts/'.$layout.'.php';
		ob_start();
        ob_implicit_flush(false);
        extract($params, EXTR_OVERWRITE);
        require($path);

        return ob_get_clean();
	}
}