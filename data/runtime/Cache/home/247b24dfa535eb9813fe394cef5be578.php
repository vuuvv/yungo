<?php if (!defined('THINK_PATH')) exit();?><!--自定义广告模板  专辑焦点图-->
<div class="fl" id="album_slide">
    <ul class="album_slide_items">
        <?php if(is_array($ad_list)): $i = 0; $__LIST__ = $ad_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ad): $mod = ($i % 2 );++$i;?><li class="album_slide_item">
            <?php echo ($ad["html"]); ?>
            <div class="author">
                <a href="<?php echo U('space/index', array('uid'=>$ad['extval']));?>" target="_blank">
                    <img class="J_card fl avatar r5" src="<?php echo avatar($ad['extval'], 64);?>" data-uid="<?php echo ($ad["extval"]); ?>">
                </a>
                <div class="info">
                    <p class="title"><?php echo ($ad["name"]); ?></p>
                    <p class="desc"><?php echo ($ad["desc"]); ?></p>
                </div>
            </div>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>

<div id="album_slide_btn">
    <ul>
        <li class="c">●</li>
    </ul>
</div>
<script>
$(function(){
    $.pinphp.photo_slide('album_slide', 'album_slide_btn', 'album_slide_item', 470);
});
</script>