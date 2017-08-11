<?php
// Вывод видео
$sql = "SELECT `id` FROM `posts`";
$query = mysqli_query($connect_DB, $sql);
$row_num = mysqli_num_rows($query);
$sql = "SELECT max(`id`) as `id` FROM `posts`";
$query = mysqli_query($connect_DB, $sql);
$maxId_array = mysqli_fetch_array($query);
$maxId = $maxId_array[0];
$pages = $row_num / 10;
$pages = (int)$pages;
$pages++;
$c_videos = ($_GET['page']-1) * 10;
$videos = $row_num - $c_videos;
$maxId = $maxId - $c_videos;
echo '<div class="content">';
for ($i = 0; $i < $videos ; $i++) {
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
echo '</div>';
for ($i = 1; $i <= $pages; $i++){
    echo '
        <a href="?page='.$i.'">'.$i.'</a>
        ';
}
?>