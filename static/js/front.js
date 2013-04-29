/**
 * @name 前台UI&TOOLS
 * @author andery@foxmail.com
 * @url http://www.yungo.com
 */
;(function($){
    $.yungo.init = function(){
        $.yungo.ui.init();
        $.yungo.tool.sendmail();
        $.yungo.tool.msgtip();
    }
    $.yungo.ui = {
        init: function() {
            $.yungo.ui.input_init();
            $.yungo.ui.fixed_nav();
            $.yungo.ui.return_top();
            $.yungo.ui.drop_down();
            $.yungo.ui.decode_img($(document));
            //$.yungo.ui.lazyload();
            $.yungo.ui.captcha();
        },
        lazyload: function() {
            $('img').lazyload();
        },
        //导航浮动
        fixed_nav: function() {
            if(!$("#J_m_nav")[0]) return !1;
            var nt = !1;
            $(window).bind("scroll", function() {
                var st = $(document).scrollTop();
                nt = nt ? nt : $("#J_m_nav").offset().top;
                if (nt < st) {
                    $("#J_m_nav").addClass("nav_fixed");
                    $('#J_m_head').css('margin-bottom', '50px');
                } else {
                    $("#J_m_nav").removeClass("nav_fixed");
                    $('#J_m_head').css('margin-bottom', '10px');
                }
            });
        },
        //返回顶部
        return_top: function() {
            $('#J_returntop')[0] && $('#J_returntop').returntop();
        },
        //下拉菜单
        drop_down: function() {
            var h = null,
                onshow = false;
            $('.J_down_menu_box').hover(
                function(){
                    var self = $(this);
                    if (onshow) clearTimeout(h);
                    if (!self.find('.J_down_menu').is(":animated") && !onshow) {
                        h = setTimeout(function(){
                            self.addClass('down_hover').find('.J_down_menu').slideDown(200);
                            onshow = true;
                        }, 200);
                    }
                },
                function(){
                    var self = $(this);
                    if (!onshow) clearTimeout(h);
                    h = setTimeout(function(){
                        self.removeClass('down_hover').find('.J_down_menu').slideUp(200);
                        onshow = false;
                    }, 200);
                    
                }
            );
        },
        //刷新验证码
        captcha: function() {
            $('#J_captcha_img').click(function(){
                var timenow = new Date().getTime(),
                    url = $(this).attr('data-url').replace(/js_rand/g,timenow);
                $(this).attr("src", url);
            });
            $('#J_captcha_change').click(function(){
                $('#J_captcha_img').trigger('click');
            });
        },
        input_init: function() {
            $('input[def-val],textarea[def-val]').live('focus', function(){
                var self = $(this);
                $.trim(self.val()) == $.trim(self.attr('def-val')) && self.val("");
                self.css("color", "#484848")
            });
            $('input[def-val],textarea[def-val]').live('blur', function(){
                var self = $(this);
                $.trim(self.val()) == "" && (self.val(self.attr('def-val')), self.css("color", "#999999"));
            });
        },
        decode_img: function(context) {
            $('.J_decode_img', context).each(function(){
                var uri = $(this).attr('data-uri')||"";
                $(this).attr('src', $.yungo.util.base64_decode(uri));  
            });
        }
    },
    $.yungo.tool = {
        //发送邮件
        sendmail: function() {
            return YUNGO.async_sendmail ? ($.get(YUNGO.root + '/?a=send_mail'), !0) : !1;
        },
        //信息提示
        msgtip: function() {
            if(YUNGO.uid){
                var is_update = !1;
                var update = function() {
                    is_update = !0;
                    $.getJSON(YUNGO.root + '/?m=user&a=msgtip', function(result){
                        if(result.status == 1){
                            var fans = parseInt(result.data.fans),
                                atme = parseInt(result.data.atme),
                                msg = parseInt(result.data.msg),
                                system = parseInt(result.data.system),
                                msgtotal = fans + atme + msg + system;
                            fans > 0 && $('#J_fans').html('(' + fans + ')');
                            atme > 0 && $('#J_atme').html('(' + atme + ')');
                            msg > 0 && $('#J_msg').html('(' + msg + ')');
                            system > 0 && $('#J_system').html('(' + system + ')');
                            msgtotal > 0 && $('#J_msgtip').html('(' + msgtotal + ')');
                            is_update = !1;
                            setTimeout(function(){update()}, 5E3);
                        }
                    });
                };
                !is_update && update();
            }
        }
    }
    $.yungo.init();
})(jQuery);
