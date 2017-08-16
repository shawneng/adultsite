<?php
// Вывод видео
echo '<div class="content">';
require_once "sort_html.html";
for ($i = $max_count_posts; $i > $end_post; $i--) {
    $info_array = $posts[$i];
    require "short-story.php";
}
page($row_num, $count_posts_wall);

?>