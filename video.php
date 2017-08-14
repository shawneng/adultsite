<?php
// Підключення головних змінних
$id_video = $_GET['id'];
$id_user = $info_user['id'];
$info_array = $posts[$id_video];
$history = $info_user['history'];
// Добавлення видео в історію
$history_array = explode(', ', $info_user['history']);
if (empty($history_array[0])) {
    $empty_k = array_search(' ', $history_array);
    unset($history_array[$empty_k]);
}
// Якшо немає вже в історії такого id
if (!in_array($id_video, $history_array)) {
    $history_array[] = $id_video;
    $history = implode(', ', $history_array);
    $sql = "UPDATE `users` SET `history` = '$history' WHERE `users`.`id` = '$id_user'";
    $query = mysqli_query($connect_DB, $sql);
}
// Якшо є таке id в історії
else {
    $id_video_h = array_search($id_video, $history_array);
    unset($history_array[$id_video_h]);
    $history_array = array_values($history_array);
    $history_array[] = $id_video;
    $history = implode(', ', $history_array);
    $sql = "UPDATE `users` SET `history` = '$history' WHERE `users`.`id` = '$id_user'";
    $query = mysqli_query($connect_DB, $sql);
}


// Підключення шаблона
require_once "templete/full-story.php";

// Оновлення просмотрів
$views = $info_array['views'] + 1;
$sql = "UPDATE `posts` SET `views` = '$views' WHERE `posts`.`id` = $id_video";
$query = mysqli_query($connect_DB, $sql);
?>