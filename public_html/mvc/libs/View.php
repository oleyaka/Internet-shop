<?php 

class View {
	public function __construct() {
	}

	public function render ($path) {
		require 'views/' .  $path . '/index.php';
	}
}
