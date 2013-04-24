<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title><?php echo ($page_seo["title"]); ?></title>
<meta name="keywords" content="<?php echo ($page_seo["keywords"]); ?>" />
<meta name="description" content="<?php echo ($page_seo["description"]); ?>" />
<link rel="stylesheet" type="text/css" href="__STATIC__/css/yungo/base.css" />
<script src="__STATIC__/js/jquery/jquery.js"></script>
<script src="__STATIC__/js/widgets.js"></script>

<link rel="stylesheet" type="text/css" href="__STATIC__/css/default/album.css" />
</head>
<body>
<script type="text/javascript">
$(function() {
	$('.menu').dropdown({ delay: 50 });
});
</script>
<div class="global-nav">
	<div class="w">
		<ul class="fl lh">
			<li class="fore1 ld"><b></b><a rel="nofollow" href="javascript:addToFavorite()">收藏yungo.net</a>
			</li>
		</ul>
		<ul class="fr lh">
			<li id="loginbar" class="fore1">
				<span>
					<a href="javascript:login();">登录</a>
					<a class="link-regist" href="javascript:regist();">免费注册</a>
				</span>
			</li>
			<li class="fore2 ld">
				<s></s>
				<a rel="nofollow" href="http://jd2008.jd.com/JdHome/OrderList.aspx">我的订单</a>
			</li>
			<li class="fore3 ld">
				<s></s>
				<a target="_blank" href="http://app.jd.com/">邀请好友</a>
			</li>
			<li data-widget="dropdown" id="biz-service" class="fore4 ld menu">
				<s></s>
				<span class="outline"></span>
				<span class="blank"></span>
				客户服务
				<b></b>
				<div class="dd">
					<div><a target="_blank" href="http://help.jd.com/help/question-61.html">常见问题</a></div>
					<div><a target="_blank" href="http://myjd.jd.com/repair/orderlist.action">售后服务</a></div>
					<div><a target="_blank" href="http://chat.jd.com/jdchat/custom.action">在线客服</a></div>
					<div><a target="_blank" href="http://myjd.jd.com/opinion/list.action">投诉中心</a></div>
					<div><a target="_blank" href="http://www.jd.com/contact/service.html">客服邮箱</a></div>
				</div>
			</li>
			<li data-widget="dropdown" id="site-nav" class="fore5 ld menu">
				<s></s>
				<span class="outline"></span>
				<span class="blank"></span>
				网站导航
				<b></b>
				<div class="dd lh">
					<dl class="item fore1">
						<dt>特色栏目</dt>
						<dd>
							<div><a href="http://my.jd.com/personal/guess.html" target="_blank">为我推荐</a></div>
							<div><a href="http://shipingou.jd.com/" target="_blank">视频购物</a></div>
							<div><a href="http://xiaoyuan.jd.com/" target="_blank">校园频道</a></div>
							<div><a href="http://read.jd.com/" target="_blank">在线读书</a></div>
							<div><a href="http://diy.jd.com/" target="_blank">装机大师</a></div>
							<div><a href="http://market.jd.com/giftcard/" target="_blank">礼品卡</a></div>
						</dd>
					</dl>
					<dl class="item fore2">
						<dt>企业服务</dt>
						<dd>
							<div><a href="http://market.jd.com/giftcard/company/default.aspx" target="_blank">企业客户</a></div>
							<div><a href="http://sale.jd.com/p10997.html" target="_blank">办公直通车</a></div>
						</dd>
					</dl>
					<dl class="item fore3">
						<dt>旗下网站</dt>
						<dd>
							<div><a href="http://www.minitiao.com/" target="_blank">迷你挑</a></div>
						</dd>
					</dl>
				</div>
			</li>
		</ul>
		<span class="clr"></span>
	</div>
</div>


