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
             url: "<?php echo U("company");?>",
             data: {fund_page:$("#page").val()},
             dataType: "json",	
             success: function(data){
             
                         $('#company').empty();   //清空process里面的所有内容
                         var html =''; 
                             $.each(data, function(commentIndex, comment){
                               html += '' + data['content']                                      
                                         + '';
                                  }); 
                         $('#company').html(html);
                      }
             });
}
//尊嘉公告
function company_t(){
 
          $.ajax({
             type: "GET",
             url: "<?php echo U("company");?>",
             data: {fund_page:$("#page").val()},
             dataType: "json",	
             success: function(data){
                         $('#company').empty();  
                         $('#new_report').empty();   //清空process里面的所有内容
                          $('#view').empty();
                         var html =''; 
                             $.each(data, function(commentIndex, comment){
                               html += '' + data['content']                                      
                                         + '';
                                  }); 
                         $('#company').html(html);
                      }
             });
}

//新闻报道
function  new_report_t(){
         $.ajax({
             type: "GET",
             url: "/juniorchina_web/index.php/Home/news/new_report.html?fund_page=1", 
              data: {fund_page:$("#page").val()},
             dataType: "json",	
             success: function(data){
                        $('#company').empty();  
                         $('#new_report').empty();   //清空process里面的所有内容
                          $('#view').empty();
                         var html =''; 
                             $.each(data, function(commentIndex, comment){
                               html += '' + data['content']                                        
                                         + '';
                                  }); 
                         $('#new_report').html(html);
                      }
             });
}

//公司视点
function  view_t(){
         $.ajax({
             type: "GET",
               url: "/juniorchina_web/index.php/Home/news/view.html?fund_page=1", 
             data: {fund_page:$("#page").val()},
             dataType: "json",	
             success: function(data){
             
                          $('#company').empty();  
                         $('#new_report').empty();   //清空process里面的所有内容
                          $('#view').empty();
                         var html =''; 
                             $.each(data, function(commentIndex, comment){
                               html += '' + data['content']                                        
                                         + '';
                                  }); 
                         $('#view').html(html);
                      }
             });
         }
          
</script>

<div id="tabbox">
	<!--	
		新闻咨询的下拉列表
	-->
    <ul class="tabs" id="tabs">
      	<li><a  class="Left_font_size" rel="1" id="company_t" onclick="company_t()">尊嘉公告</a></li>
		<li><a  class="Left_font_size" rel="1" id="new_report_t" onclick="new_report_t()">新闻报道</a></li>
		<li><a  class="Left_font_size" rel="1" id="view_t" onclick="view_t()">公司视点</a></li>
		
    </ul>
    <!--
    	新闻资讯logo
    -->
    <div class="zj_news_logo">
			<img src="/juniorchina_web/Public/Home/images/new.png" />
	  </div>

<!--子页面-->
<ul class="tab_conbox" id="tab_conbox">
    <!--公司公告-->
        <li class="tab_con" style="display: list-item;">
           		
			  <div id="company">
			  		
			  </div>
			 
        </li>
       
   <!--新闻报道--> 
        <li class="tab_con" style="display: none;">
              <div id="new_report">
             
              </div>
        </li>
  <!--公司视点--> 
        <li class="tab_con" style="display: none;">
              <div id="view">
              	
              </div>              
        </li>
   <!--内容的页面-->
        <li class="tab_con" style="display: none;">
              <div id="news_content">
              	
              	
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