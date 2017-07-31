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
//$checkStatus = $_SESSION['checka'];
//$checkUser = $_SESSION['checkUser'];
if ($_COOKIE['logining'] == 2) {
    require_once "engine/adminPanel/engine.php";
}
else {
    header("Location: ../");
}

?>

