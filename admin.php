<?php
/**
 * Created by Predator304.
 * User: anton
 * Date: 30.07.2017
 * Time: 19:10
 */

require_once 'engine/db_config.php';
$connect_DB = mysqli_connect($hostDB, $userDB, $passwordDB, $nameDB) or die("Ошибка" . mysqli_error($connect_DB));

$sql = "SELECT `id` FROM `users`";
$query = mysqli_query($connect_DB, $sql);
$row_num = mysqli_num_rows($query);

session_start();
session_reset();
$checkStatus = $_SESSION['checka'];
$checkUser = $_SESSION['checkUser'];
if (($checkStatus !== 2) && ($checkUser !== 2)) {
    header("Location: ../");
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <link href="/engine/adminPanel/css/style.css" rel="stylesheet">
</head>
<body>

<div class="head">
    <h1>
        <?php echo $checkStatus, $checkUser;
        ?>
    </h1>
    <a href="" class="adminExit">Exit</a>
    <a class="viewSite inline-block" href="/" target="_blank">Просмотр сайта</a>
</div>

<div class="fastBlock">
    <div class="viewUsers inline-block">
        <span>Пользователей: </span>
        <?php
        echo $row_num;
        ?>
    </div>
    <div class="viewCache inline-block">
        <span>Кэш: </span>
        <?php
        //Змінна Кеша
        ?>
    </div>
    <div class="buttonsWright">
        <a href="engine/adminPanel/modules/editNews.php" class="editNews inline-block">Edit News</a>
        <a href="engine/adminPanel/modules/addNews.php" class="addNews inline-block">Add News</a>
    </div>
</div>

<div class="buttonsPanel">
    <div class="buttonPanelUp">
        <a href="" class="buttonUsers inline-block">Users</a>
        <a href="" class="buttonTemplate inline-block">Edit Template</a>
        <a href="" class="buttonSettingsScript inline-block">Settings script</a>
    </div>
    <div class="buttonPanelDown">
        <a class="buttonComments inline-block" href="">Comments</a>
        <a href="" class="buttonEditAds inline-block">Edit ADS</a>
        <a href="" class="buttonStatistic inline-block">Statistic</a>
    </div>
</div>

<div class="widgetPanel">

</div>

<div class="bottomPanel">
    Copyright 2017
</div>

</body>
</html>
