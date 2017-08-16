<?php
if ($all_video > $count_posts_wall){
    $pages = $all_video / $count_posts_wall;
    $pages = (int)$pages;
    $pages++;
    if ($pre_url = " ") {
        echo '<ul class="pagination">';
        for ($i = 1; $i <= $pages; $i++) {
            if ($i == 1) {
                echo '<li class="waves-effect"><a href="/">' . $i . '</a></li>';
            } else {
                if ($i == $active_page) {
                    echo '<li class="active"><a href="?page=' . $i . '">' . $i . '</a></li>';
                } else {
                    echo '
        <li class="waves-effect"><a href="?page=' . $i . '">' . $i . '</a></li>
        ';
                }
            }
        }
    }
    else {
        echo '<ul class="pagination">';
        echo $pre_url;
        for ($i = 1; $i <= $pages; $i++) {
            if ($i == 1) {
                echo '<li class="waves-effect"><a href="/">' . $i . '</a></li>';
            } else {
                if ($i == $active_page) {
                    echo '<li class="active"><a href="?=' . $i . '">' . $i . '</a></li>';
                } else {
                    echo '
        <li class="waves-effect"><a href="?=' . $i . '">' . $i . '</a></li>
        ';
                }
            }
        }
    }
}
$active_page = (int)$_GET['page'];
echo '<ul class="pagination">';
if ($active_page == 1) {
    echo '
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>';
    }
else {
    $pre_page = $active_page-1;
    if ( $pre_page != 1) {
        echo '<li class="waves-effect"><a href="?page=' . $pre_page . '"><i class="material-icons">chevron_left</i></a></li>';
    }
    else {
        echo '<li class="waves-effect"><a href="/"><i class="material-icons">chevron_left</i></a></li>';
    }
    }
for ($i = 1; $i <= $pages; $i++){
    if ( $i == 1 ) {
        echo '<li class="waves-effect"><a href="/">'.$i.'</a></li>';
    }else {
        if ($i == $active_page) {
            echo '<li class="active"><a href="?page=' . $i . '">' . $i . '</a></li>';
        } else {
            echo '
        <li class="waves-effect"><a href="?page=' . $i . '">' . $i . '</a></li>
        ';
        }
    }
}
if ($active_page == 2) {
    echo '
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_right</i></a></li>';
}
else {
    $pre_page = $active_page+1;
    echo '<li class="waves-effect"><a href="?page='.$pre_page.'"><i class="material-icons">chevron_right</i></a></li>';
}
echo '</ul>';
?>