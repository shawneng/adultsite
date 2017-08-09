<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 31.07.2017
 * Time: 2:30
 */

if (($_COOKIE['logining'] != 2) || ($_COOKIE['userStatus'] != 2)) {
    header('Location: /');
}

require_once '../modules/db_config.php';
$connect_DB = mysqli_connect($hostDB, $userDB, $passwordDB, $nameDB) or die("Ошибка" . mysqli_error($connect_DB));

$sql = "SELECT `id` FROM `posts`";
$query = mysqli_query($connect_DB, $sql);
$row_num = mysqli_num_rows($query);

$sql = "SELECT max(`id`) as `id` FROM `categories`";
$query = mysqli_query($connect_DB, $sql);
$cat_num = mysqli_fetch_array($query);

$title = $_POST['title'];
$videoLink = $_POST['videoLink'];
$description = $_POST['description'];
$keywords = $_POST['keywords'];
$time = $_POST['time'];

if (isset($_POST['buttonAdd']) && ($_POST['title'] != '')) {
    $row_num++;
    $sql = "INSERT INTO `posts` (`id`, `title`, `pre`, `descr`, `time`, `views`, `likes`, `video`, `keywords`) 
                            VALUES ('$row_num', '$title', '', '$description', '$time', '0', '0', '', '$keywords')";
    //$query = mysqli_query($connect_DB, $sql);
    //header("Location: ../modules/news.php");
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
    <title>AddNews</title>
</head>
<body>
<div class="head">
    <a href="/admin.php"><h1>Add News</h1></a>
    <a class="viewSite inline-block" href="/" target="_blank">Просмотр сайта</a>
    <a class="viewSite inline-block" href="/admin.php">Admin Panel</a>
</div>

<form method="post">
    <div class="addPanel">
        <div class="editTitle">
            <span>Title*: </span>
            <div>
                <label>
                    <input name="title" class="inputTitle">
                </label>
            </div>
        </div>

        <div class="editLink">
            <span>Link video*: </span>
            <div>
                <label>
                    <input name="videoLink" class="inputVideoLink">
                </label>
            </div>
        </div>

        <div class="editDescription">
            <span>Description: </span>
            <div>
                <label>
                    <textarea name="description" class="inputDescription"></textarea>
                </label>
            </div>
        </div>

        <div class="editKeywords">
            <span>Keywords: </span>
            <div>
                <label>
                    <textarea name="keywords" class="inputKeywords"></textarea>
                </label>
            </div>
        </div>

        <div class="editTime">
            <span>Time*: </span>
            <div>
                <label>
                    <input name="time" class="inputTime">
                </label>
            </div>
        </div>

        <div class="editScreenLink">
            <span>Screen link*: </span>
            <div>
                <label>
                    <input name="screenLink" class="inputScreenLink">
                </label>
            </div>
        </div>

        <div class="viewPreview">
            <label>
                <input type="submit" name="preview" id="preview" class="selectPreview" value="Select Preview">
            </label>
        </div>
    </div>

    <div class="addPanelRight inline-block">
        <div class="selectCategories">
            <span>Categories*: </span>
            <?php

            for ($i = 1; $i <= $cat_num[0]; $i++) {
                $sql = "SELECT * FROM `categories` WHERE `id` = '$i'";
                $query = mysqli_query($connect_DB, $sql);
                $infoArray = mysqli_fetch_assoc($query);

                if ($infoArray['id'] != '') {
                    echo '       
                    <input type="checkbox" value=' . $infoArray['id'] . ' id="cat' . $i . '" name="catCheck[]">
                    <label for = "cat' . $i . '" > ' . $infoArray['name'] . ' </label>
                    ';
                }
            }
            ?>

        </div>

        <div class="showPreview">
            <span>Preview: </span>
        </div>

        <div class="finalAdd">
            <label>
                <input type="submit" name="buttonAdd" value="Add News" class="buttonAdd">
            </label>
        </div>
    </div>
</form>
</body>
</html>