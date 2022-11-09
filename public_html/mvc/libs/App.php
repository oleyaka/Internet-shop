<?php 

class App {

	private $isAssets = false;
	public function __construct() {

        session_start();

		if (isset($_GET['url'])) {
			$url = explode('/', rtrim($_GET['url'], '/'));
		} else {
			$url[0] = 'index';
		}
		if ($url[0] == 'public'){
			$fileName = $url[0] . '/' . $url[1] . '/' . $url[2];
			$isAssets = true ;
		} else{
			$fileName = 'controllers/' . $url[0] . '.php';
		}
		// echo $fileName;
		if (file_exists($fileName) && !$isAssets ) {
			/* подключение контроллера */
			require_once $fileName;
			$controller = new $url[0];
			/* вызов метода */
			if (isset($url[1])) {
				if (method_exists($controller, $url[1])) {
					/* передача параметров методу*/
					if (isset($url[2])) {
						$controller->{$url[1]}($url[2]);
					} else {
						$controller->{$url[1]}();
					}
				} else {
					echo 'Error method dose not exists';
				}
				
			} else {
				$controller -> index();
			}

		} else if (!file_exists($fileName)){
			echo 'Error file done not exists';
		}else if (file_exists($fileName) && $isAssets){
			include $fileName;
		}
	}
}