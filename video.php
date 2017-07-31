<?php
// Start Session
session_start();
// Include DB Configuration file
require_once 'engine/db_config.php';
// Connectin to DB and check
$connect_DB = mysqli_connect($hostDB, $userDB, $passwordDB, $nameDB) or die("Ошибка" . mysqli_error($connect_DB));
$id_video = $_GET['id'];
$sql = "SELECT * FROM posts WHERE id = '$id_video'";
$query = mysqli_query($connect_DB, $sql);
$info_array = mysqli_fetch_assoc($query);
require_once "templete/head.php";
require_once "templete/header.php";
require_once "templete/full-story.php";
require_once "templete/bottom.php";
?>