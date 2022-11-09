<?php 

class Login_Model extends Model {

	public function __construct() {
		parent:: __construct();
	}

	public function login($login, $password) {

		$sth = $this -> db -> prepare("SELECT user_id, name FROM users WHERE " . "name = :login AND password = :password");
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
}

