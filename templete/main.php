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

<?php
// Вывод видео
echo '<div class="content">';

for ($i = $row_num; $i > $row_num - 20; $i--) {
    $info_array = $posts[$i];
    require "short-story.php";
}
echo '<ul class="pagination">';
$active_page = (int)$_GET['page'];
for ($i = 1; $i <= $pages; $i++) {
    if ($i == 1) {
        echo '<li class="active"><a href="?page=' . $i . '">' . $i . '</a></li>';
    } else {
        echo '
        <li class="waves-effect"><a href="?page=' . $i . '">' . $i . '</a></li>
        ';
    }
}
echo '<li class="waves-effect"><a href="?page=2"><i class="material-icons">chevron_right</i></a></li></ul>';
?>