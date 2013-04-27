/**
 * @name 商品评论
 * @author andery@foxmail.com
 * @url http://www.yungo.com
 */
;(function($){
    $.yungo.comment = {
        settings: {
            container: '#J_comment_area',
            page_list: '#J_cmt_list',
            page_bar: '#J_cmt_page',
            pub_content: '#J_cmt_content',
            pub_btn: '#J_cmt_submit'
        },
        init: function(options){
            options && $.extend($.yungo.comment.settings, options);
            $.yungo.comment.list();
            $.yungo.comment.publish();
        },
        //列表
        list: function(){
            var s = $.yungo.comment.settings;
            $('li', $(s.page_list)).live({
                mouseover: function(){
                    $(this).addClass('hover');
                },
                mouseout: function(){
                    $(this).removeClass('hover');
                }
            });
            $('a', $(s.page_bar)).live('click', function(){
                var url = $(this).attr('href');
                $.getJSON(url, function(result){
                    if(result.status == 1){
                        $(s.page_list).html(result.data.list);
                        $(s.page_bar).html(result.data.page);
                    }else{
                        $.yungo.tip({content:result.msg, icon:'error'});
                    }
                });
                return false;
            });
        },
        //发表评论
        publish: function(){
            var s = $.yungo.comment.settings;
            $(s.pub_btn).live('click', function(){
                if(!$.yungo.dialog.islogin()) return !1;
                var id = $(s.container).attr('data-id'),
                    dv = $(s.pub_content).attr('def-val'),
                    content = $(s.pub_content).val();
                if(content == dv){
                    $(s.pub_content).focus();
                    return false;
                }
                $.ajax({
                    url: PINER.root + '/?m=item&a=comment',
                    type: 'POST',
                    data: {
                        id: id,
                        content: content
                    },
                    dataType: 'json',
                    success: function(result){
                        if(result.status == 1){
                            $(s.pub_content).val('');
                            $(s.page_list).prepend(result.data);
                        }else{
                            $.yungo.tip({content:result.msg, icon:'error'});
                        }
                    }
                });
            });
        }
    };
    $.yungo.comment.init();
})(jQuery);
