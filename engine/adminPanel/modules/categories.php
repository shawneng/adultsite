<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 08.08.2017
 * Time: 20:02
 */

if (($_COOKIE['logining'] != 2) || ($_COOKIE['userStatus'] != 2)) {
    header('Location: /');
}

require_once '../modules/db_config.php';
$connect_DB = mysqli_connect($hostDB, $userDB, $passwordDB, $nameDB) or die("Ошибка" . mysqli_error($connect_DB));

$sql = "SELECT max(`id`) as `id` FROM `categories`";
$query = mysqli_query($connect_DB, $sql);
$cat_num = mysqli_fetch_array($query);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
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
    <title>Edit Categories</title>
</head>
<body>
<div class="head">
    <a href="../engine.php"><h1>Edit Categories</h1></a>
    <a href="../engine.php" class="adminExit">Admin Panel</a>
    <a class="viewSite inline-block" href="/" target="_blank">Просмотр сайта</a>
</div>

<div class="table">
    <span>Categories</span>
    <div class="addCategory inline-block">
        <a href="">Add Category</a>
    </div>
    <?php
    for ($i = $cat_num[0]; $i >= 1; $i--) {
        $sql = "SELECT * FROM `categories` WHERE `id` = '$i'";
        $query = mysqli_query($connect_DB, $sql);
        $infoArray = mysqli_fetch_assoc($query);

        if ($infoArray['id'] != '') {
            echo '<a href="editCategories.php?id=' . $infoArray['id'] . '" class = "showCategories">
            <span><b>| ID: ' . $infoArray['id'] . ' |</b></span>
            <span>| Name: ' . $infoArray['name'] . ' |</span>
            <span>| Videos: ' . $infoArray['videos'] . ' |</span>
            </a>
            <div class="btDelete"><a href="?id=' . $infoArray['id'] . ' ">Delete</a></div>
    ';
        }

    }
    ?>
</div>

</body>
</html>