<div id="o-header">
	<div id="header" class="w">
		<div class="ld" id="logo">
			<a hidefocus="true" href="http://www.jd.com/"><b></b><img width="260" height="60" alt="京东商城" src="__STATIC__/images/yungo/logo.gif"></a>
		</div>
		<!--logo end-->
		<div id="search">
			<div class="i-search ld">
				<ul class="hide" id="shelper"></ul>
				<div class="form">
					<input type="text" autocomplete="off" id="key" accesskey="s" class="text" style="color: rgb(153, 153, 153);"><input type="button" class="button" value="搜索">
				</div>
			</div>
			<div id="hotwords"><strong>热门搜索：</strong><a style="color:#ff0000" target="_blank" href="http://search.jd.com/Search?keyword=iPhone5">iPhone5</a><a target="_blank" href="http://search.jd.com/Search?keyword=%C6%BD%B0%E5%B5%E7%C4%D4&amp;qr=&amp;qrst=UNEXPAND&amp;et=&amp;rt=1&amp;area=1&amp;cid3=2694&amp;ls=1">平板电脑</a><a target="_blank" href="http://search.jd.com/Search?keyword=%E5%90%8D%E9%9E%8B%E5%BA%93%E8%BF%90%E5%8A%A8%E4%B8%93%E8%90%A5%E5%BA%97%20%E8%80%90%E5%85%8B2013&amp;enc=utf-8">耐克上新</a><a target="_blank" href="http://search.jd.com/Search?keyword=%E5%8D%8E%E4%B8%BAmate&amp;enc=utf-8&amp;area=1">华为mate</a><a target="_blank" href="http://search.jd.com/search?keyword=%B4%B2%B5%E6&amp;qr=&amp;qrst=UNEXPAND&amp;et=&amp;rt=1&amp;area=1&amp;wtype=1">品质床垫</a><a target="_blank" href="http://search.jd.com/search?keyword=%B3%A4%BA%E7%BF%D5%B5%F7&amp;qr=&amp;qrst=UNEXPAND&amp;et=&amp;rt=1&amp;area=1&amp;ev=exbrand_%E9%95%BF%E8%99%B9%EF%BC%88CHANGHONG%EF%BC%89%40&amp;uc=0">长虹空调</a><a target="_blank" href="http://search.jd.com/Search?keyword=%E8%BE%9B%E5%A4%B7%E5%9D%9E&amp;enc=utf-8&amp;area=1">致青春</a></div>
		</div>
	</div>
	<!--header end-->
	<div class="w">
		<div id="nav">
			<ul id="navitems">
				<li class="<?php if($nav_curr == 'index'): ?>curr<?php endif; ?>"><a href="__ROOT__"><?php echo L('index_page');?></a></li>
				<?php $tag_nav_class = new navTag;$data = $tag_nav_class->lists(array('type'=>'lists','style'=>'main','cache'=>'0','return'=>'data',)); if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li class="<?php if($nav_curr == $val['alias']): ?>curr<?php endif; ?>"><a href="<?php echo ($val["link"]); ?>"><?php echo ($val["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
	</div>
</div>




<div class="main_wrap">
    <div class="album_top">
        <?php echo R('advert/index', array(3), 'Widget');?>
        
        <div class="album_daren fl">
            <h3><?php echo L('album_daren');?></h3>
            <ul>
                <?php $data = S('10a3089cb02d3505c2f0beb21ed55a93');if (false === $data) { $tag_user_class = new userTag;$data = $tag_user_class->lists(array('cache'=>'3600','field'=>'id,username,albums,fans','num'=>'4','return'=>'data','type'=>'lists','where'=>'daren=1',));S('10a3089cb02d3505c2f0beb21ed55a93', $data, 3600); } if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li> 
                    <a href="<?php echo U('space/index', array('uid'=>$val['id']));?>" target="_blank"><img alt="<?php echo ($val["username"]); ?>" src="<?php echo avatar($val['id']);?>" class="J_card fl r3" data-uid="<?php echo ($val["id"]); ?>"></a>
                    <div class="album_daren_info">
                        <p class="user_name"><a href="<?php echo U('space/index', array('uid'=>$val['id']));?>" class="J_card uname" data-uid="<?php echo ($val["id"]); ?>" target="_balnk"><?php echo ($val["username"]); ?></a></p>
                        <p class="user_info">
                            <span><?php echo L('album_num');?>:</span>
                            <a href="<?php echo U('space/album', array('uid'=>$val['id']));?>" target="_blank"><?php echo ($val["albums"]); ?></a>&nbsp;
                            <span><?php echo L('fans_num');?>:</span>
                            <a href="<?php echo U('space/fans', array('uid'=>$val['id']));?>" target="_blank"><?php echo ($val["fans"]); ?></a>
                        </p>
                  </div>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="album_add fl">
            <p class="title"><?php echo R('advert/index', array(6), 'Widget');?></p>
            <a href="javascript:;" title="<?php echo L('create_album');?>" class="J_createalbum_btn reco_album_link r5"><?php echo L('create_album');?></a>
            <p class="mgmg"><?php echo R('advert/index', array(7), 'Widget');?></p>
        </div>
    </div>

    <div class="cate_sort clearfix">
        <h3 class="fl"><?php echo (($cate_info["name"])?($cate_info["name"]):L('album')); ?></h3>
        <span class="fl">
            <em class="fl"><?php echo L('sort_order');?>：</em>
            <ul class="fl">
                <li><a <?php if($sort == 'hot'): ?>class="current"<?php endif; ?> href="<?php echo U('album/index', array('sort'=>'hot'));?>"><?php echo L('sort_hot');?></a></li>
                <li><i>|</i></li>
                <li><a <?php if($sort == 'new'): ?>class="current"<?php endif; ?> href="<?php echo U('album/index', array('sort'=>'new'));?>"><?php echo L('sort_new');?></a></li>
            </ul>
        </span> 
    </div>
    <div class="album_wrap clearfix">
        <ul class="album_list clearfix">
            <li class="album_tag fl">
                <h3><?php echo L('all_cate');?>：</h3>
                <div class="tags clearfix">
                    <a href="<?php echo U('album/index');?>" title="<?php echo L('all');?>" <?php if($cate_info["id"] == ''): ?>class="current"<?php endif; ?>><?php echo L('all');?></a>
                    <?php $tag_album_class = new albumTag;$cate_list = $tag_album_class->cate(array('type'=>'cate','return'=>'cate_list','cache'=>'0',)); if(is_array($cate_list)): $i = 0; $__LIST__ = $cate_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?><a href="<?php echo U('album/index',array('cid'=>$cate['id']));?>" title="<?php echo ($cate["name"]); ?>" <?php if($cate_info["id"] == $cate['id']): ?>class="current"<?php endif; ?>><?php echo ($cate["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </li>
            <?php if(is_array($album_list)): $i = 0; $__LIST__ = $album_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$album): $mod = ($i % 2 );++$i;?><li class="J_album_item album_item">
                <div class="album_author">
                    <a target="_blank" href="<?php echo U('space/index', array('uid'=>$album['uid']));?>">
                    <img src="<?php echo avatar($album['uid'], '32');?>" class="J_card avt fl " data-uid="<?php echo ($album["uid"]); ?>" alt="<?php echo ($album["uname"]); ?>">
                    </a>
                    <div class="album_info">
                        <p><a title="<?php echo ($album["title"]); ?>" href="<?php echo U('album/detail', array('id'=>$album['id']));?>" class="album_title" target="_blank"><?php echo ($album["title"]); ?></a></p>
                        <p class="u_link"><a href="<?php echo U('space/index', array('uid'=>$album['uid']));?>" class="J_card n" data-uid="<?php echo ($album["uid"]); ?>" target="_blank"><?php echo ($album["uname"]); ?></a></p>
                    </div>
                </div>
                <ul>
                    <?php $__FOR_START_5876__=0;$__FOR_END_5876__=C('pin_album_cover_items');for($i=$__FOR_START_5876__;$i < $__FOR_END_5876__;$i+=1){ ?><li class="<?php if($i == 0): ?>big<?php elseif($i == 1): ?>left small<?php else: ?>small<?php endif; ?>">
                        <?php if(isset($album['cover'][$i])): if($i == 0): ?><img class="J_decode_img" data-uri="<?php echo base64_encode(attach(get_thumb($album['cover'][$i]['img'], '_m'), 'item'));?>" />
                        <?php else: ?>
                        <img class="J_decode_img" data-uri="<?php echo base64_encode(attach(get_thumb($album['cover'][$i]['img'], '_s'), 'item'));?>" /><?php endif; endif; ?>
                    </li><?php } ?>
                </ul>
                <a href="<?php echo U('album/detail', array('id'=>$album['id']));?>" class="album_link" title="<?php echo ($album["uname"]); ?>" target="_blank"></a>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <div class="page_bar"><?php echo ($page_bar); ?></div>
</div>
<div class="w960"><?php echo R('advert/index', array(11), 'Widget');?></div>
<div class="footer_wrap rt10">
    <a href="__APP__" class="foot_logo"></a>
    <div class="foot_links clearfix">
        <dl class="foot_nav fl">
            <dt><?php echo L('site_nav');?></dt>
            <?php $tag_nav_class = new navTag;$data = $tag_nav_class->lists(array('type'=>'lists','style'=>'bottom','cache'=>'0','return'=>'data',)); if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><dd><a href="<?php echo ($val["link"]); ?>" <?php if($val["target"] == 1): ?>target="_blank"<?php endif; ?>><?php echo ($val["name"]); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
        </dl>
        <dl class="aboutus fl">
            <dt><?php echo L('aboutus');?></dt>
            <?php $tag_article_class = new articleTag;$data = $tag_article_class->cate(array('type'=>'cate','cateid'=>'1','cache'=>'0','return'=>'data',)); if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><dd><a href="<?php echo U('aboutus/index', array('id'=>$val['id']));?>" target="_blank"><?php echo ($val["name"]); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
        </dl>
        <dl class="flinks fr">
            <dt><?php echo L('flink');?></dt>
            <?php $data = S('36cd2015820ec8da2a165ad5dfc0c797');if (false === $data) { $tag_flink_class = new flinkTag;$data = $tag_flink_class->lists(array('cache'=>'3600','num'=>'5','return'=>'data','type'=>'lists',));S('36cd2015820ec8da2a165ad5dfc0c797', $data, 3600); } if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><dd><a href="<?php echo ($val["url"]); ?>" target="_blank"><?php echo ($val["name"]); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
            <dd><a href="<?php echo U('aboutus/flink');?>" class="more" target="_blank"><?php echo L('more');?>...</a></dd>
        </dl>
        <?php echo R('advert/index', array(8), 'Widget');?>
    </div>
    <p class="pt20">Powered by <a href="http://www.pinphp.com/" class="tdu clr6" target="_blank">PinPHP <?php echo (PIN_VERSION); ?> <?php echo (PIN_RELEASE); ?></a> &copy;Copyright 2010-2012 <a href="__ROOT__/" class="tdu clr6" target="_blank"><?php echo C('pin_site_name');?></a> (<a href="http://www.miibeian.gov.cn" class="tdu clr6" target="_blank"><?php echo C('pin_site_icp');?></a>)<?php echo C('pin_statistics_code');?></p>
</div>
<div id="J_returntop" class="return_top"></div>

<script>
var PINER = {
    root: "__ROOT__",
    uid: "<?php echo $visitor['id'];?>", 
    async_sendmail: "<?php echo $async_sendmail;?>",
    config: {
        wall_distance: "<?php echo C('pin_wall_distance');?>",
        wall_spage_max: "<?php echo C('pin_wall_spage_max');?>"
    },
    //URL
    url: {}
};
//语言项目
var lang = {};
<?php $_result=L('js_lang');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>lang.<?php echo ($key); ?> = "<?php echo ($val); ?>";<?php endforeach; endif; else: echo "" ;endif; ?>
</script>
<?php $tag_load_class = new loadTag;$data = $tag_load_class->js(array('type'=>'js','href'=>'__STATIC__/js/jquery/plugins/jquery.tools.min.js,__STATIC__/js/jquery/plugins/jquery.masonry.js,__STATIC__/js/jquery/plugins/formvalidator.js,__STATIC__/js/fileuploader.js,__STATIC__/js/pinphp.js,__STATIC__/js/front.js,__STATIC__/js/dialog.js,__STATIC__/js/wall.js,__STATIC__/js/item.js,__STATIC__/js/user.js,__STATIC__/js/album.js','cache'=>'0','return'=>'data',));?>
</body>
</html>