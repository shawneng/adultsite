<?php

/*$sql = "SELECT max(`id`) as `id` FROM `posts`";
$query = mysqli_query($connect_DB, $sql);
$news_num = mysqli_fetch_array($query);*/

$sql = "SELECT * FROM `posts`";
$query = mysqli_query($connect_DB, $sql);

$request = $_GET['search'];
$request = mb_strtolower($request);
echo '<div class="showRequest">'. $request. '</div>';

$arraySearch = explode(" ", $request);

$n = 0;

while($row = mysqli_fetch_array($query)){
    $search = $row['title'];
    $search = mb_strtolower($search);
    $arrayNews = explode(" ", $search);

    if(array_intersect($arraySearch, $arrayNews)){
        echo '
    <div class="row1 z-depth-3">
        <a href="/?id='. $row['id'] .'">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img src="'.$row['pre'].'" alt="">
                </div>
            </div>
        </a>
        <div class="card-content center">
        <span class="card-title">'.$row['title'].'</span>
    </div>
                <div class="sinfo">
                    <div class="sviews inline-block"><i class="tiny material-icons">visibility</i><div class="itext inline-block">'.$row['views'].'</div></div>
                    <div class="stime inline-block"><i class="tiny material-icons">access_time</i><div class="itext inline-block">'.$row['time'].'</div></div>
                    <div class="inline-block right">';
        if ($_COOKIE['logining'] == 2) {
            if (in_array($row['id'], $like_array)){
                echo '<a href="/engine/like.php?id='. $row['id']  .'&iduser='. $id .'&like=1"><i class="tiny material-icons">favorite</i></a>';
            }
            else{
                echo '<a href="/engine/like.php?id='. $row['id']  .'&iduser='. $id .'&like=2"><i class="tiny material-icons">favorite_border</i></a>';
            }
        }
        else {
            echo '<a href="/"><img src="../templete/images/un_like.png" alt="" class="infopngr"></a>';
        }

        echo '<div class="itext inline-block">'.$row['likes'].'</div></div>
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
