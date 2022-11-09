<? require_once $_SERVER['DOCUMENT_ROOT'] . '/public_html/mvc/views/header.php'?>

<h1>Войти</h1>


<? if (isset ($this -> arResult['ERROR'])) { ?>
	<p class="error">
		<?=$this -> arResult['ERROR']?>
	</p>
<? } ?>


<form name="formLogin" method="post" action="/public_html/mvc/login/login/">
  <div class="mb-3">
    <label for="login" class="form-label">Логин</label>
    <input type="login" class="form-control" id="login" aria-describedby="emailHelp" name="login">
  </div>
  <br/>
  <div class="mb-3">
    <label for="password" class="form-label">Пароль</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <br/>
  <input type="submit" class="btn btn-primary" value="Войти">
</form>

<? require_once $_SERVER['DOCUMENT_ROOT'] . '/public_html/mvc/views/footer.php'?>