<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8" />
<title><?php echo ($page_seo["title"]); ?></title>
<meta name="keywords" content="<?php echo ($page_seo["keywords"]); ?>" />
<meta name="description" content="<?php echo ($page_seo["description"]); ?>" />
<link rel="stylesheet" type="text/css" href="__STATIC__/css/yungo/base.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/css/yungo/style.css" />
<script src="__STATIC__/js/jquery/jquery.js"></script>

</head>
<body>
<script type="text/javascript">
$(function() {
	$('.menu').hover(function() {
			$(this).addClass('hover');
		}, function() {
			$(this).removeClass('hover');
		});
});
</script>
<div class="global-nav">
	<div class="w">
		<ul class="fl lh">
			<li class="fore1 ld"><b></b><a rel="nofollow" href="javascript:addToFavorite()">收藏京东</a>
			</li>
		</ul>
		<ul class="fr lh">
			<li id="loginbar" class="fore1">您好，欢迎来到京东！<span><a href="javascript:login();">[登录]</a> <a class="link-regist" href="javascript:regist();">[免费注册]</a></span></li>
			<li class="fore2 ld">
				<s></s>
				<a rel="nofollow" href="http://jd2008.jd.com/JdHome/OrderList.aspx">我的订单</a>
			</li>
			<li class="fore3 ld">
				<s></s>
				<a target="_blank" href="http://app.jd.com/">手机京东</a>
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
							<div><a href="http://club.jd.com/" target="_blank">京东社区</a></div>
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
							<div><a href="http://www.360top.com/" target="_blank">360TOP</a></div>
							<div><a href="http://www.minitiao.com/" target="_blank">迷你挑</a></div>
							<div><a href="http://en.360buy.com/" target="_blank">English Site</a></div>
						</dd>
					</dl>
				</div>
			</li>
		</ul>
		<span class="clr"></span>
	</div>
</div>




</body>
</html>