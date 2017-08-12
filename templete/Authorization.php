<form action="../engine/formlogin.php" method="post">
    <div class="login">
        <div class="input-field col s6">
            <i class="material-icons prefix">account_circle</i>
            <input id="icon_prefix" type="text" class="validate" name="login">
            <label for="icon_prefix">Введите логин:</label>
        </div>
    </div>
    <div class="password">
        <div class="input-field col s6">
            <i class="material-icons prefix">security</i>
            <input id="icon_prefix" type="password" class="validate" name="password">
            <label for="icon_prefix">Введите пароль:</label>
        </div>
    </div>
    <div class="subauth">
        <label>
            <input type="submit" value="Войти" class="waves-effect waves-light btn inline-block">
        </label>
        <a href="/registration.php" class="waves-effect waves-teal btn-flat">Регистрация</a>
    </div>
</form>
<?php if ($_COOKIE['attemp'] >= 3) echo '<div class="forgot textcenter"><a href="#">Забыли пароль?</a></div>'; ?>