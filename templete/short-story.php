<?php
// Получение видео которые лайкнув пользователь
$sql = "SELECT likes_video FROM users WHERE id = '$id'";
$query = mysqli_query($connect_DB, $sql);
$likes_array = mysqli_fetch_array($query);
$likes = $likes_array[0];
$like_array = explode(' ', $likes);
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
echo '<div class="content">';
for ($i = 0; $i < 18 ; $i++) {
    $id_post = $maxId - $i;
    $id_post_k = $id_post . ",";
    $sql = "SELECT * FROM `posts` WHERE `id` = '$id_post'";
    $query = mysqli_query($connect_DB, $sql);
    $info_array = mysqli_fetch_assoc($query);
    echo '
    <div class="row z-depth-3">
        <a href="/?id='. $id_post .'">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img src="'.$info_array['pre'].'" alt="">
                </div>
            </div>
        </a>
        <div class="card-content center">
        <span class="card-title">'.$info_array['title'].'</span>
    </div>
                <div class="sinfo">
                    <div class="sviews inline-block"><i class="material-icons">visibility</i><div class="itext inline-block">'.$info_array['views'].'</div></div>
                    <div class="stime inline-block"><i class="material-icons">access_time</i><div class="itext inline-block">'.$info_array['time'].'</div></div>
                    <div class="inline-block right">';
    if ($_COOKIE['logining'] == 2) {
        if (in_array($id_post_k, $like_array)){
            echo '<a href="/engine/like.php?id='. $id_post  .'&iduser='. $id .'&like=1"><i class="material-icons">favorite</i></a>';
        }
        else{
            echo '<a href="/engine/like.php?id='. $id_post  .'&iduser='. $id .'&like=2"><i class="material-icons">favorite_border</i></a>';
        }
    }
    elseif ($_COOKIE['logining'] !== 2) {
        echo '<a href="/"><img src="../templete/images/un_like.png" alt="" class="infopngr"></a>';
    }

    echo '<div class="itext inline-block">'.$info_array['likes'].'</div></div>
                </div>
            </div>
    ';
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