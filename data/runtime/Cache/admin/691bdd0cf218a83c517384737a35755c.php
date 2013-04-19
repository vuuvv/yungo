<?php if (!defined('THINK_PATH')) exit();?><div class="dialog_content"><form id="info_form" action="<?php echo u('album/edit');?>" method="post"><div class="common-form"><table width="100%" cellpadding="2" cellspacing="1" class="table_form"><tr><th width="80">专辑分类 :</th><td><select name="cate_id" id="cate_id"><option value="">--请选择分类--</option><?php if(is_array($cate_list)): $i = 0; $__LIST__ = $cate_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><option value="<?php echo ($val["id"]); ?>" <?php if($info['cate_id'] == $val['id']): ?>selected="selected"<?php endif; ?>><?php echo ($val["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select></td></tr><tr><th width="80">专辑名称 :</th><td><input type="text" name="title" id="title" class="input-text" size="30" style="width:65%;" value="<?php echo ($info["title"]); ?>"></td></tr><tr><th>专辑图片 :</th><td><input type="text" name="banner" id="J_img" class="input-text fl mr10" size="30" value="<?php echo ($info["banner"]); ?>"><div id="J_upload_img" class="upload_btn"><span><?php echo L('upload');?></span></div><?php if(!empty($info['banner'])): ?><span class="attachment_icon J_attachment_icon" file-type="image" file-rel="<?php echo attach($info['banner'], 'album');?>"><img src="__STATIC__/images/filetype/image_s.gif" /></span><?php endif; ?></td></tr><tr><th width="80">专辑描述 :</th><td><textarea name="intro" id="intro" style="width:65%;height:50px;"><?php echo ($info["intro"]); ?></textarea></td></tr></table><input type="hidden" name="id" value="<?php echo ($info["id"]); ?>" /></div></form></div><script src="__STATIC__/js/fileuploader.js"></script><script type="text/javascript">$(function(){
	$.formValidator.initConfig({formid:"info_form",autotip:true});
	$("#title").formValidator({onshow:"请填写专辑名称",onfocus:"请填写专辑名称"}).inputValidator({min:1,onerror:"请填写专辑名称"}).defaultPassed();
	$("#cate_id").formValidator({onshow:"请选择分类",onfocus:"请选择分类"}).inputValidator({min:1,onerror:"请选择分类"}).defaultPassed();
	$('#info_form').ajaxForm({success:complate,dataType:'json'});
	function complate(result){
		if(result.status == 1){
			$.dialog.get(result.dialog).close();
			$.pinphp.tip({content:result.msg});
			window.location.reload();
		} else {
			$.pinphp.tip({content:result.msg, icon:'alert'});
		}
	}
	
	//上传图片
    var uploader = new qq.FileUploaderBasic({
    	allowedExtensions: ['jpg','gif','jpeg','png','bmp','pdg'],
        button: document.getElementById('J_upload_img'),
        multiple: false,
        action: "<?php echo U('album/ajax_upload_img');?>",
        inputName: 'img',
        forceMultipart: true, //用$_FILES
        messages: {
        	typeError: lang.upload_type_error,
        	sizeError: lang.upload_size_error,
        	minSizeError: lang.upload_minsize_error,
        	emptyError: lang.upload_empty_error,
        	noFilesError: lang.upload_nofile_error,
        	onLeave: lang.upload_onLeave
        },
        showMessage: function(message){
        	$.pinphp.tip({content:message, icon:'error'});
        },
        onSubmit: function(id, fileName){
        	$('#J_upload_img').addClass('btn_disabled').find('span').text(lang.uploading);
        },
        onComplete: function(id, fileName, result){
        	$('#J_upload_img').removeClass('btn_disabled').find('span').text(lang.upload);
            if(result.status == '1'){
        		$('#J_img').val(result.data);
        	} else {
        		$.pinphp.tip({content:result.msg, icon:'error'});
        	}
        }
    });
});
</script>