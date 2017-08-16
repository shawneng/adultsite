<div class="content">
    <?php
    $n = 0;

    $request = $_GET['search'];
    $request = mb_strtolower($request);

    $arraySearch = explode(" ", $request);

    $rus = array(
        "й", "ц", "у", "к", "е", "н", "г", "ш", "щ", "з", "х", "ъ",
        "ф", "ы", "в", "а", "п", "р", "о", "л", "д", "ж", "э",
        "я", "ч", "с", "м", "и", "т", "ь", "б", "ю"
    );
    $lat = array(
        "q", "w", "e", "r", "t", "y", "u", "i", "o", "p", "[", "]",
        "a", "s", "d", "f", "g", "h", "j", "k", "l", ";", "'",
        "z", "x", "c", "v", "b", "n", "m", ",", "."
    );
    for ($i = $row_num; $i > $row_num - 18; $i--) {
        $info_array = $posts[$i];
        $search = $info_array['title'];
        $search = mb_strtolower($search);
        $arrayNews = explode(" ", $search);

        if (array_intersect($arraySearch, $arrayNews)) {
            require "templete/short-story.php";
            $n++;
        }
    }
    if ($n == 0) {
        $request = str_replace($lat, $rus, $request);
        $request = mb_strtolower($request);
        $arraySearch = explode(" ", $request);

        for ($i = $row_num; $i > $row_num - 18; $i--) {
            $info_array = $posts[$i];
            $search = $info_array['title'];
            $search = mb_strtolower($search);
            $arrayNews = explode(" ", $search);

            if (array_intersect($arraySearch, $arrayNews)) {
                $n++;
                if ($n == 1){

                    echo '
                    
                    <div class="content">
                        <div class="searchText searchText z-depth-3">
                            <div class="sText">По запросу 
                            <b><i><ins>' . $_GET['search'] . ' </ins></i></b> ничего не найдено</div>
                            <div class="sText">Показаны видео по запросу
                            <b><i><ins>' . $request . ' </ins></i></b></div>
</div>
</div>                    
                    ';
            }
            require "templete/short-story.php";

        }
    }
    }
    if ($n == 0) {
        //треба вивести норм тож коли тупо нічого не знайдено
        echo '<div class="content"><div class="searchText z-depth-3"><div class="sText">По запросу <b><i><ins>' . $_GET['search'] . ' </ins></i></b> ничего не найдено</div></div></div>';
    }

    ?>
</div>
