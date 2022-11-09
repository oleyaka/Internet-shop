<?php

class Catalog extends Controller {
	public function __construct() {
		parent::__construct();

	}

	public function showlist($section = '') {


		if ($section != '') {

		}
		$args = 123;
		$this -> view -> render(strtolower(get_class($this)) . '/showlist', $args);
	}
}