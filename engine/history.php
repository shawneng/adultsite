<?php
if ($num_videos != 0) {
    $videos_history = array_reverse($history_video_id);
    echo '<div class="content">';
    for ($i = 0; $i < $num_videos; $i++) {
        $id_history = (int)$videos_history[$i];
        $info_array = $posts[$id_history];
        require "templete/short-story.php";
    }
}
else {
    echo '<h2>Вы не посмотрели ни одного видоса</h2>';
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