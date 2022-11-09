<?php 

class View {

	public $arResult = array();
	public function __construct() {
	}

	public function render ($path, $fileName = 'index') {
		if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/mvc/views/' . $path . '/' . $fileName .'index.php')) {
			// require $_SERVER['DOCUMENT_ROOT'] . '/mvc/views/' . $path . '/index.php';
		}
		require 'views/' .  $path . '/index.php';
	}
}
