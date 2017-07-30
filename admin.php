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
    <h1>Admin Panel</h1>
    <div class="viewSite"><a href="/">Просмотыр сайта</a></div>

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
        <div class="editNews inline-block">Edit News</div>
        <div class="addNews inline-block">Add News</div>
    </div>
</div>
</body>
</html>
