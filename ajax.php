<?php
// Include DB Configuration file
$id = $_POST['idUser'];
$idStudio = $_POST['idStudio'];

require_once 'engine/db_config.php';
// Connectin to DB and check
$connect_DB = mysqli_connect($hostDB, $userDB, $passwordDB, $nameDB) or die("Ошибка" . mysqli_error($connect_DB));

$sql = "SELECT studios FROM users WHERE id = '$id'";
$query = mysqli_query($connect_DB, $sql);

$studios_array = mysqli_fetch_array($query);
$is_studio_array = explode(', ', $studios_array[0]);
if (!in_array($idStudio, $is_studio_array)) {
    $is_studio_array[] = $idStudio;
    $new_studios = implode(', ', $is_studio_array);
    $sql = "UPDATE `users` SET `studios` = '$new_studios' WHERE `users`.`id` = $id";
    $query = mysqli_query($connect_DB, $sql);
    echo 'Подписка оформленна';
} else {
    $k_studio = array_search($idStudio, $is_studio_array);
    unset($is_studio_array[$k_studio]);
    $new_studios = implode(', ', $is_studio_array);
    $sql = "UPDATE `users` SET `studios` = '$new_studios' WHERE `users`.`id` = $id";
    $query = mysqli_query($connect_DB, $sql);
    echo 'Подписаться';
}
?>