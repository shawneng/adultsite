<?php
session_start();
require_once 'engine/db_config.php';
$connect_DB = mysqli_connect($hostDB, $userDB, $passwordDB, $nameDB) or die("Ошибка" . mysqli_error($connect_DB));
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
$sql = "SELECT status_user FROM users WHERE id = '$id' ";
$query = mysqli_query($connect_DB, $sql);
$row = mysqli_fetch_array($query);
$checkadmin = $row[0];
require_once "templete/main.php";
?>