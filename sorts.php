<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 15.08.2017
 * Time: 21:29
 */

sleep(3);

$sort = $_POST['sort'];

require_once 'engine/db_config.php';
// Connectin to DB and check
$connect_DB = mysqli_connect($hostDB, $userDB, $passwordDB, $nameDB) or die("Ошибка" . mysqli_error($connect_DB));

function page($all_video, $count_posts_wall){
    if ($all_video > $count_posts_wall){
        $pages = $all_video / $count_posts_wall;
        $pages = (int)$pages;
        $pages++;
        if ($pre_url = " ") {
            echo '<ul class="pagination">';
            for ($i = 1; $i <= $pages; $i++) {
                if ($i == 1) {
                    echo '<li class="waves-effect"><a href="/">' . $i . '</a></li>';
                } else {
                    if ($i == $active_page) {
                        echo '<li class="active"><a href="?page=' . $i . '">' . $i . '</a></li>';
                    } else {
                        echo '
        <li class="waves-effect"><a href="?page=' . $i . '">' . $i . '</a></li>
        ';
                    }
                }
            }
        }
        else {
            echo '<ul class="pagination">';
            echo $pre_url;
            for ($i = 1; $i <= $pages; $i++) {
                if ($i == 1) {
                    echo '<li class="waves-effect"><a href="/">' . $i . '</a></li>';
                } else {
                    if ($i == $active_page) {
                        echo '<li class="active"><a href="?=' . $i . '">' . $i . '</a></li>';
                    } else {
                        echo '
        <li class="waves-effect"><a href="?=' . $i . '">' . $i . '</a></li>
        ';
                    }
                }
            }
        }
    }
}

if($sort == "long"){

    echo 1;
}


if ($sort == "hd") {

    $sql = "SELECT * FROM `posts` WHERE `posts`.`hd`=1";
    $query = mysqli_query($connect_DB, $sql);
    $row_num = mysqli_num_rows($query);
    $max_count_posts = $row_num;
    $count_posts_wall = 10;
    $end_post = $max_count_posts - $count_posts_wall;

    while ($info_array = mysqli_fetch_assoc($query)) {
        //if($info_array['hd'] == 1) {
        require "templete/short-story.php";
        //}
    }

    page($row_num, $count_posts_wall);

    /*
        echo $max_count_posts;
        $end_post = $max_count_posts - 10;

        for ($i = $max_count_posts; $i > $end_post; $i--) {
            $info_array = $posts[$i];
            require "templete/short-story.php";
        }
    page($row_num, $count_posts_wall);
    */
}
else{
    $sql = "SELECT * FROM `posts`";
    $query = mysqli_query($connect_DB, $sql);
    $row_num = mysqli_num_rows($query);

    $max_count_posts = $row_num;
    $count_posts_wall = 10;
    $end_post = $max_count_posts - $count_posts_wall;

    for ($i = $max_count_posts; $i > $end_post; $i--) {
        $info_array = mysqli_fetch_assoc($query);
        require "templete/short-story.php";
    }
    page($row_num, $count_posts_wall);
/*
    while ($info_array = mysqli_fetch_assoc($query)) {
        //if($info_array['hd'] == 1) {
        require "templete/short-story.php";
        //}
    }
*/
}

?>
