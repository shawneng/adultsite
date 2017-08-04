<div id="bga" onclick="closemenu()">
    <form action="" method="post">
        <input type="submit" class="closea" name="close">
    </form>
</div>
<div id="authorization" class="radius">
    <div class="nameauth">Авторизация</div>
    <form action="../engine/formlogin.php" method="post">
        <div class="login">
            <span>Введите логин:</span>
            <label class="block">
                <input name="login" id="login" class="radius">
            </label>
        </div>
        <div class="password">
            <span>Введите пароль:</span>
            <label class="block">
                <input type="password" name="password" id="password" class="radius">
            </label>
        </div>
        <div class="subauth">
            <label>
                <input type="submit" value="Войти" class="submita inline-block radius trans">
            </label>
            <a href="/registration.php" class="registr textcenter radius inline-block right trans">Регистрация</a>
        </div>
    </form>
    <?php if ($_COOKIE['attemp'] >= 3) echo '<div class="forgot textcenter"><a href="#">Забыли пароль?</a></div>'; ?>
</div>