<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 08.08.2017
 * Time: 21:01
 */
if (($_COOKIE['logining'] != 2) || ($_COOKIE['userStatus'] != 2)) {
    header('Location: /');
}
require_once '../modules/db_config.php';
$connect_DB = mysqli_connect($hostDB, $userDB, $passwordDB, $nameDB) or die("Ошибка" . mysqli_error($connect_DB));

$id = $_GET['id'];

$sql = "SELECT * FROM `categories` WHERE `id` = '$id'";
$query = mysqli_query($connect_DB, $sql);
$infoArray = mysqli_fetch_assoc($query);

$name = $_POST['name'];
$title = $_POST['title'];
$description = $_POST['description'];
$keywords = $_POST['keywords'];
$avatar = $_POST['avatar'];

if(isset($_POST['btSaveCat'])){
    $sql = "UPDATE `categories` SET `name` = '$name', `title` = '$title', `description` = '$description', `keywords` = '$keywords', `avatar` = '$avatar' WHERE `id` = '$id'";
    $query = mysqli_query($connect_DB, $sql);
    header("Location: categories.php");
}

if(isset($_POST['btDeleteCat'])){
    $sql = "DELETE FROM `categories` WHERE `categories`.`id` = '$id'";
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
    <title>Edit Category</title>
</head>
<body>

<div class="head">
    <a href="categories.php"><h1>Edit Category</h1></a>
    <a href="/admin.php" class="adminExit">Admin Panel</a>
    <a class="viewSite inline-block" href="/" target="_blank">Просмотр сайта</a>
</div>

<form method="post">
    <div class="addCategoryPanel">
        <span>Name*: </span>
        <div class="editName">
            <label>
                <input name="name" class="inputName" value="<?php echo $infoArray['name']; ?>">
            </label>
        </div>

        <span>Title: </span>
        <div class="editTitle">
            <label>
                <input name="title" class="inputTitle" value="<?php echo $infoArray['title']; ?>">
            </label>
        </div>

        <span>Description: </span>
        <div class="editDescription">
            <label>
                <textarea name="description" class="inputDescription"><?php
                echo $infoArray['description'];
                    ?></textarea>
            </label>
        </div>

        <span>Keywords: </span>
        <div class="editKeywords">
            <label>
                <textarea name="keywords" class="inputKeywords"><?php
                echo $infoArray['keywords'];
                    ?></textarea>
            </label>
        </div>

        <span>Avatar: </span>
        <div class="editAvatar">
            <label>
                <input name="avatar" class="inputAvatar" value="<?php echo $infoArray['avatar']; ?>">
            </label>
            <div>
                <img src="<?php echo $infoArray['avatar']; ?>" class="editAv">
            </div>
        </div>

        <span><b>| ID: <?php
                echo $id;
                ?> |</b></span>
        <span><b>| Videos: <?php
                echo $infoArray['videos'];
                ?> | </b></span>

        <div class="saveCategoryBt">
            <label>
                <input type="submit" name="btSaveCat" class="btAddCat" value="Save Category">
            </label>
        </div>

        <div class="deleteCategoryBt">
            <label>
                <input type="submit" name="btDeleteCat" class="btDeleteCat" value="Delete Category">
            </label>
        </div>

    </div>
</form>

</body>
</html>
