<?php if (!defined('THINK_PATH')) exit();?><!doctype html><html><head><meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><link href="__STATIC__/css/admin/style.css" rel="stylesheet"/><title><?php echo L('website_manage');?></title><script>	var URL = '__URL__';
	var SELF = '__SELF__';
	var ROOT_PATH = '__ROOT__';
	var APP	 =	 '__APP__';
	//语言项目
	var lang = new Object();
	<?php $_result=L('js_lang');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>lang.<?php echo ($key); ?> = "<?php echo ($val); ?>";<?php endforeach; endif; else: echo "" ;endif; ?></script></head><body><div id="J_ajax_loading" class="ajax_loading"><?php echo L('ajax_loading');?></div><?php if(($sub_menu != '') OR ($big_menu != '')): ?><div class="subnav"><div class="content_menu ib_a blue line_x"><?php if(!empty($big_menu)): ?><a class="add fb J_showdialog" href="javascript:void(0);" data-uri="<?php echo ($big_menu["iframe"]); ?>" data-title="<?php echo ($big_menu["title"]); ?>" data-id="<?php echo ($big_menu["id"]); ?>" data-width="<?php echo ($big_menu["width"]); ?>" data-height="<?php echo ($big_menu["height"]); ?>"><em><?php echo ($big_menu["title"]); ?></em></a>　<?php endif; if(!empty($sub_menu)): if(is_array($sub_menu)): $key = 0; $__LIST__ = $sub_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($key % 2 );++$key; if($key != 1): ?><span>|</span><?php endif; ?><a href="<?php echo U($val['module_name'].'/'.$val['action_name'],array('menuid'=>$menuid)); echo ($val["data"]); ?>" class="<?php echo ($val["class"]); ?>"><em><?php echo L($val['name']);?></em></a><?php endforeach; endif; else: echo "" ;endif; endif; ?></div></div><?php endif; ?><!--SEO设置--><div class="pad_lr_10"><div class="col_tab"><ul class="tip_list clearfix ml20"><li>网站标题 <span class="highlight">{site_name}</span></li><li>站点设置里面的Title <span class="highlight">{site_title}</span></li><li>站点设置里面的Keywords <span class="highlight">{site_keywords}</span></li><li>站点设置里面的Description <span class="highlight">{site_description}</span></li></ul><ul class="J_tabs tab_but cu_li mt10"><li class="current">发现页面</li><li>分类页面</li><li>专辑页面</li><li>商品详细</li></ul><form id="info_form" action="<?php echo u('seo/page');?>" method="post"><div class="J_panes"><div class="content_list pad_10"><table width="100%" class="table_form"><tr><td width="80"></td><td><ul class="tip_list clearfix"><li>标签名称 <span class="highlight">{tag_name}</span></li></ul></td></tr><tr><th>Title</th><td><textarea name="seo_config[book][title]" cols="80" rows="2"><?php echo ($seo_config["book"]["title"]); ?></textarea></td></tr><tr><th>Keywords</th><td><textarea name="seo_config[book][keywords]" cols="80" rows="2"><?php echo ($seo_config["book"]["keywords"]); ?></textarea></td></tr><tr><th>Description</th><td><textarea name="seo_config[book][description]" cols="80" rows="3"><?php echo ($seo_config["book"]["description"]); ?></textarea></td></tr></table></div><div class="content_list pad_10" style="display:none;"><table width="100%" class="table_form"><tr><td width="80"></td><td><ul class="tip_list clearfix"><li>分类名称 <span class="highlight">{cate_name}</span></li><li>分类Title <span class="highlight">{seo_title}</span></li><li>分类Keywords<span class="highlight">{seo_keywords}</span></li><li>分类Description<span class="highlight">{seo_description}</span></li></ul></td></tr><tr><th>Title</th><td><textarea name="seo_config[cate][title]" cols="80" rows="2"><?php echo ($seo_config["cate"]["title"]); ?></textarea></td></tr><tr><th>Keywords</th><td><textarea name="seo_config[cate][keywords]" cols="80" rows="2"><?php echo ($seo_config["cate"]["keywords"]); ?></textarea></td></tr><tr><th>Description</th><td><textarea name="seo_config[cate][description]" cols="80" rows="3"><?php echo ($seo_config["cate"]["description"]); ?></textarea></td></tr></table></div><div class="content_list pad_10" style="display:none;"><table width="100%" class="table_form"><thead><tr><th colspan="2" align="left">专辑首页</th></tr></thead><tr><th width="80">Title</th><td><textarea name="seo_config[album][title]" cols="80" rows="2"><?php echo ($seo_config["album"]["title"]); ?></textarea></td></tr><tr><th>Keywords</th><td><textarea name="seo_config[album][keywords]" cols="80" rows="2"><?php echo ($seo_config["album"]["keywords"]); ?></textarea></td></tr><tr><th>Description</th><td><textarea name="seo_config[album][description]" cols="80" rows="3"><?php echo ($seo_config["album"]["description"]); ?></textarea></td></tr></table><table width="100%" class="table_form"><thead><tr><th colspan="2" align="left">专辑分类页</th></tr></thead><tr><td></td><td><ul class="tip_list clearfix"><li>分类名称 <span class="highlight">{cate_name}</span></li><li>分类Title <span class="highlight">{seo_title}</span></li><li>分类Keywords<span class="highlight">{seo_keywords}</span></li><li>分类Description<span class="highlight">{seo_description}</span></li></ul></td></tr><tr><th width="80">Title</th><td><textarea name="seo_config[album_cate][title]" cols="80" rows="2"><?php echo ($seo_config["album_cate"]["title"]); ?></textarea></td></tr><tr><th>Keywords</th><td><textarea name="seo_config[album_cate][keywords]" cols="80" rows="2"><?php echo ($seo_config["album_cate"]["keywords"]); ?></textarea></td></tr><tr><th>Description</th><td><textarea name="seo_config[album_cate][description]" cols="80" rows="3"><?php echo ($seo_config["album_cate"]["description"]); ?></textarea></td></tr></table><table width="100%" class="table_form"><thead><tr><th colspan="2" align="left">专辑详细页</th></tr></thead><tr><td></td><td><ul class="tip_list clearfix"><li>专辑名称 <span class="highlight">{album_title}</span></li><li>专辑描述 <span class="highlight">{album_intro}</span></li><li>专辑分类 <span class="highlight">{album_cate}</span></li></ul></td></tr><tr><th width="80">Title</th><td><textarea name="seo_config[album_detail][title]" cols="80" rows="2"><?php echo ($seo_config["album_detail"]["title"]); ?></textarea></td></tr><tr><th>Keywords</th><td><textarea name="seo_config[album_detail][keywords]" cols="80" rows="2"><?php echo ($seo_config["album_detail"]["keywords"]); ?></textarea></td></tr><tr><th>Description</th><td><textarea name="seo_config[album_detail][description]" cols="80" rows="3"><?php echo ($seo_config["album_detail"]["description"]); ?></textarea></td></tr></table></div><div class="content_list pad_10" style="display:none;"><table width="100%" class="table_form"><tr><td width="80"></td><td><ul class="tip_list clearfix"><li>商品标题 <span class="highlight">{item_title}</span></li><li>分享内容 <span class="highlight">{item_intro}</span></li><li>商品标签 <span class="highlight">{item_tag}</span></li><li>会员名称 <span class="highlight">{user_name}</span></li><li>商品Title <span class="highlight">{seo_title}</span></li><li>商品Keywords <span class="highlight">{seo_keywords}</span></li><li>商品Description <span class="highlight">{seo_description}</span></li></ul></td></tr><tr><th>Title</th><td><textarea name="seo_config[item][title]" cols="80" rows="2"><?php echo ($seo_config["item"]["title"]); ?></textarea></td></tr><tr><th>Keywords</th><td><textarea name="seo_config[item][keywords]" cols="80" rows="2"><?php echo ($seo_config["item"]["keywords"]); ?></textarea></td></tr><tr><th>Description</th><td><textarea name="seo_config[item][description]" cols="80" rows="3"><?php echo ($seo_config["item"]["description"]); ?></textarea></td></tr></table></div></div><div class="mt10"><input type="hidden" name="menuid"  value="<?php echo ($menuid); ?>"/><input type="submit" class="btn btn_submit" name="do" value="<?php echo L('submit');?>"/></div></form></div></div><script src="__STATIC__/js/jquery/jquery.js"></script><script src="__STATIC__/js/jquery/plugins/jquery.tools.min.js"></script><script src="__STATIC__/js/jquery/plugins/formvalidator.js"></script><script src="__STATIC__/js/pinphp.js"></script><script src="__STATIC__/js/admin.js"></script><script>//初始化弹窗
(function (d) {
    d['okValue'] = lang.dialog_ok;
    d['cancelValue'] = lang.dialog_cancel;
    d['title'] = lang.dialog_title;
})($.dialog.defaults);
</script><?php if(isset($list_table)): ?><script src="__STATIC__/js/jquery/plugins/listTable.js"></script><script>$(function(){
	$('.J_tablelist').listTable();
});
</script><?php endif; ?><script>$(function(){
    $('ul.J_tabs').tabs('div.J_panes > div');
});
</script></body></html>