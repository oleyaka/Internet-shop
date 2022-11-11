<?php

class Login extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function login() {
		if (isset($_POST['login']) && isset($_POST['password']) ) {
			$login = htmlspecialchars($_POST['login']);
			$password = htmlspecialchars($_POST['password']);
            if ($this -> model -> login($login, $password)) {
            	header('location:' . BASE_DIR . '/account/');
            } else {
                $this -> view -> arResult['ERROR'] = "Неверный логин или пароль";
                $this -> index();
            }

		} else {
            $this -> view -> arResult['ERROR'] = "Неверный логин или пароль";
            $this -> index();


		}
	}

	public function logout() {
		User::logout();
		header('location:' . BASE_DIR . '/index/');
	}

	public function reg() {
		if (User::isLogin()) {
			header('location:' . BASE_DIR . '/account/');
			die;
		}
		$error = array('error' => true);
		$loginReg = htmlspecialchars($_REQUEST['loginReg']);
		$name = htmlspecialchars($_REQUEST['name']);
		$passwordOne = htmlspecialchars($_REQUEST['passwordOne']);
		$passwordTwo = htmlspecialchars($_REQUEST['passwordTwo']);
		
		if ($loginReg == '') {
			$error['$login'] = false;
		}

		if ($passwordOne != $passwordTwo) {
			$error['$password'] = false;
		}

		if ($passwordOne == '') {
			$error['$password'] = false;
		}

		if ($this -> model -> loginExist($loginReg)) {
			$error['$login'] = false;
		}

		if (count($error) > 1) {
			echo json_encode($error);
			die;
		}

		$data = array(
			':name' => $name,
			':login' => $loginReg,
			':password' => md5($passwordOne),
		);

		if ($this -> model -> register($data)) {
			$this -> model -> login($loginReg, $passwordOne);
			echo json_encode(array('success' => true));
			die;
		} else {
			echo json_encode(array('success' => false));
			die;
		}
	

	}
}