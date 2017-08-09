<?php
session_start();
// Include DB Configuration file
require_once 'db_config.php';
// Connectin to DB and check
$connect_DB = mysqli_connect($hostDB, $userDB, $passwordDB, $nameDB) or die("Ошибка" . mysqli_error($connect_DB));
$id_post = $_GET['id'];
$id_user = $_GET['iduser'];
$id_post_k = $id_post . ",";
$sql = "SELECT likes FROM posts WHERE id = '$id_post'";
$query = mysqli_query($connect_DB, $sql);
$row = mysqli_fetch_array($query);
$sql = "SELECT likes_video FROM users WHERE id = '$id_user'";
$query = mysqli_query($connect_DB, $sql);
$likes_array = mysqli_fetch_array($query);
$likes = $likes_array[0];
$new_like = $likes . $id_post . ', ';
if($_GET['like'] == 1) {
    $likes = $row[0] - 1;
    $new_like_array = explode(" ", $new_like);
    $key = array_search($id_post_k , $new_like_array);
    unset($new_like_array[$key]);
    $key = array_search($id_post_k , $new_like_array);
    unset($new_like_array[$key]);
    $new_like_array = array_values($new_like_array);
    $new_like_s = implode(" ", $new_like_array);
    $sql = "UPDATE `users` SET `likes_video` = '$new_like_s' WHERE `users`.`id` = '$id_user'";
    $query = mysqli_query($connect_DB, $sql);
}
if ($_GET['like'] == 2) {
    $likes = $row[0] + 1;
    $sql = "UPDATE `users` SET `likes_video` = '$new_like' WHERE `users`.`id` = '$id_user'";
    $query = mysqli_query($connect_DB, $sql);
}
$sql = "UPDATE `posts` SET `likes` = '$likes' WHERE `posts`.`id` = '$id_post'";
$query = mysqli_query($connect_DB, $sql);
header("Location: ".$_SERVER['HTTP_REFERER']);
?>