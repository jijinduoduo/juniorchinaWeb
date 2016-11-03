<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	
<link rel="stylesheet" href="/juniorchina_web/Public/Home/css/style.css" />
<link rel="stylesheet" type="text/css" href="/juniorchina_web/Public/Home/css/style.css" media="all">
<link rel="stylesheet" href="/juniorchina_web/Public/Home/css/tab.css"  />
<link rel="stylesheet" href="/juniorchina_web/Public/Home/css/about.css"  />
<link rel="stylesheet" href="/juniorchina_web/Public/Home/css/laydate2.css" type="text/css" id="LayDateSkin" charset="utf-8">
<link rel="stylesheet" href="/juniorchina_web/Public/Home/css/laydate.css" type="text/css" charset="utf-8">
<link rel="stylesheet" type="text/css" href="/juniorchina_web/Public/Home/css/kkpager_orange.css" />
<link rel="stylesheet" type="text/css" href="/juniorchina_web/Public/Home/css/sskkpager.css" />
<link rel="stylesheet" type="text/css" href="/juniorchina_web/Public/Home/css/mkkpager.css" />
<script type="text/javascript" src="/juniorchina_web/Public/Home/js/jquery.min.js"></script>
<script type="text/javascript" src="/juniorchina_web/Public/Home/js/tab.js"></script>
<script type="text/javascript" src="/juniorchina_web/Public/Home/js/jquery1101.js"></script>
<script type="text/javascript" src="/juniorchina_web/Public/Home/js/highcharts.js"></script>
<script type="text/javascript" src="/juniorchina_web/Public/Home/js/trend_chart.js"></script>
<script type="text/javascript" src="/juniorchina_web/Public/Home/js/laydate2.js" charset="utf-8"></script>
<script type="text/javascript" src="/juniorchina_web/Public/Home/js/laydate.js" charset="utf-8"></script>
<script type="text/javascript" src="/juniorchina_web/Public/Home/js/reg_mail.js"></script>
<script type="text/javascript" src="/juniorchina_web/Public/Home/js/amcharts/swfobject.js"></script>
<script type="text/javascript" src="/juniorchina_web/Public/Home/js/amcharts/amcharts.js"></script>
<script type="text/javascript" src="/juniorchina_web/Public/Home/js/amcharts/amfallback.js"></script>
<script type="text/javascript" src="/juniorchina_web/Public/Home/js/jquery.pagination.js"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
<script type="text/javascript" src="/juniorchina_web/Public/Home/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/juniorchina_web/Public/Home/js/kkpager.min.js"></script>
<script type="text/javascript" src="/juniorchina_web/Public/Home/js/sskkpager.min.js"></script>
<script type="text/javascript" src="/juniorchina_web/Public/Home/js/mkkpager.min.js"></script>



	
 <!--[if lte IE 7]>
<link rel="stylesheet" href="/juniorchina_web/Public/Home/css/ie7.css" />

 <![endif]-->
 
<!--[if IE 6]>
<link rel="stylesheet" href="/juniorchina_web/Public/Home/css/ie6.css" />
 <![endif]-->
</head>
<body background="#000000">
	<!-- 头部 -->
	
	<header class="zj_header" >
		<!--导航栏-->

<div class="zj_header">
	  <div class="zj_logo">
			<a href="<?php echo U('Index/index');?>"><img src="/juniorchina_web/Public/Home/images/zj_logo.png" /></a>
	  </div>
	   <div class="url">
		<ul>
		<li><a href="<?php echo U('Custom/custom');?>">客户服务</a></li>
		<li><a href="<?php echo U('About/about');?>">关于尊嘉</a></li>
		<li><a href="<?php echo U('News/news');?>">新闻咨询</a></li>
		<li><a href="<?php echo U('Funds/funds');?>" class="fund_hover">基金产品</a></li>
		<li><a href="<?php echo U('Index/index');?>" class="zj_home">首页</a></li>


		</ul>
		</div>	
</div>
    </header>

	<!-- /头部 -->
	
	<!-- 主体 -->
	
	
<div class="zj_fundbody">

