<? require_once $_SERVER['DOCUMENT_ROOT'] . '/public_html/mvc/views/header.php'?>

<h1>
	Hello, <?=User::getName() ?>! <?= isset($this -> arResult["NEW_USER"]) && $this -> arResult["NEW_USER"] ? 'Вы зареганы' : ''?>
</h1>

<?php 

echo 'View Account <br/>';

?>

<? require_once $_SERVER['DOCUMENT_ROOT'] . '/public_html/mvc/views/footer.php'?>