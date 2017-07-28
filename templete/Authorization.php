<?php
if (isset($_SESSION['login']) and isset($_SESSION['password'])) {
    if ($_SESSION['checka'] == 2) {
        echo '
    <div id="profile">
        <div class="avatar"><img src="../templete/images/no_avatar.png" alt=""></div>
        <div id="profilenav" class="textcenter pointer" onmouseover="openloginmenu()" onmouseout="closeloginmenu()">' . $_SESSION['login'] . '</div> 
    </div>
    <div id="loginmenu" class="textcenter radius" onmouseover="openloginmenu()" onmouseout="closeloginmenu()">
        <div class="li pointer"><a href="#" class="lipro profile trans">Мой профиль</a></div>
        <div class="li pointer"><a href="#" class="lipro favorites trans">Мое любимое</a></div>
        <div class="li pointer"><a href="#" class="lipro history trans">История</a></div>
        <div class="li pointer"><a href="#" class="lipro settings trans">Настройки</a></div>
        <form method="post">
            <input type="submit" name="exit" value="Выйти" class="exit" onclick="opensearch()">
        </form>
    </div>
    ';
    } elseif ($_SESSION['checka'] == 1) {
        echo '
            <div id="auth">
                <button onclick=\'changeStyleDiv()\' id="access">Войти</button>
            </div>
        ';
        echo '<div class="errorlogin textcenter radius" id="closeerror">Неверный логин или пароль</div>';
    } else {
        echo '
        <div id="auth">
            <button onclick=\'changeStyleDiv()\' id="access">Войти</button>
        </div>
    ';
    }
} else {
    echo '
        <div id="auth">
            <button onclick=\'changeStyleDiv()\' id="access">Войти</button>
        </div>
    ';
}
?>
<div id="bga" onclick="closemenu()">
</div>
<div id="authorization" class="radius">
    <div class="nameauth ">Авторизация</div>
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
            <a href="#" class="registr textcenter radius inline-block right trans">Регистрация</a>
        </div>
    </form>
    <?php if ($_COOKIE['attemp'] > 3) echo '<div class="forgot textcenter"><a href="#">Забыли пароль?</a></div>';?>
</div>