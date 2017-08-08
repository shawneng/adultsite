<?php
$sql = "SELECT `history` FROM `users` WHERE id = '$id'";
$query = mysqli_query($connect_DB, $sql);
$history_video_a = mysqli_fetch_array($query);
$history_video_id = explode(', ', $history_video_a[0]);
$num_videos = count($history_video_id);
print_r($history_video_id);
echo $num_videos;
/*$maxId = $maxId_array[0];
echo '<div class="content">';
for ($i = 0; $i < $row_num; $i++) {
    $id_post = $maxId - $i;
    $id_post_k = $id_post . ",";
    $sql = "SELECT * FROM `posts` WHERE `id` = '$id_post'";
    $query = mysqli_query($connect_DB, $sql);
    $info_array = mysqli_fetch_assoc($query);
    echo '
        <div class="shortstory inline-block">
            <div class="spre">
                <a href="/?id='. $id_post .'">
                <img src="'.$info_array['pre'].'" alt="">
                </a>
            </div>
            <div class="stitle">
                <a href="">
                '.$info_array['title'].'
                </a>
            </div>
                <div class="sinfo">
                    <div class="sviews inline-block"><img src="../templete/images/views.png" alt="" class="infopng"><div class="itext inline-block">'.$info_array['views'].'</div></div>
                    <div class="stime inline-block"><img src="../templete/images/time.png" alt="" class="infopng"><div class="itext inline-block">'.$info_array['time'].'</div></div>
                    <div class="slikes inline-block right">';
    if ($_COOKIE['logining'] == 2) {
        if (in_array($id_post_k, $like_array)){
            echo '<a href="/engine/like.php?id='. $id_post  .'&iduser='. $id .'&like=1"><img src="../templete/images/like.png" alt="" class="infopngr"></a>';
        }
        else{
            echo '<a href="/engine/like.php?id='. $id_post  .'&iduser='. $id .'&like=2"><img src="../templete/images/un_like.png" alt="" class="infopngr"></a>';
        }
    }
    else {
        echo '<a href="/"><img src="../templete/images/un_like.png" alt="" class="infopngr"></a>';
    }

    echo $info_array['likes'].'</div>
                </div>
            </div>
    ';
}
echo '</div>';*/
?>