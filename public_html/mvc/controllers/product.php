<?php

class Product extends Controller {
	public function __construct() {
		parent::__construct();

	}

	public function productlist($section = '') {


		if ($section != '') {

		}

		$this -> view -> render(strtolower(get_class($this)) . '/productlist');
	}
}