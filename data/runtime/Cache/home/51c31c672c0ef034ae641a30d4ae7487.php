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

<link rel="stylesheet" type="text/css" href="__STATIC__/css/default/item.css" />
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



<!--商品详细-->
<div class="main_wrap pt10" style="_padding-left:0;">
    <div class="mt10"><?php echo R('advert/index', array(14), 'Widget');?></div>
    <div class="itembox clearfix">
        <div class="itembox_l fl">
            <div class="note_box clearfix">
                <div id="J_item_gallery" class="show_body">
                    <div class="J_item img_show">
                        <a target="_blank" href="__ROOT__/?m=item&a=tgo&to=<?php echo base64_encode($item['url']);?>">
                            <div id="J_img_zoom" class="img_zoom"><img alt="<?php echo ($item["title"]); ?>" class="J_decode_img" data-uri="<?php echo base64_encode(attach(get_thumb($img_list[0]['url'], '_b'), 'item'));?>" jqimg="<?php echo attach($img_list[0]['url'], 'item');?>"></div>
                        </a>
                        <a href="javascript:;" class="J_joinalbum addalbum_btn" data-id="<?php echo ($item["id"]); ?>"></a>
                    </div>
                    <div class="img_list clearfix">
                        <ul id="J_img_list" class="fl">
                            <?php if(is_array($img_list)): $i = 0; $__LIST__ = $img_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$img): $mod = ($i % 2 );++$i;?><li data-url="<?php echo attach(get_thumb($img['url'], '_b'), 'item');?>" <?php if($i == 1): ?>class="active"<?php endif; ?>><img alt="<?php echo ($item["title"]); ?>" class="J_decode_img" data-uri="<?php echo base64_encode(attach(get_thumb($img['url'], '_s'), 'item'));?>"></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
                <?php if(!empty($maylike_list)): ?><h3 class="may_fav_title"><?php echo L('guess_you_like_title');?></h3>
                <?php if(is_array($maylike_list)): $i = 0; $__LIST__ = $maylike_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mval): $mod = ($i % 2 );++$i;?><div class="slide_show">
                    <h3><a href="<?php echo U('book/index', array('tag'=>$mval['name']));?>" class="more" target="_blank"><?php echo L('show_more');?>...</a><?php echo ($mval["name"]); ?></h3>
                    <ul class="clearfix">
                        <?php if(is_array($mval['list'])): $i = 0; $__LIST__ = $mval['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mitem): $mod = ($i % 2 );++$i;?><li>
                            <a href="<?php echo U('item/index', array('id'=>$mitem['id']));?>" class="show_img" target="_blank">
                            <img class="J_decode_img" data-uri="<?php echo base64_encode(attach(get_thumb($mitem['img'], '_m'), 'item'));?>" alt="<?php echo ($mitem["title"]); ?>">
                            </a>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div><?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </div>
        </div>
	
        <div class="itembox_r fr">
            <div class="item_link mb20">
                <img src="<?php echo attach($orig['img'], 'item_orig');?>">
                <a href="__ROOT__/?m=item&a=tgo&to=<?php echo base64_encode($item['url']);?>" class="shop_link" rel="nofollow" title="<?php echo ($item["title"]); ?>" target="_blank"><?php echo ($item["title"]); ?></a>
                <a href="__ROOT__/?m=item&a=tgo&to=<?php echo base64_encode($item['url']);?>" class="buy_link" rel="nofollow" target="_blank"><b>¥<?php echo ($item["price"]); ?> <?php echo sprintf(L('go_to_buy'), $orig['name']);?></b><i></i></a>
            </div>
            <?php if(!empty($item['tag_list'])): ?><div class="item_tags pt10 clearfix">
                <p>
                    <?php echo L('tag');?>：
                    <?php if(is_array($item['tag_list'])): $i = 0; $__LIST__ = $item['tag_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tag): $mod = ($i % 2 );++$i;?><a href="<?php echo U('book/index', array('tag'=>urlencode($tag)));?>" target="_blank"><?php echo ($tag); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                </p>
            </div><?php endif; ?>
            <div class="shareinfo mb20">
                <div class="shareinfo_u clearfix">
                    <a href="<?php echo U('space/index', array('uid'=>$item['uid']));?>" target="_blank"><img alt="<?php echo ($item["uname"]); ?>" class="J_card fl r3" src="<?php echo avatar($item['uid'], 48);?>" data-uid="<?php echo ($item["uid"]); ?>" /></a>
                    <div class="user_info">
                        <a href="<?php echo U('space/index', array('uid'=>$item['uid']));?>" class="J_card n" data-uid="<?php echo ($item["uid"]); ?>" target="_blank"><?php echo ($item["uname"]); ?></a><br>
                        <p class="saytime"><?php echo (fdate($item["add_time"])); ?></p>
                    </div>
                </div>
                <?php if(!empty($item['intro'])): ?><p class="shareinfo_t"><?php echo ($item["intro"]); ?></p><?php endif; ?>
                <div class="share_box">
                    <div class="favorite fl">
                        <a href="javascript:;" class="J_likeitem like_btn" data-id="<?php echo ($item["id"]); ?>"><?php echo L('like');?></a>
                        <div class="J_like_n like_count fl"><a target="_blank"><?php echo ($item["likes"]); ?></a><i></i></div>
                    </div>
                    <div class="fr mt15">
                        <!-- Baidu Button BEGIN -->
                        <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
                        <span class="bds_more"></span>
                        <a class="bds_tsina"></a>
                        <a class="bds_qzone"></a>
                        <a class="bds_tqq"></a>
                        <a class="bds_renren"></a>
                        </div>
                        <script type="text/javascript" id="bdshare_js" data="type=tools&amp;mini=1&amp;uid=0" ></script>
                        <script type="text/javascript" id="bdshell_js"></script>
                        <script type="text/javascript">
                        document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
                        </script>
                        <!-- Baidu Button END -->
                    </div>
                </div>
            </div>
            <div id="J_comment_area" class="comment_area"  data-id="<?php echo ($item["id"]); ?>">
                <h3><?php echo L('comment_area');?></h3>
                <div class="comment_publish">
                    <div class="pub_box"><textarea id="J_cmt_content" name="content" class="pub_content" def-val="<?php echo L('item_cmt_def');?>"><?php echo L('item_cmt_def');?></textarea></div>
                    <div class="pub_act"><a href="javascript:;" id="J_cmt_submit" class="submit r3 fr"><?php echo L('ok');?></a></div>
                </div>
                <div class="comment_list">
                    <ul id="J_cmt_list">
                        <?php if(is_array($cmt_list)): $i = 0; $__LIST__ = $cmt_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li> 
                            <a href="<?php echo U('space/index', array('uid'=>$val['uid']));?>" target="_blank"><img src="<?php echo avatar($val['uid'], 48);?>" class="J_card avt" data-uid="<?php echo ($val["uid"]); ?>" /></a>
                            <p><a href="<?php echo U('space/index', array('uid'=>$val['uid']));?>" class="J_card n" data-uid="<?php echo ($val["uid"]); ?>" target="_blank"><?php echo ($val["uname"]); ?></a></p>
                            <p><?php echo ($val["info"]); ?><span>&nbsp;&nbsp;&nbsp;<?php echo (fdate($val["add_time"])); ?></span></p>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    <div id="J_cmt_page" class="page_bar"><?php echo ($page_bar); ?></div>
                </div>
            </div>
            <?php echo R('advert/index', array(13), 'Widget');?>
        </div>
    </div>
</div>
<script src="__STATIC__/js/jquery/plugins/jquery.jqzoom.js"></script>
<script src="__STATIC__/js/jquery/plugins/jquery.jcarousel.js"></script>
<div id="ft">
       <div class="w">
	<div id="service">
		<dl class="fore1">
			<dt><b></b><strong>购物指南</strong></dt>
			<dd>
				<div><a rel="nofollow" title="购物流程" href="http://help.jd.com/help/question-311.html" target="_blank">购物流程</a></div>
				<div><a rel="nofollow" title="常见问题" href="http://help.jd.com/help/question-181.html" target="_blank">常见问题</a></div>
				<div><a rel="nofollow" title="邮箱白名单设置" href="http://help.jd.com/help/question-314.html" target="_blank">邮箱白名单设置</a></div>
                <div><a rel="nofollow" title="团购满赠积分" href="http://sale.jd.com/act/Dpvo3w8HiRru.html" target="_blank">团购满赠积分</a></div>
			</dd>
		</dl>
		<dl class="fore2">
			<dt><b></b><strong>关于我们</strong></dt>
			<dd>
				<div><a title="京东团购概念" href="http://help.jd.com/help/question-312.html" target="_blank">京东团购概念</a></div>
				<div><a title="京东团承诺" href="http://help.jd.com/help/question-313.html" target="_blank">京东团承诺</a></div>
				<div><a rel="nofollow" title="服务热线" href="http://help.jd.com/help/question-62.html#help202" target="_blank">服务热线</a></div>
			</dd>
		</dl>
		<dl class="fore3">
			<dt><b></b><strong>商务合作</strong></dt>
			<dd>
				<div><a rel="nofollow" href="/feedback/seller.php" target="_blank">商品报名</a></div>
                <div><a rel="nofollow" href="mailto:wangnana@jd.com" target="_blank">市场合作邮箱</a></div>
			</dd>
		</dl>
		<dl class="fore4">
			<dt><b></b><strong>手机团购</strong></dt>
			<dd>
				<div><a title="tuan.m.jd.com" href="http://tuan.m.jd.com" target="_blank">tuan.m.jd.com</a></div>
				<div><a title="iPhone客户端" href="http://app.jd.com/iphone.html" target="_blank">iPhone客户端</a></div>
			</dd>
		</dl>
		<dl class="fore5">
			<dt><b></b><strong>关注我们</strong></dt>
			<dd>
				<div id="sinawb"><a rel="nofollow" title="新浪微博" href="http://weibo.com/tuan360buy" target="_blank">新浪微博</a></div>
				<div id="txwb"><a rel="nofollow" title="腾讯微博" href="http://t.qq.com/jingdongtuangou" target="_blank">腾讯微博</a></div>
				<div id="sohuwb"><a rel="nofollow" title="搜狐微博" href="http://tuan360buy.t.sohu.com" target="_blank">搜狐微博</a></div>
			</dd>
		</dl>
		<span class="clr"></span>
	</div>
</div>
<!-- footer end -->
</div>


<script src="__STATIC__/js/comment.js"></script>
</body>
</html>