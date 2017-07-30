<?php
session_start();
require_once 'engine/db_config.php';
$connect_DB = mysqli_connect($hostDB, $userDB, $passwordDB, $nameDB) or die("Ошибка" . mysqli_error($connect_DB));
$sql = "SELECT `login` FROM `users`";
$query = mysqli_query($connect_DB, $sql);
$row_num = mysqli_num_rows($query);
for ($i = 0; $i < $row_num; $i++) {
    $logins[] = mysqli_fetch_assoc($query);
    $logins_array[] = implode('', $logins[$i]);
}
?>
<?php require_once "templete/head.php"; ?>
<?php require_once "templete/header.php"; ?>
<?php require_once "templete/css/registration_style.php"; ?>
<?php
if ($_SESSION['registration'] == 0) {
    echo 'Такой логин уже есть';
}
if ($_SESSION['registration'] == 1) {
    echo 'Вы ввели разные пароли';
}
if ($_SESSION['registration'] == 2) {
    echo 'Вы успешно зарегестрировались';
}
    ?>
    <div class="regisctblock radius">
        <div class="namer textcenter">Регистрация</div>
    <form action="engine/formregistration.php" method="post" class="formreg">
        <div class="textlogin rtext">Введите логин:</div>
        <label>
            <input id="rlogin" class="rlogin rinput" name="rlogin">
        </label>
        <div class="textpass rtext">Введите пароль:</div>
        <label>
            <input type="password" class="rpassword rinput" name="rpassword">
        </label>
        <div class="textpass rtext">Повторите пароль:</div>
        <label>
            <input type="password" class="rpassword rinput" name="checkpass">
        </label>
        <div class="textemail rtext">Введите email:</div>
        <label>
            <input type="email" class="remail rinput" name="email">
        </label>
        <input type="submit" class="registration radius" value="Зарегестрироваться">
    </form>
    </div>


<?php require_once "templete/bottom.php"; ?>