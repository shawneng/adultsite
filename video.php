<?php
$id_video = $_GET['id'];
$id = $_SESSION['id'];
$id_video_for_a = $id_video . ",";
$sql = "SELECT * FROM posts WHERE id = '$id_video'";
$query = mysqli_query($connect_DB, $sql);
$info_array = mysqli_fetch_assoc($query);
$views = $info_array['views'] + 1;
$sql = "UPDATE `posts` SET `views` = '$views' WHERE `posts`.`id` = $id_video";
$query = mysqli_query($connect_DB, $sql);
$sql = "SELECT * FROM users WHERE `id` = '$id'";
$query = mysqli_query($connect_DB, $sql);
$info_user = mysqli_fetch_assoc($query);
if ($info_user['history'] == null) {
    $info_user['history'] = $id_video . ", ";
    $history = $info_user['history'];
    $id_user = $info_user['id'];
    $sql = "UPDATE `users` SET `history` = '$history' WHERE `users`.`id` = '$id_user'";
    $query = mysqli_query($connect_DB, $sql);
}
else {
    $history_array = explode(' ', $info_user['history']);
    if (!in_array($id_video_for_a, $history_array)) {
        $history_array[] =  $id_video . ", ";
        $history = implode(' ', $history_array);
        $id_user = $info_user['id'];
        $sql = "UPDATE `users` SET `history` = '$history' WHERE `users`.`id` = '$id_user'";
        $query = mysqli_query($connect_DB, $sql);
    }
}
require_once "templete/full-story.php";
?>