<?

class Account extends Controller {

	public function __consruct() {
		if (User::isLogin()) {
			parent::__construct();
		} else {
			header('location:' . BASE_DIR . '/login/');
		}
		
	}

}