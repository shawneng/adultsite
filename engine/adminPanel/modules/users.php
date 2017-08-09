<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 09.08.2017
 * Time: 16:43
 */

if (($_COOKIE['logining'] != 2) || ($_COOKIE['userStatus'] != 2)) {
    header('Location: /');
}

require_once '../modules/db_config.php';
$connect_DB = mysqli_connect($hostDB, $userDB, $passwordDB, $nameDB) or die("Ошибка" . mysqli_error($connect_DB));

$sql = "SELECT max(`id`) as `id` FROM `users`";
$query = mysqli_query($connect_DB, $sql);
$users_num = mysqli_fetch_array($query);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `users` WHERE `users`.`id` = '$id'";
    $query = mysqli_query($connect_DB, $sql);
    header("Location: users.php");
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
    <title>Users</title>
</head>
<body>

<div class="head">
    <a href="/admin.php"><h1>Users</h1></a>
    <a href="/admin.php" class="adminExit">Admin Panel</a>
    <a class="viewSite inline-block" href="/" target="_blank">Просмотр сайта</a>
</div>

<div class="table">
    <span>Users</span>
    <a href="/registration.php" class="addUser"><b>Add User</b></a>
    <?php
    for ($i = $users_num[0]; $i >= 1; $i--) {
        $sql = "SELECT * FROM `users` WHERE `id` = '$i'";
        $query = mysqli_query($connect_DB, $sql);
        $infoArray = mysqli_fetch_assoc($query);

        if ($infoArray['id'] != '') {
            echo '<a href="editUsers.php?id=' . $infoArray['id'] . '" class = "showUsers">
            <span><b>| ID: ' . $infoArray['id'] . ' | </b></span>
            <span> | Login: ' . $infoArray['login'] . ' | </span>
            <span> | Email: ' . $infoArray['email'] . ' | </span>
            <span> | Status: ' . $infoArray['status_user'] . ' | </span>
            </a>
            <div class="btDelete"><a href="?id=' . $infoArray['id'] . ' "><b>Delete</a></b></div>
            ';
        }
    }
    ?>
</div>

</body>
</html>
