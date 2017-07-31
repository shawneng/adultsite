<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 31.07.2017
 * Time: 2:30
 */

if (($_COOKIE['logining'] != 2) || ($_COOKIE['userStatus'] !=2 ) ) {
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
    <title>AddNews</title>
</head>
<body>
<?php
echo $_COOKIE['logining'], $_COOKIE['userStatus'];
?>

</body>
</html>
