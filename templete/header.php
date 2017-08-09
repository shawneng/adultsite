<header>
    <div id="head" class="center">
        <div id="logo" class="inline-block">
            <a href="/">Name Site</a>
        </div>
        <div id="navigation">
            <a href="/" class="nava">Главная</a>
            <span class="nava pointer inline-block" id="cat" onmousemove="openCat()"
                  onmouseout="closeCat()">Категории</span>
            <a href="#" class="nava">Porno Stars</a>
        </div>
        <nav>
            <ul class="cats" id="cats" onmousemove="openCat()" onmouseout="closeCat()" hidden="0">
                <?php
                for ($i = 1; $i <= $num_cat[0]; $i++) {
                    $sql = "SELECT * FROM categories WHERE id = '$i'";
                    $query = mysqli_query($connect_DB, $sql);
                    $info_cat = mysqli_fetch_assoc($query);
                    if (!empty($info_cat)) {
                        echo '
                            <li class="cat inline-block">
                                <a href="#">
                                    <div class="catimg"><img src="'.$info_cat['avatar'].'" alt="" class="avacat"></div>
                                    <div class="cattitle">'.$info_cat['name'].'</div>
                                </a>
                            </li>
                        ';
                    }
                }
                ?>
            </ul>
        </nav>
        <div id="search" class="right">
            <form action="../search.php" id="formsearch">
                <div id="poisk">Быстрый поиск</div>
                <label>
                    <input class="search radius" id="opensearch" name="search">
                </label>
                <div class="closesearch" onclick="closesearch()"><img src="../templete/images/close.png" alt=""></div>
            </form>
            <div class="subsearch pointer" onclick="opensearch()"><img src="../templete/images/search.png" alt=""></div>
        </div>
        <div id="head_block_right" class="right ">
            <?php require_once "profile.php"; ?>
            <?php require_once "authorization.php"; ?>
        </div>
    </div>
</header>