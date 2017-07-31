<?php
$sql = "SELECT `id` FROM `posts`";
$query = mysqli_query($connect_DB, $sql);
$row_num = mysqli_num_rows($query);
$sql = "SELECT max(`id`) as `id` FROM `posts`";
$query = mysqli_query($connect_DB, $sql);
$maxId_array = mysqli_fetch_array($query);
$maxId = $maxId_array[0];
echo '<div class="content">';
for ($i = 0; $i < $row_num; $i++) {
    $id_post = $maxId - $i;
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
                    <div class="slikes inline-block right"><a href="/engine/like.php?id='. $id_post  .'&iduser='. $id .'"><img src="../templete/images/un_like.png" alt="" class="infopngr"></a>'.$info_array['likes'].'</div>
                </div>
            </div>
';
}
echo '</div>';
?>