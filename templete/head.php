<?php
require_once 'db_config.php';
$connect_DB = mysqli_connect($hostDB, $userDB, $passwordDB, $nameDB) or die("Ошибка" . mysqli_error($connect_DB));

$sql = "SELECT * FROM `settings` WHERE `id` = 1";
$query = mysqli_query($connect_DB, $sql);
$infoArray = mysqli_fetch_assoc($query);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php echo $infoArray['name_site']; ?></title>
    <style>
    <?php
//    require_once "style.php";
    if($_GET['id'] > 0) require_once "css/full-story-style.php";
    else require_once "css/main-style.php";
    ?>
    </style>
</head>
<body>

