<div class="content">
    <div class="sortPanel z-depth-3">
    <span>Video: </span>

    <div class="sort inline-block">
        <ul id="dropdown2" class="dropdown-content">
            <li><a href="#!">1-10</a></li>
            <li><a href="?sort=dateAds">10-1</a></li>
        </ul>
        <a class="btn dropdown-button" href="#!" data-activates="dropdown2">By Date<i class="material-icons right">arrow_drop_down</i></a>

    </div>

    <div class="sort inline-block">
        <ul id="drop1" class="dropdown-content">
            <li><a href="?sort=titleAsc">A-Z</a></li>
            <li><a href="?sort=titleDesc">Z-A</a></li>
        </ul>
        <a class="btn dropdown-button" href="#!" data-activates="drop1">By title<i class="material-icons right">arrow_drop_down</i></a>

    </div>

</div>
</div>

<div class="content">
<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 15.08.2017
 * Time: 21:29
 */

switch ($_GET['sort']){
    case 'dateAds':
        $sql = "SELECT * FROM `posts` ORDER BY `posts`.`date` ASC ";
        $query = mysqli_query($connect_DB, $sql);

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
}
?>
</div>
