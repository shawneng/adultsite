<?php
session_start();
require_once '../engine/db_config.php';
$connect_DB = mysqli_connect($hostDB, $userDB, $passwordDB, $nameDB) or die("Ошибка" . mysqli_error($connect_DB));
$rlogin = $_POST['rlogin'];
$rpassword = $_POST['rpassword'];
$checkpass = $_POST['checkpass'];
$email = $_POST['email'];
if (isset($rlogin) and isset($rpassword) and isset($checkpass) and isset($email)) {
    $sql = "SELECT `login` FROM `users`";
    $query = mysqli_query($connect_DB, $sql);
    $row_num = mysqli_num_rows($query);
    for ($i = 0; $i < $row_num; $i++) {
        $logins[] = mysqli_fetch_assoc($query);
        $logins_array[] = implode('', $logins[$i]);
    }
    if (in_array($rlogin, $logins_array)) {
        $_SESSION['registration'] = 0;
    }
    else {
        if ($rpassword == $checkpass) {
            $sql = "INSERT INTO `users` (`id`, `login`, `password`, `email`, `status_user`, `avatar`) VALUES (NULL, '$rlogin', '$rpassword', '$email', '1', '')";
            $query = mysqli_query($connect_DB, $sql);
            $_SESSION['registration'] = 2;
        }
         else {
             $_SESSION['registration'] = 1;
        }
    }
}
header('Location: ../registration.php');
?>