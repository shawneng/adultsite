<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 31.07.2017
 * Time: 2:29
 */

if (($_COOKIE['logining'] != 2) || ($_COOKIE['userStatus'] !=2 ) ) {
    header('Location: /');
}
require_once '../modules/db_config.php';
$connect_DB = mysqli_connect($hostDB, $userDB, $passwordDB, $nameDB) or die("Ошибка" . mysqli_error($connect_DB));

$sql = "SELECT max(`id`) as `id` FROM `posts`";
$query = mysqli_query($connect_DB, $sql);
$news_num = mysqli_fetch_array($query);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `posts` WHERE `posts`.`id` = '$id'";
    $query = mysqli_query($connect_DB, $sql);
    header("Location: news.php");
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/engine/adminPanel/css/style.css" rel="stylesheet">
    <title>News</title>
</head>
<body>

<div class="head">
    <a href="/admin.php"><h1>News</h1></a>
    <a href="/admin.php" class="adminExit">Admin Panel</a>
    <a class="viewSite inline-block" href="/" target="_blank">Просмотр сайта</a>
</div>

<div class="table">
    <span>News</span>
    <a href="addNews.php" class="addNews1"><b>Add News</b></a>
    <?php

    for ($i = $news_num[0]; $i >= 1; $i--) {
        $sql = "SELECT * FROM `posts` WHERE `id` = '$i'";
        $query = mysqli_query($connect_DB, $sql);
        $infoArray = mysqli_fetch_assoc($query);

        if ($infoArray['id'] != '') {
            echo '<a href="editNews.php?id=' . $infoArray['id'] . '" class = "showNews">
            <span><b>| ID: ' . $infoArray['id'] . ' |</b></span>
            <span>| Title: ' . $infoArray['title'] . ' |</span>
            <span>| Time: ' . $infoArray['time'] . ' |</span>
            <span>| Views: ' . $infoArray['views'] . ' |</span>
            <span>| Likes: ' . $infoArray['likes'] . ' |</span>
            </a>
            <a href="?id=' . $infoArray['id'] . ' " class="btDeleteN"><b>Delete</b></a>
    ';
        }
    }
    ?>
</div>

</body>
</html>