<?php
$id_cat = $_GET['categorie'];
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
for ($i = 0; $i < $maxId; $i++) {
    $id_post = $maxId - $i;
    $sql = "SELECT categories FROM `posts` WHERE id = '$id_post'";
    $query = mysqli_query($connect_DB, $sql);
    $cats_in_video = mysqli_fetch_array($query);
    $cats_in_video_array = explode(", ", $cats_in_video[0]);
    if (in_array($id_cat, $cats_in_video_array)) {
        $sql = "SELECT * FROM `posts` WHERE id = '$id_post'";
        $query = mysqli_query($connect_DB, $sql);
        $info_array = mysqli_fetch_assoc($query);
        echo '
        <div class="shortstory inline-block">
            <div class="spre">
                <a href="/?id=' . $id_post . '">
                <img src="' . $info_array['pre'] . '" alt="">
                </a>
            </div>
            <div class="stitle">
                <a href="">
                ' . $info_array['title'] . '
                </a>
            </div>
                <div class="sinfo">
                    <div class="sviews inline-block"><img src="../templete/images/views.png" alt="" class="infopng"><div class="itext inline-block">' . $info_array['views'] . '</div></div>
                    <div class="stime inline-block"><img src="../templete/images/time.png" alt="" class="infopng"><div class="itext inline-block">' . $info_array['time'] . '</div></div>
                    <div class="slikes inline-block right">';
        if ($_COOKIE['logining'] == 2) {
            if (in_array($id_post_k, $like_array)) {
                echo '<a href="/engine/like.php?id=' . $id_post . '&iduser=' . $id . '&like=1"><img src="../templete/images/like.png" alt="" class="infopngr"></a>';
            } else {
                echo '<a href="/engine/like.php?id=' . $id_post . '&iduser=' . $id . '&like=2"><img src="../templete/images/un_like.png" alt="" class="infopngr"></a>';
            }
        } else {
            echo '<a href="/"><img src="../templete/images/un_like.png" alt="" class="infopngr"></a>';
        }

        echo $info_array['likes'] . '</div>
                </div>
            </div>
    ';
        echo '</div>';
    }
}
?>