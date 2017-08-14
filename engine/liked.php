<?php
if ($count_a != 0) {
    $like_array = array_reverse($like_array);
    for ($i = 1; $i <= $count_a; $i++) {
        $id_liked = $like_array[$i];
        $info_array = $posts[$id_liked];
        require "templete/short-story.php";
    }
}
else {
    echo '<h2>Вы не лайкнули не одного видоса</h2>';
}
echo '
<ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>';
for ($i = 1; $i <= $pages; $i++){
    echo '
        <li class="waves-effect"><a href="?page='.$i.'">'.$i.'</a></li>
        ';
}
echo '<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li></ul>';
?>