<?php if (!defined('THINK_PATH')) exit();?><!--编辑禁止IP--><div class="dialog_content"><form id="info_form" name="info_form" action="<?php echo u('auto_user/edit');?>" method="post"><table width="100%" cellpadding="2" cellspacing="1" class="table_form"><tr><th width="60">名称 :</th><td><input type="text" name="name" id="name" value="<?php echo ($info["name"]); ?>" class="input-text"></td></tr><tr><th>用户 :</th><td><textarea name="users" id="users" style="height:70px; width:250px;"><?php echo ($info["users"]); ?></textarea><p class="gray">用户名之间用","隔开</p></td></tr></td></tr></table><input type="hidden" name="id" value="<?php echo ($info["id"]); ?>" /></form></div><script>var check_name_url = "<?php echo U('auto_user/ajax_check_name', array('id'=>$info['id']));?>";
$(function(){
	$.formValidator.initConfig({formid:"info_form",autotip:true});
	$("#name").formValidator({onshow:lang.please_input+'名称',onfocus:lang.please_input+'名称'}).inputValidator({min:1,onerror:lang.please_input+'名称'}).ajaxValidator({
	    type : "get",
		url : check_name_url,
		datatype : "json",
		async:'false',
		success : function(result){	
            if(result.status == 0){
                return false;
			}else{
                return true;
			}
		},
		onerror : '采集马甲已存在',
		onwait : lang.connecting_please_wait
	}).defaultPassed();
	
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
});
</script>