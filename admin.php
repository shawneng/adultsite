<?php
/**
 * Created by Predator304.
 * User: anton
 * Date: 30.07.2017
 * Time: 19:10
 */
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
        //Змінна користувачів
        ?>
    </div>
    <div class="cache inline-block">
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
