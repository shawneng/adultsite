<?php
// Start Session
session_start();
// Include DB Configuration file
require_once 'engine/db_config.php';
// Connectin to DB and check
$connect_DB = mysqli_connect($hostDB, $userDB, $passwordDB, $nameDB) or die("Ошибка" . mysqli_error($connect_DB));
// Кнопка выхода из аккаунта
if ($_POST['exit']) {
    unset($_SESSION['login']);
    unset($_SESSION['password']);
    $_SESSION['checka'] = 0;
    $_SESSION['checkUser'] = 0;
    setcookie('logining', '0', time()+60*60*24,  '/', 'adultsite');
    header("Location: ../");
}
// Закрытие поля авторизации
if ($_POST['close']) {
    unset($_SESSION['checka']);
}
// Вывод сообщения "Забыли пароль?"
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
// Получение и отображение аватарки пользователя
$id = $_SESSION['id'];
$sql = "SELECT avatar FROM users WHERE id = '$id' ";
$query = mysqli_query($connect_DB, $sql);
$row = mysqli_fetch_array($query);
$avatar = $row[0];
if($avatar == "") {
    $noavatar = true;
}
else {
    $noavatar = false;
}
// Проверка на статус пользователя
$sql = "SELECT status_user FROM users WHERE id = '$id' ";
$query = mysqli_query($connect_DB, $sql);
$row = mysqli_fetch_array($query);
$checkadmin = $row[0];
$_SESSION['checkUser'] = $checkadmin;



// Подключение шаблона
require_once "templete/main.php";
?>