<header>
    <div id="head" class="center">
        <div id="logo" class="inline-block">
            <a href="/">Name Site</a>
        </div>
        <div id="navigation">
            <a href="/" class="nava">Главная</a>
            <span class="nava pointer inline-block" id="cat" onmousemove="openCat()" onmouseout="closeCat()">Категории</span>
            <a href="#" class="nava">Porno Stars</a>
        </div>
        <nav>
        <ul class="cats" id="cats" onmousemove="openCat()" onmouseout="closeCat()" hidden="0">
            <li class="cat">
                <a href="#">
                <div class="catimg"><img src="../uploads/categories/anal.jpg" alt="" class="avacat"></div>
                <div class="cattitle">Анал</div>
                </a>
            </li>
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