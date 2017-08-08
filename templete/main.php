<?php
require_once "head.php";
require_once "header.php";
if (!$_GET){
    require_once "short-story.php";
}
if (isset($_GET['history'])){
    require_once "engine/history.php";
}
require_once "bottom.php";
?>