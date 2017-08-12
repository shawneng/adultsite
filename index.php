<?php
// Start Session
session_start();
// Include DB Configuration file
require_once 'engine/db_config.php';
// Connectin to DB and check
$connect_DB = mysqli_connect($hostDB, $userDB, $passwordDB, $nameDB) or die("Ошибка" . mysqli_error($connect_DB));
// Вывод сообщения "Забыли пароль?"
if ($_COOKIE['logining'] == 1) {
    if (!isset($_COOKIE['attemp'])) {
        setcookie('attemp', 0);
    } else {
        $attemp = $_COOKIE['attemp'];
        $attemp++;
        setcookie('attemp', $attemp);
    }
} else {
    setcookie('attemp', '');
}
// Получение и отображение аватарки пользователя
$id = $_SESSION['id'];
$sql = "SELECT login FROM users WHERE id = '$id' ";
$query = mysqli_query($connect_DB, $sql);
$row = mysqli_fetch_array($query);
$login = $row[0];
$sql = "SELECT avatar FROM users WHERE id = '$id' ";
$query = mysqli_query($connect_DB, $sql);
$row = mysqli_fetch_array($query);
$avatar = $row[0];
if ($avatar == "") {
    $noavatar = true;
} else {
    $noavatar = false;
}
// Проверка на статус пользователя
$sql = "SELECT status_user FROM users WHERE id = '$id' ";
$query = mysqli_query($connect_DB, $sql);
$row = mysqli_fetch_array($query);
$checkadmin = $row[0];
setcookie('userStatus', $checkadmin);
// Подключение шаблона
if ($_GET['id'] > 0) require_once "video.php";
else require_once "templete/main.php";
if ($_GET['search'] !== "" ) require_once "search.php";
else require_once "templete/main.php";
?>