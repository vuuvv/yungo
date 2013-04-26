<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8" />
<title><?php echo ($page_seo["title"]); ?></title>
<meta name="keywords" content="<?php echo ($page_seo["keywords"]); ?>" />
<meta name="description" content="<?php echo ($page_seo["description"]); ?>" />
<link rel="stylesheet" type="text/css" href="__STATIC__/css/yungo/base.css" />
<script src="__STATIC__/js/jquery/jquery.js"></script>
<script src="__STATIC__/js/widgets.js"></script>

<link rel="stylesheet" type="text/css" href="__STATIC__/css/yungo/index.css" />
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



<div class="w category">
<div id="hotel_c" class="menu_hotel">
	<div class="menu_w">
		<div class="menu_left_hotel">分类：</div>
		<div class="menu_right_hotel haveb">
			<ul class="b1">
				<a title="全部" href="<?php echo U('book/cate');?>" class="on">全部</a>
				<?php if(is_array($cate_list['p'])): $i = 0; $__LIST__ = $cate_list['p'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bcate): $mod = ($i % 2 );++$i;?><li>
				<a title="<?php echo ($bcate["name"]); ?>" href="<?php echo U('book/cate', array('cid'=>$bcate['id']));?>"><?php echo ($bcate["name"]); ?></a>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
	</div>
	<div class="menu_w">
		<div class="menu_left_hotel">价格：</div>
		<div class="menu_right_hotel haveb">
			<a title="全部" href="<?php echo U('book/cate');?>" class="on">全部</a>
			<ul class="b1">
				<li><a title="0-49元" href="<?php echo U('book/cate', array('max_price'=>'49'));?>">0-49元</a></li>
				<li><a title="50-99元" href="<?php echo U('book/cate', array('min_price'=>'50', 'max_price'=>'99'));?>">50-99元</a></li>
				<li><a title="100-199元" href="<?php echo U('book/cate', array('min_price'=>'100', 'max_price'=>'199'));?>">100-199元</a></li>
				<li><a title="200-499元" href="<?php echo U('book/cate', array('min_price'=>'200', 'max_price'=>'499'));?>">200-499元</a></li>
				<li><a title="500-999元" href="<?php echo U('book/cate', array('min_price'=>'500', 'max_price'=>'999'));?>">500-999元</a></li>
				<li><a title="1000元以上" href="<?php echo U('book/cate', array('min_price'=>'1000'));?>">1000元以上</a></li>
			</ul>
		</div>
	</div>
	<div class="menu_w menu_bod">
		<h1>排序：</h1>
		<div class="hbutton1" id="hbutton">
			<a title="默认" href="/beijing-0-0-0-0-0-1-1-0-0.html"></a>
			<a title="销量由高到低" href="/beijing-0-0-0-0-1-1-1-0-0.html"></a>
			<a title="价格由低到高" href="/beijing-0-0-0-0-2-1-1-0-0.html"></a>
		</div>
		<div class="pagin pagin-m">
			<span class="text"><?php echo ($pager->nowPage); ?>/<?php echo ($pager->totalPages); ?></span>
			<?php if ($pager->is_first()) { ?>
				<span class="next-disabled">上一页</span>
			<?php } else { ?>
				<a href="<?php echo ($pager->prev_url()); ?>" class="next">上一页</a>
			<?php } ?>
			<?php if ($pager->is_last()) { ?>
				<span class="next-disabled">下一页</span>
			<?php } else { ?>
				<a href="<?php echo ($pager->next_url()); ?>" class="next">下一页</a>
			<?php } ?>
		</div>
		<div class="clr"></div>
	</div>
	<div class="clr"></div>
</div>
<div class="w">
	<div class="l">
		<div class="pro">
			<?php if(is_array($item_list)): $i = 0; $__LIST__ = $item_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><div class="product">
				<div class="title">
					<span>积分</span>
					<a title="<?php echo ($item["title"]); ?>" target="_blank" href="<?php echo U('item/index', array('id'=>$item['id']));?>"><?php echo ($item["title"]); ?></a>
				</div>
				<div class="pic">
					<a target="_blank" href="<?php echo U('item/index', array('id'=>$item['id']));?>">
						<img width="210" height="210" alt="<?php echo ($item["title"]); ?>" src="<?php echo attach(get_thumb($item['img'], '_m'), 'item');?>" class="err-product"></a>
					<div class="new_icon"></div>
				</div>
				<div class="price">
					<!--非团购专场-->
					<span><font>2</font>人已购买</span>
				</div>
				<!--非团购专场-->
				<div class="buy">
					<span><?php echo ($item["price"]); ?></span>
					<span class="tg">
						<a title="<?php echo ($item["title"]); ?>" target="_blank" href="<?php echo U('item/index', array('id'=>$item['id']));?>"></a>
					</span>
				</div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
			<div class="clr"></div>
		</div>
		<div class="page">
		<div class="pagin fr">
			<?php if ($pager->is_first()) { ?>
				<span class="next-disabled">上一页</span>
			<?php } else { ?>
				<a href="<?php echo ($pager->prev_url()); ?>" class="next">上一页</a>
			<?php } ?>
			<?php if ($helper['needfirst']) { ?>
				<a href="<?php echo ($pager->first_url()); ?>" >1</a>
				<span class="text">...</span>
			<?php } ?>
			<?php for ($i = $helper['min']; $i <= $helper['max']; $i++) { ?>
			<a href="<?php echo ($pager->get_url($i)); ?>" <?php if ($pager->nowPage == $i) { ?>class="current"<?php } ?>><?php echo $i; ?></a>
			<?php } ?>
			<?php if ($helper['needlast']) { ?>
				<span class="text">...</span>
				<a href="<?php echo ($pager->last_url()); ?>" ><?php echo ($pager->totalPages); ?></a>
			<?php } ?>
			<?php if ($pager->is_last()) { ?>
				<span class="next-disabled">下一页</span>
			<?php } else { ?>
				<a href="<?php echo ($pager->next_url()); ?>" class="next">下一页</a>
			<?php } ?>
		</div>
	</div>
	</div>
</div>
<div class="clr"></div>
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


</body>
</html>