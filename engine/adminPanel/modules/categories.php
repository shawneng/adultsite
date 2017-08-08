<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 08.08.2017
 * Time: 20:02
 */

require_once '../modules/db_config.php';
$connect_DB = mysqli_connect($hostDB, $userDB, $passwordDB, $nameDB) or die("Ошибка" . mysqli_error($connect_DB));

$sql = "SELECT `id` FROM `categories`";
$query = mysqli_query($connect_DB, $sql);
$cat_num = mysqli_num_rows($query);

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
    <h1>Edit Categories</h1>
    <a href="" class="adminExit">Exit</a>
    <a class="viewSite inline-block" href="/" target="_blank">Просмотр сайта</a>
</div>

<div class="table">
    <span>Categories</span>
    <div class="addCategory inline-block">
        <a href="">Add Category</a>
    </div>
    <?php
    for ($i = 1; $i <= $cat_num; $i++) {
        $sql = "SELECT `*` FROM `categories` WHERE `id` = '$i'";
        $query = mysqli_query($connect_DB, $sql);
        $infoArray = mysqli_fetch_assoc($query);

        echo '<a href="#" class = "showCategories">
            <span>' . $infoArray['id'] . '</span>
            <span>' . $infoArray['name'] . '</span>
    </a>';
    }
    ?>
</div>

</body>
</html>