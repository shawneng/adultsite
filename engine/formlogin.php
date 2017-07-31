<?php
session_start();
require_once '../engine/db_config.php';
$connect_DB = mysqli_connect($hostDB, $userDB, $passwordDB, $nameDB) or die("Ошибка" . mysqli_error($connect_DB));
$_SESSION['login'] = $_POST['login'];
$_SESSION['password'] = $_POST['password'];
if($_SESSION['login'] == null || $_SESSION['password'] == null){
    $_SESSION['checka'] = 0;
}
else {
    $sql = "SELECT `login` FROM `users`";
    $query = mysqli_query($connect_DB, $sql);
    $row_num = mysqli_num_rows($query);
    for ($i = 0; $i < $row_num; $i++) {
        $logins[] = mysqli_fetch_assoc($query);
        $logins_array[] = implode('', $logins[$i]);
    }
    if (in_array($_SESSION['login'], $logins_array)) {
        $loginDB = $_SESSION['login'];
        $sql = "SELECT `password` FROM `users` WHERE `login` = '$loginDB'";
        $query = mysqli_query($connect_DB, $sql);
        $arrayDB = mysqli_fetch_array($query);
        if ($_SESSION['password'] == $arrayDB[0]) {
            setcookie('logining', '2', time()+60*60*24,  '/', 'adultsite');
            $sql = "SELECT `id` FROM `users` WHERE `login` = '$loginDB'";
            $query = mysqli_query($connect_DB, $sql);
            $arrayDB = mysqli_fetch_array($query);
            $_SESSION['id'] = $arrayDB[0];
        } else {
            setcookie('logining', '1', time()+60*60*24,  '/', 'adultsite');
        }
    } else {
        setcookie('logining', '1', time()+60*60*24,  '/', 'adultsite');
    }
}
header("Location: ../");
?>