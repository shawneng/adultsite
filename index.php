<?php
// Start Session
session_start();
// Include DB Configuration file
require_once 'engine/db_config.php';
// Connectin to DB and check
$connect_DB = mysqli_connect($hostDB, $userDB, $passwordDB, $nameDB) or die("Ошибка" . mysqli_error($connect_DB));

$id = $_COOKIE['id'];

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
// Отримуємо основні дані про юзера
$login = $info_user['login'];
$avatar = $info_user['avatar'];
$checkadmin = $info_user['status_user'];
setcookie('userStatus', $checkadmin);
if ($avatar == "") {
    $noavatar = true;
} else {
    $noavatar = false;
}

// Отримуєм відоси які лайкнув юзер
$likes_array = $info_user['likes_video'];
$like_array = explode(', ', $likes_array);
$count_a = count($like_array);
$count_a--;

// Отримуєм історію переглядів
$history_video_id = explode(', ', $info_user['history']);
$num_videos = count($history_video_id);

$sql = "SELECT * FROM categories";
$query_cat = mysqli_query($connect_DB, $sql);

// Вывод сообщения "Забыли пароль?"
if ($_COOKIE['logining'] == 1) {
    if (!isset($_COOKIE['attemp'])) {
        setcookie('attemp', 0);
    } else {
        $attemp = $_COOKIE['attemp'];
        $attemp++;
        setcookie('attemp', $attemp);
    }
} else {
    setcookie('attemp', '');
}

// Підключення шаблона і обробка запросів
require_once "templete/head.php";
require_once "templete/header.php";
if (!$_GET){
    require_once "templete/main.php";
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


//Сортировки
if(isset($_GET['sort'])) {
    require_once "sorts.php";
}

//*

if ($_COOKIE['userStatus'] == 2) {
    echo '<div class="fixed-action-btn horizontal">
    <a class="btn-floating btn-large">
      <i class="large material-icons pink">mode_edit</i>
    </a>
    <ul>
      <li><a class="btn-floating red" href="admin.php"><i class="material-icons">insert_chart</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>';
}
require_once "templete/bottom.php";
?>