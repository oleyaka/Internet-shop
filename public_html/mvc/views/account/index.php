<? require_once $_SERVER['DOCUMENT_ROOT'] . '/public_html/mvc/views/header.php'?>

<h1>
	Hello, <?=User::getName()?>
</h1>

<?php 

echo 'View Account <br/>';

?>

<? require_once $_SERVER['DOCUMENT_ROOT'] . '/public_html/mvc/views/footer.php'?>