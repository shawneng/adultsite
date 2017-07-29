<header>
    <div id="head" class="center">
        <div id="logo" class="inline-block">
            <a href="/">Name Site</a>
        </div>
        <div id="navigation">
            <a href="/" class="nava">Главная</a>
            <a href="#" class="nava">Категории</a>
            <a href="#" class="nava">Porno Stars</a>
        </div>
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