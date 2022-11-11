<? require_once $_SERVER['DOCUMENT_ROOT'] . '/public_html/mvc/views/header.php'?>


<div class="row">

  <div class="col-lg-6 col-md-6 col-sm-12">

    <div class="h3">
      Авторизация
    </div>

    <? if (isset ($this -> arResult['ERROR'])) { ?>
    	<p class="error">
    		<?=$this -> arResult['ERROR']?>
    	</p>
    <? } ?>


    <form name="formLogin" method="post" action="/public_html/mvc/login/login/">

      <div class="mb-3">
        <label for="login" class="form_label">Логин</label>
        <br/>
        <input type="login" class="form_input" id="login" aria-describedby="emailHelp" name="login">
      </div>

      <br/>

      <div class="mb-3">
        <label for="password" class="form_label">Пароль</label>
        <br/>
        <input type="password" class="form_input" id="password" name="password">
      </div>

      <br/>

      <input type="submit" class="form_btn" value="Войти">

    </form>

  </div> 

  <div class="col-lg-6 col-md-6 col-sm-12">

    <div class="h3">
      Регистрция
    </div>

    <div class="alert alert-danger block_error" role="alert">
      <span class="pass_error">Пароли не совпадают</span>
      <span class="login_error">Логин уже существует</span>
    </div>

    <form name="formRegistr" id="formRegistr" method="post" action="/public_html/mvc/login/reg/">

      <div class="mb-3">
        <label for="name" class="form_label">Имя*</label>
        <br/>
        <input type="name" required="required" class="form_input" id="name" name="name">
      </div>

      <br/>

      <div class="mb-3">
        <label for="loginReg" class="form_label">Логин (Email)*</label>
        <br/>
        <input type="loginReg" required="required" class="form_input" id="loginReg" aria-describedby="emailHelp" name="loginReg">
      </div>

      <br/>

      <div class="mb-3">
        <label for="passwordOne" class="form_label">Пароль*</label>
        <br/>
        <input type="password" required="required" class="form_input" id="passwordOne" name="passwordOne">
      </div>

      <br/>

      <div class="mb-3">
        <label for="passwordTwo" class="form_label">Подтверждение пароля*</label>
        <br/>
        <input type="password" required="required" class="form_input" id="passwordTwo" name="passwordTwo">
      </div>

      <br/>

      <input type="submit" class="form_btn" value="Зарегистрироваться">

      <br/>

    </form>

  </div>

</div>


<? require_once $_SERVER['DOCUMENT_ROOT'] . '/public_html/mvc/views/footer.php'?>