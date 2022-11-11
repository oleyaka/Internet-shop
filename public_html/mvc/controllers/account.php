<?

class Account extends Controller {

	public function __consruct() {
		if (User::isLogin()) {
			parent::__construct();
		} else {
			header('location:' . BASE_DIR . '/login/');
		}
		
	}

	public function new_user() {
		$this -> view -> arResult['NEW_USER'] = true;
        $this -> index();
	}

}