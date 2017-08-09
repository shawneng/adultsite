<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 31.07.2017
 * Time: 12:49
 */

if (($_COOKIE['logining'] != 2) || ($_COOKIE['userStatus'] != 2)) {
    header('Location: /');
}
require_once '../modules/db_config.php';
$connect_DB = mysqli_connect($hostDB, $userDB, $passwordDB, $nameDB) or die("Ошибка" . mysqli_error($connect_DB));

$sql = "SELECT * FROM `settings` WHERE `id` = 1";
$query = mysqli_query($connect_DB, $sql);
$infoArray = mysqli_fetch_assoc($query);

$nameSite = $_POST['nameSite'];
$description = $_POST['descriptionSite'];
$keywords = $_POST['keywordsSite'];

if(isset($_POST['buttonSaveSettings'])){
    $sql = "UPDATE `settings` SET `name_site` = '$nameSite', `descr_site` = '$description', `keywords` = '$keywords' WHERE `settings`.`id` = 1";
    $query = mysqli_query($connect_DB, $sql);
    header("Location: /admin.php");
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
    <title>Settings</title>
</head>
<body>
<div class="head">
    <a href="/admin.php"><h1>Settings</h1></a>
    <a href="/admin.php" class="adminExit">Admin Panel</a>
    <a class="viewSite inline-block" href="/" target="_blank">Просмотр сайта</a>
</div>

<form method="post">
    <div class="settingsPanel">
        <span>Name Site: </span>
        <div class="editNameSite">
            <label>
                <input name="nameSite" class="inputNameSite" value="<?php echo $infoArray['name_site'];?>">
            </label>
        </div>

        <span>Description Site:</span>
        <div class="editDescriptionSite">
            <label>
                <textarea name="descriptionSite" class="inputDescriptionSite"><?php echo $infoArray['descr_site'];?></textarea>
            </label>
        </div>

        <span>Keywords: </span>
        <div class="editKeywordsSite">
            <label>
                <textarea name="keywordsSite" class="inputKeywordsSite"><?php echo $infoArray['keywords'];?></textarea>
            </label>
        </div>

        <div class="saveSettings">
            <label>
                <input type="submit" name="buttonSaveSettings" value="Save Settings" class="btSaveSettings">
            </label>
        </div>

    </div>
</form>

</body>
</html>
