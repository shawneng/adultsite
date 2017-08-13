<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 09.08.2017
 * Time: 15:36
 */

if (($_COOKIE['logining'] != 2) || ($_COOKIE['userStatus'] != 2)) {
    header('Location: /');
}
require_once '../modules/db_config.php';
$connect_DB = mysqli_connect($hostDB, $userDB, $passwordDB, $nameDB) or die("Ошибка" . mysqli_error($connect_DB));

$id = $_GET['id'];
$sql = "SELECT * FROM `posts` WHERE `id` = '$id'";
$query = mysqli_query($connect_DB, $sql);
$infoArray = mysqli_fetch_assoc($query);

$title = $_POST['title'];
$videoLink = $_POST['videoLink'];
$description = $_POST['description'];
$keywords = $_POST['keywords'];
$time = $_POST['time'];

if (isset($_POST['buttonSave'])) {
    $sql = "UPDATE `posts` SET `title` = '$title', `video` = '$videoLink', `descr` = '$description', `time` = '$time', `keywords` = '$keywords' WHERE `id` = '$id'";
    $query = mysqli_query($connect_DB, $sql);
    header("Location: news.php");
}
if (isset($_POST['buttonDelete'])) {
    $sql = "DELETE FROM `posts` WHERE `posts`.`id` = '$id'";
    $query = mysqli_query($connect_DB, $sql);
    header("location: news.php");
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
    <title>Edit News</title>
</head>
<body>
<div class="head">
    <a href="news.php"><h1>Edit News</h1></a>
    <a class="viewSite inline-block" href="/" target="_blank">Просмотр сайта</a>
    <a class="viewSite inline-block" href="/admin.php">Admin Panel</a>
</div>

<form method="post">
    <div class="addPanel">
        <div class="editTitle">
            <span>Title*: </span>
            <div>
                <label>
                    <input name="title" class="inputTitle" value="<?php echo $infoArray['title']; ?>">
                </label>
            </div>
        </div>

        <div class="editLink">
            <span>Link video*: </span>
            <div>
                <label>
                    <input name="videoLink" class="inputVideoLink" value="<?php echo $infoArray['video']; ?>">
                </label>
            </div>
        </div>

        <div class="editDescription">
            <span>Description: </span>
            <div>
                <label>
                    <textarea name="description" class="inputDescription"><?php echo $infoArray['descr']; ?></textarea>
                </label>
            </div>
        </div>

        <div class="editKeywords">
            <span>Keywords: </span>
            <div>
                <label>
                    <textarea name="keywords" class="inputKeywords"><?php echo $infoArray['keywords']; ?></textarea>
                </label>
            </div>
        </div>

        <div class="editTime">
            <span>Time*: </span>
            <div>
                <label>
                    <input name="time" class="inputTime" value="<?php echo $infoArray['time']; ?>">
                </label>
            </div>
        </div>

        <div class="editScreenLink">
            <span>Screen link*: </span>
            <div>
                <label>
                    <input name="screenLink" class="inputScreenLink" value="<?php echo $infoArray['pre']; ?>">
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
        </div>

        <div class="showPreview">
            <span>Preview: </span>
        </div>

        <div class="showDate">
            <b><span>Date: </span>
                <?php
                echo $infoArray['date'];
                ?>
            </b>
        </div>

        <div class="finalAdd">
            <label>
                <input type="submit" name="buttonSave" value="Save News" class="buttonAdd">
            </label>
        </div>
        <div class="finalAdd">
            <label>
                <input type="submit" name="buttonDelete" value="Delete News" class="buttonDel">
            </label>
        </div>
    </div>
</form>
</body>
</html>