<script type="text/javascript">
window.onload=function()
{
    $.ajax({
             type: "GET",
             url: "<?php echo U("question");?>",
            
             dataType: "json",	
             success: function(data){
             
                         $('#question').empty();   //清空process里面的所有内容
                         var html =''; 
                             $.each(data, function(commentIndex, comment){
                               html += '' + data['content']                                      
                                         + '';
                                  }); 
                         $('#question').html(html);
                      }
             });
}
//问题
$(function(){   	 
    $('#question_t').click(function(){
 
          $.ajax({
             type: "GET",
             url: "<?php echo U("question");?>",
            
             dataType: "json",	
             success: function(data){
             
                         $('#question').empty();   //清空process里面的所有内容
                         var html =''; 
                             $.each(data, function(commentIndex, comment){
                               html += '' + data['content']                                      
                                         + '';
                                  }); 
                         $('#question').html(html);
                      }
             });
         });
});

//联系方式
$(function(){   	 
    $('#tel_t').click(function(){
 
         $.ajax({
             type: "GET",
             url: "<?php echo U("tel");?>",         
             dataType: "json",	
             success: function(data){
             
                         $('#tel').empty();   //清空process里面的所有内容
                         var html =''; 
                             $.each(data, function(commentIndex, comment){
                               html += '' + data['content1']                                        
                                         + '';
                                  }); 
                         $('#tel').html(html);
                      }
             });
              map();
         });
});
//在线留言
$(function(){   	 
    $('#message_t').click(function(){
   
         $.ajax({
             type: "GET",
             url: "<?php echo U("message");?>",            
             dataType: "json",	
             success: function(data){
             
                         $('#message').empty();   //清空process里面的所有内容
                         var html =''; 
                             $.each(data, function(commentIndex, comment){
                               html += '' + data['content']                                        
                                         + '';
                                  }); 
                         $('#message').html(html);
                      }
             });
         
         });
         
         
});
//招贤纳士
$(function(){   	 
    $('#recruit_t').click(function(){
   
         $.ajax({
             type: "GET",
             url: "<?php echo U("recruit");?>",            
             dataType: "json",	
             success: function(data){
             
                         $('#recruit').empty();   //清空process里面的所有内容
                         var html =''; 
                             $.each(data, function(commentIndex, comment){
                               html += '' + data['content']                                        
                                         + '';
                                  }); 
                         $('#recruit').html(html);
                      }
             });
         
         });
         
         
});
//地图
function map(){
	
         $.ajax({
             type: "GET",
             url: "<?php echo U("map");?>",            
             dataType: "json",	
             success: function(data){
             
                         $('#map').empty();   //清空process里面的所有内容
                         var html =''; 
                             $.each(data, function(commentIndex, comment){
                               html += '' + data['content2']                                        
                                         + '';
                                  }); 
                         $('#map').html(html);
                      }
             });
}      



</script>

<div id="tabbox">
	<!--	
		新闻咨询的下拉列表
	-->
    <ul class="tabs" id="tabs">
      	<li><a  class="Left_font_size"  rel="1" id="question_t"  >常见问题</a></li>
		<li><a  class="Left_font_size" rel="2" id="tel_t" >联系方式</a></li>
		<li><a  class="Left_font_size" rel="3" id="message_t" >在线留言</a></li>
		<li><a  class="Left_font_size" rel="3" id="recruit_t" >招贤纳士</a></li>
		
    </ul>
 
<!--子页面-->
<ul class="tab_conbox" id="tab_conbox">
    <!--问题页面-->
        <li class="tab_con" style="display: list-item;">
           		
			  <div id="question">
			  		
			  </div>
        </li>
        
      <li class="tab_con" style="display: none;">
              <div id="tel">            	
              	
              </div> 
              <div class="map" id="map">

              </div>

        </li>
       
     <li class="tab_con" style="display: none;">
              <div id="message">            	
              	
              </div> 
            
        </li>
       
      <li class="tab_con" style="display: none;">
              <div id="recruit">            	
              	
              </div> 
            
        </li>
        
      
        
        
        
        
     </ul>
   </div>
</div>		  

	<!-- /主体 -->

	<!-- 底部 -->
	
	
	<header class="zj_footer" >
		
		
    <!-- 底部
    ================================================== -->
    <footer class="zj_footer">
   <div class="zj_footer">
<p>Copyright &copy; Junior China Capital Management Co.Ltd.All Rights Reserved</p>
     </div>
    </footer>

    </footer>

	<!-- /底部 -->
</body>
</html>