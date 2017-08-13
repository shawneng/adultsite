<div class="row">
    <div class="col s12" id="video">
        <div class="video">
            <video src="<?php echo $info_array['video']?>" controls poster="<?php echo $info_array['pre']?>" class="responsive-video"></video>
        </div>
        <div class="rightAD">

        </div>
    </div>
    <div class="finfo radius">
        <div class="ftitle"><h1><?php echo $info_array['title']?></h1></div>
        <div class="infol inline-block">
            <div class="fviews inline-block"><img src="../templete/images/views.png" alt="" class="infopng"><div class="itext inline-block"><?php echo $info_array['views']?></div></div>
            <div class="ftime inline-block"><img src="../templete/images/time.png" alt="" class="infopng"><div class="itext inline-block"><?php echo $info_array['time']?></div></div>
        </div>
        <div class="infor inline-block right">
            <div class="flikes inline-block"><img src="../templete/images/un_like.png" alt="" class="infopngr"><div class="itext inline-block"><?php echo $info_array['likes']?></div></div>
        </div>
    </div>
</div>