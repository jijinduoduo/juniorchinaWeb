//鼠标选中后导航栏刷新也不变
$(document).ready(function(){  
    $(".url a").each(function(){  
        $this = $(this);  
        if($this[0].href==String(window.location)){  
            $this.addClass("hover");  
        }  
    });  

	jQuery.jqtab = function(tabtit,tab_conbox,shijian) {
		$(tab_conbox).find("li").hide();
		$(tabtit).find("li:first").addClass("thistab").show(); 
		$(tab_conbox).find("li:first").show();
	
		$(tabtit).find("li").bind(shijian,function(){
		  $(this).addClass("thistab").siblings("li").removeClass("thistab"); 
			var activeindex = $(tabtit).find("li").index(this);
			$(tab_conbox).children().eq(activeindex).show().siblings().hide();
			return false;
		});
	
	};
	/*调用方法如下：*/
	$.jqtab("#tabs","#tab_conbox","click");// 鼠标点击切换
	
	$.jqtab("#tabs2","#tab_conbox2","mouseenter");// 鼠标滑过切换
	
});

//鼠标点击后侧边栏也不变
$(document).ready(function(){  
    $(".tabs li").each(function(){  
    	   $(".tabs li:first").addClass("tabs_hover");
        $(this).click(function(){  
            $(".tabs li").removeClass("tabs_hover");  
            $(this).addClass("tabs_hover");    
            return false;//防止页面跳转  
        });  
    });  
});  

//这是在线留言