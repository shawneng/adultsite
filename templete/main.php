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