<?php
if (isset($_SESSION['login']) and isset($_SESSION['password'])) {
    if ($_COOKIE['logining'] == 2) {
        echo '
    <div id="profile">';
        if($noavatar){
            echo '<div class="avatar"><img src="../templete/images/no_avatar.png" alt="" class="noavatar"></div>';
        }
        else {
            echo '<div class="avatar"><img src="'. $avatar .'" alt="" class="eavatar"></div>';
        }
        echo '
        <div id="profilenav" class="textcenter pointer inline-block" onmouseover="openloginmenu()" onmouseout="closeloginmenu()">' . $_SESSION['login'] . '</div> 
        <div class="profileadd inline-block"><img src="../templete/images/menu_open.png" alt="" class="menu_add"></div>
    </div>
    <div id="loginmenu" class="textcenter radius" onmouseover="openloginmenu()" onmouseout="closeloginmenu()">
        <div class="block1">';
        if ($checkadmin == 2) echo '<div class="li pointer"><a href="../admin.php" class="lipro panel trans">Админ панель</a></div>';
        echo '
            <div class="li pointer"><a href="#" class="lipro profile trans">Мой профиль</a></div>
            <div class="li pointer"><a href="#" class="lipro favorites trans">Мое любимое</a></div>
            <div class="li pointer"><a href="?history" class="lipro history trans">История</a><div class="numh">'. $numh .'</div></div>
            <div class="li pointer"><a href="#" class="lipro settings trans">Настройки</a></div>
            <form method="post" class="formexit">
                <input type="submit" name="exit" value="Выйти" class="exit">
            </form>
        </div>
    </div>
    ';
    } elseif ($_COOKIE['logining'] == 1) {
        echo '
            <div id="auth">
                <img src="../templete/images/enter.png" alt="" class="enter"><button onclick=\'changeStyleDiv()\' id="access">Войти</button>
            </div>
        ';
        echo '<div class="errorlogin textcenter radius" id="closeerror">Неверный логин или пароль</div>';
    } else {
        echo '
        <div id="auth">
            <img src="../templete/images/enter.png" alt="" class="enter"><button onclick=\'changeStyleDiv()\' id="access">Войти</button>
        </div>
    ';
    }
} else {
    echo '
        <div id="auth">
            <img src="../templete/images/enter.png" alt="" class="enter"><button onclick=\'changeStyleDiv()\' id="access">Войти</button>
        </div>
    ';
}
?>