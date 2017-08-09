<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 09.08.2017
 * Time: 0:06
 */

if (($_COOKIE['logining'] != 2) || ($_COOKIE['userStatus'] != 2)) {
    header('Location: /');
}

require_once '../modules/db_config.php';
$connect_DB = mysqli_connect($hostDB, $userDB, $passwordDB, $nameDB) or die("Ошибка" . mysqli_error($connect_DB));

$sql = "SELECT `id` FROM `categories`";
$query = mysqli_query($connect_DB, $sql);
$id = mysqli_num_rows($query);

$name = $_POST['name'];
$title = $_POST['title'];
$description = $_POST['description'];
$keywords = $_POST['keywords'];
$avatar = $_POST['avatar'];

if (isset($_POST['btAddCat']) && $_POST['name']!='') {
    $id++;
    $sql = "INSERT INTO `categories` (`id`, `name`, `title`, `description`, `keywords`, `videos`, `avatar`) 
                VALUE ('$id', '$name', '$title', '$description', '$keywords', '0', '$avatar' )";
    $query = mysqli_query($connect_DB, $sql);
    header("Location: categories.php");
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
    <title>Add Category</title>
</head>
<body>
<div class="head">
    <a href="categories.php"><h1>Add Category</h1></a>
    <a href="/admin.php" class="adminExit">Admin Panel</a>
    <a class="viewSite inline-block" href="/" target="_blank">Просмотр сайта</a>
</div>

<form method="post" id="formCategory">
    <div class="addCategoryPanel">
        <span>Name*: </span>
        <div class="editName">
            <label>
                <input name="name" class="inputName">
            </label>
        </div>

        <span>Title: </span>
        <div class="editTitle">
            <label>
                <input name="title" class="inputTitle">
            </label>
        </div>

        <span>Description: </span>
        <div class="editDescription">
            <label>
                <textarea name="description" class="inputDescription"></textarea>
            </label>
        </div>

        <span>Keywords: </span>
        <div class="editKeywords">
            <label>
                <textarea name="keywords" class="inputKeywords"></textarea>
            </label>
        </div>

        <span>Avatar: </span>
        <div class="editAvatar">
            <label>
                <input id="ava" name="avatar" class="inputAvatar">
            </label>
            <div>
                <img onclick="changeImg(this)" class="editAv">
            </div>
        </div>

        <div class="addCategoryBt">
            <label>
                <input type="submit" name="btAddCat" class="btAddCat" value="Add Category">
            </label>
        </div>

    </div>
</form>

<script>
    function changeImg(source) {
        var link = document.forms["formCategory"].elements["ava"].value;
        source.src = link;
    }
</script>

</body>
</html>