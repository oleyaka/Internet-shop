<?php 

class Login_Model extends Model {

	public function __construct() {
		parent:: __construct();
	}

	public function login($login, $password) {

		$sth = $this -> db -> prepare("SELECT user_id, name FROM users WHERE " . "login = :login AND password = :password");
		$sth -> execute(array(
			':login' => $login,
			':password' => md5($password),
		));
        $tmp = $sth->rowCount();
        if ($sth -> rowCount() > 0) {
            $data = $sth -> fetchAll();
            $_SESSION['LOGIN'] = true;
            $_SESSION['USER_ID'] = $data[0]["id"];
            $_SESSION['USER_NAME'] = $data[0]["name"];
            return true;
        } else {
            return false;
        }
	}

	public function loginExist ($loginReg) {
		$sth = $this -> db -> prepare("SELECT user_id, name FROM users WHERE " . "loginReg = :login");
		$sth -> execute(array(
			':login' => $loginReg,
		));
		if ($sth -> rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function register ($data) {
		$sth = $this -> db -> prepare("INSERT users (name, login, password) " . "VALUES (:name, :login, :password) ");

		$sth -> execute($data);

		if ($sth -> rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}
}

