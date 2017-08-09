<?php
$sql = "SELECT `history` FROM `users` WHERE id = '$id'";
$query = mysqli_query($connect_DB, $sql);
$history_video_a = mysqli_fetch_array($query);
$history_video_id = explode(', ', $history_video_a[0]);
$num_videos = count($history_video_id);
$num_videos = $num_videos-1;
$numh = $num_videos;
require_once "head.php";
require_once "header.php";
if (!$_GET){
    require_once "short-story.php";
}
if (isset($_GET['history'])){
    require_once "engine/history.php";
}
require_once "bottom.php";
?>