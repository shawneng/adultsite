<?php
// Include DB Configuration file
$id = $_POST['idUser'];
$idStudio = $_POST['idStudio'];
require_once 'engine/db_config.php';
// Connectin to DB and check
$connect_DB = mysqli_connect($hostDB, $userDB, $passwordDB, $nameDB) or die("Ошибка" . mysqli_error($connect_DB));
$sql = "UPDATE `users` SET `studios` = '$idStudio' WHERE `users`.`id` = $id";
$query = mysqli_query($connect_DB, $sql);
echo 'Подписка оформленна '.$_POST['idUser'];
?>