<?php require_once "templete/head.php"; ?>
<?php require_once "templete/header.php"; ?>
<?php require_once "templete/css/registration_style.php"; ?>
    <div class="regisctblock radius">
        <div class="namer textcenter">Регистрация</div>
    <form action="registrationform" method="post" class="formreg">
        <div class="textlogin rtext">Введите логин:</div>
        <label>
            <input class="rlogin rinput" name="rlogin">
        </label>
        <div class="textpass rtext">Введите пароль:</div>
        <label>
            <input type="password" class="rpassword rinput" name="rpassword">
        </label>
        <div class="textpass rtext">Повторите пароль:</div>
        <label>
            <input type="password" class="rpassword rinput">
        </label>
        <div class="textemail rtext">Введите email:</div>
        <label>
            <input type="email" class="remail rinput" name="email">
        </label>
        <div class="textemail">Согласен с правилами сайта</div>
        <label>
            <input type="checkbox" id="rcheck">
        </label>
        <input type="submit" class="registration radius" value="Зарегестрироваться">
    </form>
    </div>



<?php require_once "templete/bottom.php"; ?>