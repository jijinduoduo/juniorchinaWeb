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
	
	
		<div class="body">
	  <div class="zj_fundbody">
  			<!-- //ajax代码基金资料-->
<script type="text/javascript">
 window.onload=function(){
 
    $.ajax({
             type: "GET",
             url: "<?php echo U("fund_info");?>",
             data: {"funds_id_q":$("#funds_id").val()},
             dataType: "json",	
             success: function(data){
             
                         $('#fund_info').empty();   //清空process里面的所有内容
                         var html =''; 
                             $.each(data.content, function(commentIndex, comment){
                               html += '' + comment['basic_info']                                        
                                         + '';
                                  }); 
                         $('#fund_info').html(html);
                      }
             });
	 }
  //基金业绩
$(function(){   	 
    $('#fund_performance_t').click(function(){
 
         $.ajax({
             type: "GET",
             url: "<?php echo U("fund_performance");?>",
             data: {funds_id_q:$("#funds_id").val()},
             dataType: "json",	
             success: function(data){
             
                         $('#fund_performance').empty();   //清空process里面的所有内容
                         var html =''; 
                               $.each(data, function(commentIndex, comment){
                               html += '' + data['content1']                                     
                                         + '';
                                  }); 
                         $('#fund_performance').html(html);
                      }
             });
         });
});
//基金净值
function net_product_t(){
	
         $.ajax({
             type: "GET",
             url: "<?php echo U("net_product");?>",
             data: {funds_id_q:$("#funds_id").val(),funds_begin:$("#begin").val(),funds_over:$("#over").val(),fund_page:$(".fund_page").val()},
             dataType: "json",	
             success: function(data){             
                         $('#net_product').empty();   //清空process里面的所有内容
                         var html =''; 
                               $.each(data, function(commentIndex, comment){
                               html += '' + data['content']                                        
                                         + '';
                                  }); 
                         $('#net_product').html(html);
                      }      
             });

         setTimeout(product_page, 1000);//自动分页开启
         $("#btn2").hide();//上一页隐藏
         $("#dianf").hide();//上一页隐藏
}
  	 //基金净值分页----------------------页面	

function product_page(){
	
         $.ajax({
             type: "GET",
             url: "<?php echo U("product_page");?>",
             data: {funds_id_q:$("#funds_id").val(),funds_begin:$("#begin").val(),funds_over:$("#over").val(),fund_page:$("#page").val()},
             dataType: "json",	
             success: function(data){             
                         $('#product_in').empty();   //清空process里面的所有内容
                         var html =''; 
                               $.each(data, function(commentIndex, comment){
                               html += '' + data['content']                                        
                                         + '';
                                  }); 
                         $('#product_in').html(html);
                      }
             });
          
}
 //认购流程
function process(){
         $.ajax({
             type: "GET",
             url: "<?php echo U("process");?>",
             data: {"funds_id_q":$("#funds_id").val()},
             dataType: "json",	
             success: function(data){
             
                         $('#process').empty();   //清空process里面的所有内容
                         var html =''; 
                             $.each(data, function(commentIndex, comment){
                               html += '' + data['content4']                                        
                                         + '';
                                  }); 
                         $('#process').html(html);
                      }
             });

}
//提示页面

 function tongyi(){

         $.ajax({
             type: "GET",
             url: "<?php echo U("attention");?>",
             data: {"funds_id_q":$("#funds_id").val()},
             dataType: "json",	
             success: function(data){
             
                         $('#process').empty();   //清空process里面的所有内容
                         var html =''; 
                             $.each(data, function(commentIndex, comment){
                               html += '' + data['content2']                                         
                                         + '';
                                  }); 
                         $('#process').html(html);
                      }
             });

}
 
//填写信息
 function order(){

         $.ajax({
             type: "GET",
             url: "<?php echo U("order");?>",
             data: {"funds_id_q":$("#funds_id").val()},
             dataType: "json",	
             success: function(data){        
                         $('#process').empty();   //清空process里面的所有内容
                         var html =''; 
                             $.each(data, function(commentIndex, comment){
                               html += '' + data['content3']                                         
                                         + '';
                                  }); 
                         $('#process').html(html);
                      }
             });

}
 
  //认购流程
function process_t(){

         $.ajax({
             type: "GET",
             url: "<?php echo U("process");?>",
             data: {"funds_id_q":$("#funds_id").val()},
             dataType: "json",	
             success: function(data){
             
                         $('#process').empty()
                        
                         var html =''; 
                             $.each(data, function(commentIndex, comment){
                               html += '' + data['content4']                                         
                                         + '';
                                  }); 
                         $('#process').html(html);
                      }
             });

}
                $('.fund_hover').addClass("hover"); 
 	
</script>



<div id="tabbox">
    <ul class="tabs" id="tabs">
      	<li><a   rel="1" id="fund_info_t" class="Left_font_size">基金资料</a></li>
		<li><a   rel="2"  id="fund_performance_t" class="Left_font_size">基金业绩</a></li>
		<li><a   rel="3" onclick="net_product_t()" class="Left_font_size">产品净值</a></li>
		<li><a   rel="4"  onclick="process()" class="Left_font_size">认购流程</a></li>
	
		
		<!--id隐藏域-->
		<input type="hidden" value="<?php echo ($funds_id); ?>" id="funds_id"/>
		
    </ul>
    <!--
    	产品logo
    -->
    <div class="zj_fundlogo">
			<img src="/juniorchina_web/Public/Home/images/zj_ying.png" />
	  </div>
    <ul class="tab_conbox" id="tab_conbox">
    <!--基金资料-->
        <li class="tab_con" style="display: list-item;">
           		
			  <div id="fund_info"></div>
        </li>
    <!--基金业绩-->  
        <li class="tab_con" style="display: none;">
        		
        	
              <div id="fund_performance"></div>
        </li>
    <!--产品净值-->
        <li class="tab_con" style="display: none;">
        	<!--产品净值日期-->
        <div class="fund_date_all">
                                          起始日期：<input type="text"   id="begin" onchange="product_page()"  class="laydate-icon">
                &nbsp; &nbsp;  
                                          终止日期：<input type="text" id="over" onclick="laydate()" onchange="product_page()" class="laydate-icon">
               &nbsp;   &nbsp;  
                     <input type="button" onclick="product_page()" value="确定" class="date_sure"/>
<script type="text/javascript">
!function(){
	laydate.skin('molv');//切换皮肤，请查看skins下面皮肤库	
	laydate({
         elem: '#begin'
     })
}();
</script>

                  </div>
         		  <div id="net_product"  class="table_con"  cellspacing="0px" style="border-collapse:collapse" ></div>
                 <!--分页div-->
                  <div class="paging">
      
                  </div>
             
        </li>
    <!--认购流程-->
        <li class="tab_con" style="display: none;">
    
              <div id="process"></div>
                        
            	
         
        </li>
        
       <!--提示页面-->
     
       		
       		
       <!--填写信息-->
       
        
    </ul>
    
 <!-- <?php $var = $_GET['funds_id']; ?>-->
		
   </div>
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