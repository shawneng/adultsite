<?php
$studios_array = explode(', ', $studios);
?>
<div id="result"></div>
<div class="full-story">
    <div class="c-video">
        <div class="right-block inline-block right">
            <div class="poh">

            </div>
        </div>
        <div class="left-block inline-block">
            <div id="video" class="z-depth-4">
                <div class="video">
                    <video src="<?php echo $info_array['video'] ?>" controls
                           poster="<?php echo $info_array['pre'] ?>"></video>
                </div>
                <div class="rightAD">

                </div>
            </div>
            <div class="finfo radius z-depth-4">
                <div class="ftitle"><h1 class="font-h1"><?php echo $info_array['title'] ?></h1></div>
                <div class="infol inline-block">
                    <div class="f-views"><?php echo $info_array['views'] ?> просмотров</div>
                </div>
                <div class="infor inline-block right">
                    <div class="flikes inline-block"><i class="material-icons">favorite_border</i>
                        <div class="f-itext inline-block"><?php echo $info_array['likes'] ?></div>
                        <button class="share inline-block waves-effect waves-light btn pink "><i class="material-icons">cloud_download</i><span class="inline-block f-itext">Скачать</span></button>
                        <button class="share inline-block btn-flat waves-effect waves-light"><i class="material-icons">share</i><span class="inline-block f-itext">Поделиться</span></button>
                        <button class="share inline-block btn-flat waves-effect waves-light"><i class="material-icons">playlist_add</i></button>
                        <button class="share inline-block btn-flat waves-effect waves-light"><i class="material-icons">more_horiz</i></button>
                    </div>
                </div>
            </div>
            <div class="finfo radius z-depth-4">
                <div class="studio inline-block">
                    <div class="img-studio"><img src="https://image.spreadshirtmedia.com/image-server/v1/compositions/T812A2PA1663PT14X35Y63D1010253415S84C12%3A19/views/1,width=300,height=300,appearanceId=2/brazzers-primary-logo-men-s-premium-t-shirt.jpg" alt="" class="circle"></div>
                </div>
                <div class="name-studio inline-block">
                    <div class="name-s">Brazzers</div>
                    <div class="date-o">Опубликовано: 14 июля 2017</div>
                </div>
                <div class="follow inline-block right">
                    <?php
                    if (!in_array($_GET['id'], $studios_array)){
                        echo '<button class="z-depth-2 follow-btn inline-block waves-effect waves-light btn pink" id="f-btn"><a class="inline-block following" id="follow">Подписаться</a><span id="c-follows" class="count-follow"> 1.1 МЛН</span></button>';
                    }
                    else {
                        echo '<button class="z-depth-2 follow-btn inline-block waves-effect waves-light btn f-btn" id="f-btn"><a class="inline-block following f-color" id="follow">Подписка оформленна</a><span id="c-follows" class="count-follow f-color"> 1.1 МЛН</span></button>';
                    }
                    ?>
                </div>
                <div class="descr-video">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header"><div class="more">Ещё</div><div class="pre-descr">Страстный минет и глубокий анальный секс замечательной, сексуальной, грудастой детки. Парень решил поиграться со своей девушкой шлюхой в ролевые игры как будто они брат с сестрой и трахаются пока родителей нет дома и снять домашнее топ порно на будущие...</div>
                            </div>
                            <div class="collapsible-body">Красивая молоденькая девушка была не против такого действия и быстро согласилась на жестокий, анальный, но интересный секс и трах с игрушками, самотыками, резиновыми членами. Она делает минуть и сосёт, а парень - куни и кунилингус в попу. Парень оператор - друг хахаля, не против поснимать порнуху первый раз для товарища.
                            <div class="f-cat">Категории: Анал, БДСМ</div>
                                <div>Теги: большая попа, минет</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>