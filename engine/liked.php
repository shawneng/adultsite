<div class="content">
    <?php
    if ($count_a != 0) {
        $count_a--;
        for ($i = $count_a; $i >= 0; $i--) {
            $id_liked = $like_array[$i];
            $info_array = $posts[$id_liked];
            require "templete/short-story.php";
        }
    } else {
        echo '<h2>Вы не лайкнули не одного видоса</h2>';
    }
    page($max_posts_liked, $count_posts_wall);
    ?>
</div>
