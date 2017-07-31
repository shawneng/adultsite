<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 31.07.2017
 * Time: 2:30
 */

if (($_COOKIE['logining'] != 2) || ($_COOKIE['userStatus'] != 2)) {
    header('Location: /');
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
    <title>AddNews</title>
</head>
<body>
<div class="head">
    <h1>Add News</h1>
</div>

<div class="addPanel">
    <div class="editTitle">
        <span>Title: </span>
        <div>
            <label>
                <input name="title" class="inputTitle">
            </label>
        </div>
    </div>

    <div class="editLink">
        <span>Link video: </span>
        <div>
            <label>
                <input name="videoLink" class="inputVideoLink">
            </label>
        </div>
    </div>

    <div class="editDescription">
        <span>Description: </span>
        <div>
            <label>
                <input name="description" class="inputDescription">
            </label>
        </div>
    </div>

    <div class="editKeywords">
        <span>Keywords: </span>
        <div>
            <label>
                <input name="keywords" class="inputKeywords">
            </label>
        </div>
    </div>

    <div class="editTime">
        <span>Time: </span>
        <div>
            <label>
                <input name="time" class="inputTime">
            </label>
        </div>
    </div>

    <div class="editScreenLink">
        <span>Screen link</span>
        <div>
            <label>
                <input name="screenLink" class="inputScreenLink">
            </label>
        </div>
    </div>

</div>

</body>
</html>
