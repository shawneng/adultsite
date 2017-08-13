<!--Боковое меню-->
 <ul id="slide-out" class="side-nav">
     <?php
        echo '
    <li><div class="user-view">
            <div class="background">
                <img src="https://www.besthdwallpaper.com/download/colorful-triangles-wallpaper-2560x1080-47_14.jpg">
            </div>
            <a href="#!user"><img class="circle" src="' . $avatar . '"></a>
            <a href="#!name"><span class="white-text name">' . $login . '</span></a>
            <a href="#!email"><span class="white-text email"></span></a>
        </div></li>
    <li><a href="#!"><i class="material-icons">account_box</i>Мой профиль</a><span class="new badge red">'.$count_a.'</span></li>
    <li><a href="?liked"><i class="material-icons">favorite</i>Мое любимое</a><span class="new badge blue">'.$numh.'</span></li>
    <li><a href="?history"><i class="material-icons">restore</i>История</a></li>
    <li><a href="#!"><i class="material-icons">build</i>Настройки</a></li>
    <li><a href="../engine/exit.php?exit"><i class="material-icons">exit_to_app</i>Выход</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Студії</a></li>
    <li><a class="waves-effect " href="#!"><img src="https://image.spreadshirtmedia.com/image-server/v1/compositions/T812A2PA1663PT14X35Y63D1010253415S84C12%3A19/views/1,width=300,height=300,appearanceId=2/brazzers-primary-logo-men-s-premium-t-shirt.jpg" alt="" class="circle avatar"><span class="ver-center">Brazzers</span></a></li>
    ';
    ?>
</ul>
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
</ul>
<div class="navbar-fixed">
<nav>
    <div class="nav-wrapper">
        <?php if($_COOKIE['logining'] == 2) echo '<a href="#" data-activates="slide-out" class="button-collapses"><i class="material-icons">menu</i></a>';?>
        <a href="/" class="brand-logo">Name Site</a>
        <ul class="hide-on-med-and-down">
            <li>
                <form action="" class="s-form inline-block">
                    <input type="search" class="search" placeholder="Введите запрос" name="search">
                    <a class="waves-effect waves-light btn btn-s"><i class="material-icons i-s">search</i></a>
                </form>
            </li>
        </ul>
        <ul class="right hide-on-med-and-down">
            <li><a href="/">Главная</a></li>
            <li><a href="#">Категории</a></li>
            <li><a href="#">Porno Stars</a></li>
            <?php
            if($_COOKIE['logining'] != 2) {
                echo '<li><a class="waves-effect waves-light btn modal-trigger" href="#modal1">Войти <i class="material-icons right">perm_contact_calendar</i></a></li>
                ';
            }
            else {
                echo '<li><a href="#"><i class="material-icons right">notifications</i></a></li>
                      <li><a href="#"><i class="material-icons right">dehaze</i></a></li>
            ';
            }
            ?>
        </ul>
    </div>
</nav>
</div>
<!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content center">
        <h4>Авторизация</h4>
       <?php require_once "authorization.php"; ?>
    </div>
</div>