<?php
// Start Session
session_start();
// Include DB Configuration file
require_once 'engine/db_config.php';
// Connectin to DB and check
$connect_DB = mysqli_connect($hostDB, $userDB, $passwordDB, $nameDB) or die("Ошибка" . mysqli_error($connect_DB));

$id = $_COOKIE['id'];
$count_posts_wall = 10;
$pre_url_array = explode("?", $_SERVER['HTTP_REFERER']);
$pre_url = $pre_url_array[1];

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
$studios = $info_user['studios'];
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
$max_posts_liked = $count_a;
$count_a--;

// Отримуєм історію переглядів
$history_video_id = explode(', ', $info_user['history']);
$num_videos = count($history_video_id);

$sql = "SELECT * FROM studios";
$query_studio = mysqli_query($connect_DB, $sql);
$row_studio = mysqli_num_rows($query_studio);
for ($i = 1; $i <= $row_studio; $i++) {
    $studios_array[$i] = mysqli_fetch_assoc($query_studio);
}
$info_studio = $studios_array[1];
$studios_f_user = explode(", ", $info_user['studios']);
$int_studios = count($studios_f_user);
$int_studios--;

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
// Сторінки
if (isset($_GET['page'])) {
    $active_page = (int)$_GET['page'];
    $active_page--;
    $active_page = $active_page * $count_posts_wall;
    $max_count_posts = $row_num - $active_page;
    $end_post = $max_count_posts - $count_posts_wall;
}
else {
    $max_count_posts = $row_num;
    $end_post = $row_num - $count_posts_wall;
}
function page($all_video, $count_posts_wall){
    if ($all_video > $count_posts_wall){
        $pages = $all_video / $count_posts_wall;
        $pages = (int)$pages;
        $pages++;
        if ($pre_url = " ") {
            echo '<ul class="pagination">';
            for ($i = 1; $i <= $pages; $i++) {
                if ($i == 1) {
                    echo '<li class="waves-effect"><a href="/">' . $i . '</a></li>';
                } else {
                    if ($i == $active_page) {
                        echo '<li class="active"><a href="?page=' . $i . '">' . $i . '</a></li>';
                    } else {
                        echo '
        <li class="waves-effect"><a href="?page=' . $i . '">' . $i . '</a></li>
        ';
                    }
                }
            }
        }
        else {
            echo '<ul class="pagination">';
            echo $pre_url;
            for ($i = 1; $i <= $pages; $i++) {
                if ($i == 1) {
                    echo '<li class="waves-effect"><a href="/">' . $i . '</a></li>';
                } else {
                    if ($i == $active_page) {
                        echo '<li class="active"><a href="?=' . $i . '">' . $i . '</a></li>';
                    } else {
                        echo '
        <li class="waves-effect"><a href="?=' . $i . '">' . $i . '</a></li>
        ';
                    }
                }
            }
        }
    }
}

// Підключення шаблона і обробка запросів
require_once "templete/head.php";
require_once "templete/header.php";
if (!$_GET || isset($_GET['page'])){
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
//if(isset($_GET['page'])) {
//    require_once "page.php";
//}
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