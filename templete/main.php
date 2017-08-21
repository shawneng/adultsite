<div class="progress none">
    <div class="indeterminate"></div>
</div>

<div class="content" id="content">
    <?php
    // Вывод видео
    require_once "sort_html.html";
    echo '<div class="showVideo">';
    for ($i = $max_count_posts; $i > $end_post; $i--) {
        $info_array = $posts[$i];
        require "short-story.php";
    }
    page($row_num, $count_posts_wall);
    echo '</div>';
    ?>
</div>
