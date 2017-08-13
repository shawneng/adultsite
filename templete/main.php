<?php
// Получение видео которые лайкнув пользователь
$sql = "SELECT likes_video FROM users WHERE id = '$id'";
$query = mysqli_query($connect_DB, $sql);
$likes_array = mysqli_fetch_array($query);
$likes = $likes_array[0];
$like_array = explode(', ', $likes);
$k_empty = array_search(' ', $like_array);
unset($like_array[$k_empty]);
$count_a = count($like_array);
// Получение
$sql = "SELECT `history` FROM `users` WHERE id = '$id'";
$query = mysqli_query($connect_DB, $sql);
$history_video_a = mysqli_fetch_array($query);
$history_video_id = explode(', ', $history_video_a[0]);
$num_videos = count($history_video_id);
$num_videos = $num_videos-1;
$numh = $num_videos;
$sql = "SELECT max(id) as id FROM `categories`";
$query = mysqli_query($connect_DB, $sql);
$num_cat = mysqli_fetch_array($query);
require_once "head.php";
require_once "header.php";
if (!$_GET){
    // Вывод видео
    echo '<div class="content">';
    $sql = "SELECT * FROM `posts` ORDER BY `posts`.`id` DESC";
    $query = mysqli_query($connect_DB, $sql);
    $row_num = mysqli_num_rows($query);
    $pages = $row_num / 10;
    $pages = (int)$pages;
    $pages++;
    for ($i = 0; $i < 18; $i++) {
        require "short-story.php";
    }
    echo '<ul class="pagination">';
    $active_page = (int)$_GET['page'];
    for ($i = 1; $i <= $pages; $i++) {
        if ($i == 1) {
            echo '<li class="active"><a href="?page=' . $i . '">' . $i . '</a></li>';
        } else {
            echo '
        <li class="waves-effect"><a href="?page=' . $i . '">' . $i . '</a></li>
        ';
        }
    }
    echo '<li class="waves-effect"><a href="?page=2"><i class="material-icons">chevron_right</i></a></li></ul>';
}
if ($_GET['id']) {
    require_once "video.php";
}
if (isset($_GET['history'])){
    require_once "engine/history.php";
}
if(isset($_GET['categorie'])) {
    require_once "engine/category.php";
}
if(isset($_GET['liked'])) {
    require_once "engine/liked.php";
}
if(isset($_GET['page'])) {
    require_once "page.php";
}
if(isset($_GET['search'])){
    require_once "engine/search.php";
}
if ($_COOKIE['userStatus'] == 2) {
    echo '<div class="fixed-action-btn horizontal">
    <a class="btn-floating btn-large green">
      <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
      <li><a class="btn-floating red" href="../admin.php"><i class="material-icons">insert_chart</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>';
}
require_once "bottom.php";
?>