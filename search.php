<?php
echo '<div class="showRequest">'. $_GET['search']. '</div>';

/*$sql = "SELECT max(`id`) as `id` FROM `posts`";
$query = mysqli_query($connect_DB, $sql);
$news_num = mysqli_fetch_array($query);*/

$sql = "SELECT * FROM `posts`";
$query = mysqli_query($connect_DB, $sql);

$arraySearch = explode(" ", $_GET['search']);

$n = 0;

while($row = mysqli_fetch_array($query)){
    $search = $row['title'];
    $arrayNews = explode(" ", $search);

    if(array_intersect($arraySearch, $arrayNews)){
        echo '
        <div class="shortstory inline-block">
            <div class="spre">
                <a href="/?id=' . $row['id'] . '">
                <img src="' . $row['pre'] . '" alt="">
                </a>
            </div>
            <div class="stitle">
                <a href="">
                ' . $row['title'] . '
                </a>
            </div>
                <div class="sinfo">
                    <div class="sviews inline-block"><img src="../templete/images/views.png" alt="" class="infopng"><div class="itext inline-block">' . $row['views'] . '</div></div>
                    <div class="stime inline-block"><img src="../templete/images/time.png" alt="" class="infopng"><div class="itext inline-block">' . $row['time'] . '</div></div>
                    <div class="slikes inline-block right">';
        if ($_COOKIE['logining'] == 2) {
            if (in_array($row['id'], $like_array)) {
                echo '<a href="/engine/like.php?id=' . $row['id'] . '&iduser=' . $id . '&like=1"><img src="../templete/images/like.png" alt="" class="infopngr"></a>';
            } else {
                echo '<a href="/engine/like.php?id=' . $row['id']. '&iduser=' . $id . '&like=2"><img src="../templete/images/un_like.png" alt="" class="infopngr"></a>';
            }
        } else {
            echo '<a href="/"><img src="../templete/images/un_like.png" alt="" class="infopngr"></a>';
        }

        echo $row['likes'] . '</div>
                </div>
            </div>
    ';
        $n++;
    }
}

if($n==0){
    echo 'false';
}

?>
