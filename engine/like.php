<?php
session_start();
// Include DB Configuration file
require_once 'db_config.php';
// Connectin to DB and check
$connect_DB = mysqli_connect($hostDB, $userDB, $passwordDB, $nameDB) or die("Ошибка" . mysqli_error($connect_DB));
$id_post = $_GET['id'];
$sql = "SELECT likes FROM posts WHERE id = '$id_post'";
$query = mysqli_query($connect_DB, $sql);
$row = mysqli_fetch_array($query);
$likes = $row[0] + 1;
$sql = "UPDATE `posts` SET `likes` = '$likes' WHERE `posts`.`id` = '$id_post'";
$query = mysqli_query($connect_DB, $sql);
header("Location: ../");
?>