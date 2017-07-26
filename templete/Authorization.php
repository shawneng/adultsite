<form action="../engine/formlogin.php" method="post">
    <span>Введите логин:</span>
    <label>
        <input name="login">
    </label>
    <span>Введите пароль:</span>
    <label>
        <input type="password" name="password">
    </label>
    <label>
        <input type="submit">
    </label>
</form>
<?php
    if($_SESSION['checka'] == 2) {
        echo "вы войшли";
    }
    else {
        echo "Неверный логин или пароль";
    }
?>