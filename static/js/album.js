/**
 * @name 专辑相关
 * @author andery@foxmail.com
 * @url http://www.yungo.com
 */
;(function($){
    $.yungo.album = {
        settings: {
            create_btn: '.J_createalbum_btn',
            album_unit: '.J_album_item'
        },
        init: function(options){
            options && $.extend($.yungo.album.settings, options);
            var s = $.yungo.album.settings;
            //创建专辑
            $(s.create_btn).live('click', function(){
                $.yungo.album.create();
            });
            //专辑操作
            $(s.album_unit).live('mouseover', function(){
                $(this).find('.J_control').show();
                $(this).find('.J_mask').hide();
            }).live('mouseout', function(){
                $(this).find('.J_control').hide();
                $(this).find('.J_mask').show();
            });
            $(s.album_unit).find('.J_edit').live('click', function(){
                var aid = $(this).parents(s.album_unit).attr('data-aid');
                $.yungo.album.edit(aid);
            });
            $(s.album_unit).find('.J_del').live('click', function(){
                var aid = $(this).parents(s.album_unit).attr('data-aid');
                $.yungo.album.del(aid);
            });
            $.yungo.album.follow();
            $.yungo.album.unfollow();
        },
        form_init: function(form) {
            //封面图片上传
            form.find('#J_upload_banner').uploader({
                action_url: YUNGO.root + '/?m=album&a=album_upload_banner',
                input_id: 'J_banner',
                input_name: 'banner',
                onComplete: function(id, fileName, result){
                    if(result.status == '1'){
                        $('#J_banner').val(result.data.banner);
                        $('#J_album_form').find('.J_preview').html('<img src="'+result.data.src+'" class="fl" />');
                    }else{
                        $.yungo.tip({content:result.msg, icon:'error'});
                    }
                }
            });
            //表单验证
            $.formValidator.initConfig({formid:form.attr('id'),autotip:true});
            form.find('#J_album_title').formValidator({onshow:' ', onfocus:lang.please_input+lang.title}).inputValidator({min:1,onerror:lang.please_input+lang.title});
            form.ajaxForm({
                success: function(result){
                    if(result.status == 1){
                        $.dialog.get('album').close();
                        $.yungo.tip({content:result.msg});
                        window.location.reload();
                    } else {
                        $.yungo.tip({content:result.msg, icon:'error'});
                    }
                },
                dataType: 'json'
            });
        },
        create: function(){
            if(!$.yungo.dialog.islogin()) return !1;
            $.getJSON(YUNGO.root + '/?m=album&a=create_album', function(result){
                if(result.status == 1){
                    $.dialog({id:'album', title:lang.create_album, content:result.data, padding:'', fixed:true, lock:true});
                    $.yungo.album.form_init($('#J_album_form'));
                }else{
                    $.yungo.tip({content:result.msg, icon:'error'});
                }
            });
        },
        edit: function(aid){
            if(!$.yungo.dialog.islogin()) return !1;
            $.dialog({id:'album', title:lang.edit_album, padding:'', fixed:true, lock:true});
            $.getJSON(YUNGO.root + '/?m=album&a=edit_album', {aid:aid}, function(result){
                if(result.status == 1){
                    $.dialog.get('album').content(result.data);
                    $.yungo.album.form_init($('#J_album_form'));
                }else{
                    $.yungo.tip({content:result.msg, icon:'error'});
                }
            });
        },
        del: function(aid){
            if(!$.yungo.dialog.islogin()) return !1;
            if(!confirm(lang.confirm_del_album)) return !1;
            $.getJSON(YUNGO.root + '/?m=album&a=delete_album', {aid:aid}, function(result){
                if(result.status == 1){
                    $.yungo.tip({content:result.msg});
                    window.location.reload();
                }else{
                    $.yungo.tip({content:result.msg,  icon:'error'});
                }
            });
        },
        follow: function(){
            $('.J_follow_album').live('click', function(){
                if(!$.yungo.dialog.islogin()) return !1;
                var self = $(this),
                    aid = self.attr('data-aid'),
                    afn = parseInt($('#J_afn_'+aid).text());
                $.getJSON(YUNGO.root + '/?m=album&a=follow', {aid:aid}, function(result){
                    if(result.status == 1){
                        //更改按钮&添加数量
                        self.html(lang.unfollow_album);
                        self.removeClass('J_follow_album').removeClass('album_look_link').addClass('J_unfollow_album').addClass('album_unlook_link');
                        $('#J_afn_'+aid).text(afn+1);
                    }else{
                        $.yungo.tip({content:result.msg,  icon:'error'});
                    }
                });
            });
        },
        unfollow: function(){
            $('.J_unfollow_album').live('click', function(){
                if(!$.yungo.dialog.islogin()) return !1;
                var self = $(this),
                    aid = self.attr('data-aid'),
                    afn = parseInt($('#J_afn_'+aid).text());
                $.getJSON(YUNGO.root + '/?m=album&a=unfollow', {aid:aid}, function(result){
                    if(result.status == 1){
                        //更改按钮&添加数量
                        self.html(lang.follow_album);
                        self.removeClass('J_unfollow_album').removeClass('album_unlook_link').addClass('J_follow_album').addClass('album_look_link');
                        $('#J_afn_'+aid).text(afn-1);
                    }else{
                        $.yungo.tip({content:result.msg,  icon:'error'});
                    }
                });
            });
        }
    };
    $.yungo.album.init();
})(jQuery);
