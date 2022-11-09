<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style><? require_once 'public/style/style.css'; ?></style>
	<!-- <link rel="stylesheet" type="text/css" href="/public_html/mvc/public/style/style.css" . <? rand(100, 1000)?>> -->
	<script type="text/javascript" src="/public_html/mvc/public/js/jquery.js"></script>
	<script type="text/javascript" src="/public_html/mvc/public/js/custom.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<title>Title</title>
</head>
<body>

	<div id="header">
		<a href="<?=BASE_DIR?>/index/">Главная</a>
		<a href="<?=BASE_DIR?>/catalog/">Каталог</a>
		<? if (User::isLogin()) { ?>
			<a href="<?=BASE_DIR?>/login/logout/">Выйти</a>
			<a href="<?=BASE_DIR?>/account/">Аккаунт</a>
		<? } else { ?>
			<a href="<?=BASE_DIR?>/login/">Войти</a>
		<? } ?>
	</div>

	<div id="main_container">
		
	