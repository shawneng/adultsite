<?php
unset($_SESSION['login']);
unset($_SESSION['password']);
$_SESSION['checka'] = 0;
//$_SESSION['checkUser'] = 0;
setcookie('logining', '0', time() + 60 * 60 * 24, '/', 'adultsite');
setcookie('userStatus', '0', time() + 60 * 60 * 24, '/', 'adultsite');
header('Location: ../');
?>