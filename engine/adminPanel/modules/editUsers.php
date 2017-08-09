<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 31.07.2017
 * Time: 12:48
 */

if (($_COOKIE['logining'] != 2) || ($_COOKIE['userStatus'] != 2)) {
    header('Location: /');
}
require_once '../modules/db_config.php';
$connect_DB = mysqli_connect($hostDB, $userDB, $passwordDB, $nameDB) or die("Ошибка" . mysqli_error($connect_DB));

$id = $_GET['id'];
$sql = "SELECT * FROM `users` WHERE `id` = '$id'";
$query = mysqli_query($connect_DB, $sql);
$infoArray = mysqli_fetch_assoc($query);

$login = $_POST['login'];
$email = $_POST['email'];
$status = $_POST['status'];
$avatar = $_POST['avatar'];

if(isset($_POST['btSaveUser'])){
    $sql = "UPDATE `users` SET `login` = '$login', `email` = '$email', `status_user` = '$status', `avatar` = '$avatar' WHERE `id` = '$id'";
    $query = mysqli_query($connect_DB, $sql);
    header("Location: users.php");
}

if(isset($_POST['btDeleteUser'])){
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
    <title>Edit Users</title>
</head>
<body>

<div class="head">
    <a href="users.php"><h1>Edit user</h1></a>
    <a href="/admin.php" class="adminExit">Admin Panel</a>
    <a class="viewSite inline-block" href="/" target="_blank">Просмотр сайта</a>
</div>

<form method="post">
    <div class="editUserPanel">
        <span>Login: </span>
        <div class="editLogin">
            <label>
                <input name="login" class="inputLogin" value="<?php echo $infoArray['login']; ?>">
            </label>
        </div>

        <span>E-mail: </span>
        <div class="editEmail">
            <label>
                <input name="email" class="inputEmail" value="<?php echo $infoArray['email']; ?>">
            </label>
        </div>

        <span>User Status: </span>
        <div class="editStatus">
            <label>
                <input name="status" class="inputStatus" value="<?php echo $infoArray['status_user']; ?>">
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

        <divc class="showId">
        <span><b>| ID: <?php
                echo $id;
                ?> |</b></span>
        </divc>

        <div class = "showHistory">
        <span><b>| History: <?php
                echo $infoArray['history'];
                ?> | </b></span>
        </div>

        <div class="saveUserBt">
            <label>
                <input type="submit" name="btSaveUser" class="btSaveUser" value="Save User">
            </label>
        </div>

        <div class="deleteUserBt">
            <label>
                <input type="submit" name="btDeleteUser" class="btDeleteUser" value="Delete User">
            </label>
        </div>

    </div>
</form>

</body>
</html>
