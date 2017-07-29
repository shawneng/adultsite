<?php
if ($_POST['exit']) {
    unset($_SESSION['login']);
    unset($_SESSION['password']);
    header("Location: ../");
}
if ($_POST['close']) {
    unset($_SESSION['checka']);
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
<?php require_once "head.php"; ?>
<?php require_once "header.php"; ?>


<?php require_once "bottom.php"; ?>