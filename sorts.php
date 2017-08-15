<div class="content">
<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 15.08.2017
 * Time: 21:29
 */
require_once "templete/sort_html.html";
switch ($_GET['sort']){
    case 'durDesc':
        $sql = "SELECT * FROM `posts` ORDER BY `posts`.`date` ASC ";
        $query = mysqli_query($connect_DB, $sql);

        echo '<div class="chipPanel">
    <div class="chip">
        Short
        <i class="close material-icons">close</i>
    </div>
</div>';

        for ($i = $row_num; $i > $row_num - 20; $i--) {
            $info_array = mysqli_fetch_assoc($query);
            require "templete/short-story.php";
        }
        break;

    case 'titleAsc':
        $sql = "SELECT * FROM `posts` ORDER BY `posts`.`title` ASC ";
        $query = mysqli_query($connect_DB, $sql);

        for ($i = $row_num; $i > $row_num - 20; $i--) {
            $info_array = mysqli_fetch_assoc($query);
            require "templete/short-story.php";
        }
        break;

    case 'titleDesc':
        $sql = "SELECT * FROM `posts` ORDER BY `posts`.`title` DESC ";
        $query = mysqli_query($connect_DB, $sql);

        for ($i = $row_num; $i > $row_num - 20; $i--) {
            $info_array = mysqli_fetch_assoc($query);
            require "templete/short-story.php";
        }

        break;

    case 'hd':
        echo 1;
}

?>
</div>
