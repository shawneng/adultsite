<?php // Start Session
session_start();
// Include DB Configuration file
require_once 'engine/db_config.php';
// Connectin to DB and check
$connect_DB = mysqli_connect($hostDB, $userDB, $passwordDB, $nameDB) or die("Ошибка" . mysqli_error($connect_DB));
?>
<?php require_once "templete/head.php"; ?>
<?php require_once "templete/header.php"; ?>
<?php echo $_GET['search']; ?>
<?php require_once "templete/bottom.php"; ?>

