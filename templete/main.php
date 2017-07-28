<?php
if ($_POST['exit']) {
    unset($_SESSION['login']);
    unset($_SESSION['password']);
    header("Location: ../");
}
if($_SESSION['checka'] == 1){
    if(!isset($_COOKIE['attemp'])){
        setcookie('attemp', 0);
    }
    else {
        $attemp = $_COOKIE['attemp'];
        $attemp++;
        setcookie('attemp', $attemp);
    }
}
else {
    setcookie('attemp', '');
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php //$title ?></title>
    <?php require_once "style.php" ?>
</head>
<body>
<header>
    <div id="head" class="center">
        <div id="logo" class="inline-block">
            <a href="/">Name Site</a>
        </div>
        <div id="navigation">
            <a href="/" class="nava">Главная</a>
            <a href="#" class="nava">Категории</a>
            <a href="#" class="nava">Porno Stars</a>
        </div>
        <div id="search" class="right">
            <form action="../engine/searchform.php" id="formsearch">
                <div id="poisk">Поиск</div>
                <label>
                <input class="search" id="opensearch" name="search">
                </label>
                <div class="closesearch" onclick="closesearch()"><img src="../templete/images/close.png" alt=""></div>
            </form>
                <div class="subsearch pointer" onclick="opensearch()"><img src="../templete/images/search.png" alt=""></div>
        </div>
        <div id="head_block_right" class="right ">
            <?php require_once "authorization.php"; ?>
        </div>
    </div>
</header>
<script src="../templete/js/display.js"></script>
<?php
echo '
<script>
var a = 1;
if ( a === ' . $_SESSION['checka'] . ' ) {
        document.getElementById(\'authorization\').style.display = \'block\';
        document.getElementById(\'bga\').style.display = \'block\';
        document.getElementById(\'login\').style.border = \'1px solid red\';
        document.getElementById(\'password\').style.border = \'1px solid red\';
}
</script>
';
?>
</body>
</html>
<link href="../templete/css/style.css" rel="stylesheet">