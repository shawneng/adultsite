<?php
// Отримуєм повну таблицю відосів і записуєм в двохмєрний массив
$sql = "SELECT * FROM `posts`";
$query_posts = mysqli_query($connect_DB, $sql);
$row_num = mysqli_num_rows($query_posts);
for ($g = 1; $g <= $row_num; $g++) {
    $posts[$g] = mysqli_fetch_assoc($query_posts);
}

// Отримуємо кількість сторінок
$pages = $row_num / 18;
$pages = (int)$pages;
$pages++;

// Отримуємо всі дані про юзера
$sql = "SELECT * FROM users WHERE id = '$id'";
$query_liked = mysqli_query($connect_DB, $sql);
$info_user = mysqli_fetch_assoc($query_liked);

// Отримуєм відоси які лайкнув юзер
$likes_array = $info_user['likes_video'];
$like_array = explode(', ', $likes_array);
$count_a = count($like_array);
$count_a--;

// Отримуєм історію переглядів
$history_video_id = explode(', ', $info_user['history']);
$num_videos = count($history_video_id);

require_once "head.php";
require_once "header.php";
if (!$_GET){
    // Вывод видео
    echo '<div class="content">';
    for ($i = $row_num; $i > $row_num - 18; $i--) {
        $info_array = $posts[$i];
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