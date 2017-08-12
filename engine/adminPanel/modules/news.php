<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 31.07.2017
 * Time: 2:29
 */

if (($_COOKIE['logining'] != 2) || ($_COOKIE['userStatus'] != 2)) {
    header('Location: /');
}
require_once '../modules/db_config.php';
$connect_DB = mysqli_connect($hostDB, $userDB, $passwordDB, $nameDB) or die("Ошибка" . mysqli_error($connect_DB));

$sql = "SELECT max(`id`) as `id` FROM `posts`";
$query = mysqli_query($connect_DB, $sql);
$news_num = mysqli_fetch_array($query);

//$sort = false;
$max = $news_num[0];
$min = 1;

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
    <div>
        <span>News: </span>
        <a href="addNews.php" class="addNews1"><b>Add News</b></a>
    </div>

    <div class="sortPanel">
        <div>
            <form action="editNews.php">
                <label>
                    <input name="id" type="number" class="inputId" value="<?php echo $_GET['id']; ?>">
                    <input name="inputIdBt" type="submit" class="btIdIn" value="Open news by id">
                </label>
            </form>
        </div>

        <div>
            <form>
                <label>
                    <input name="request" value="<?php echo $_GET['request']; ?>">
                    <input type="submit" name="search" value="Search">
                </label>
            </form>
        </div>
    </div>
    <div>
        <?php

        if (isset($_GET['request']) && $_GET['request'] != '') {

            $sql = "SELECT * FROM `posts`";
            $query = mysqli_query($connect_DB, $sql);

            $arraySearch = explode(" ", $_GET['request']);

            $n = 0;

            while ($infoArray = mysqli_fetch_array($query)) {
                $search = $infoArray['title'];
                $arrayNews = explode(" ", $search);

                if (array_intersect($arraySearch, $arrayNews)) {
                    echo '<a href="editNews.php?id=' . $infoArray['id'] . '" class = "showNews">
            <span><b>| ID: ' . $infoArray['id'] . ' |</b></span>
            <span>| Title: ' . $infoArray['title'] . ' |</span>
            <span>| Time: ' . $infoArray['time'] . ' |</span>
            <span>| Views: ' . $infoArray['views'] . ' |</span>
            <span>| Likes: ' . $infoArray['likes'] . ' |</span>
            </a>
            <a href="?id=' . $infoArray['id'] . '" class="btDeleteN"><b>Delete</b></a>
            ';
                    $n++;
                }
            }
            if ($n == 0) {
                echo 'false';
            }
        }

        else {
            for ($i = $max; $i >= $min; $i--) {
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
            <a href="?id=' . $infoArray['id'] . '" class="btDeleteN"><b>Delete</b></a>
            ';
                }
            }
        }
        ?>
    </div>
</div>

</body>
</html>