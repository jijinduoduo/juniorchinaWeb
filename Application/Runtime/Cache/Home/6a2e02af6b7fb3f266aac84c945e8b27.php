<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	
<link rel="stylesheet" href="/juniorchina_web/Public/Home/css/style.css" />
<link rel="stylesheet" type="text/css" href="/juniorchina_web/Public/Home/css/style.css" media="all">
<link rel="stylesheet" href="/juniorchina_web/Public/Home/css/tab.css"  />
<link rel="stylesheet" href="/juniorchina_web/Public/Home/css/about.css"  />
<script type="text/javascript" src="/juniorchina_web/Public/Home/js/jquery.min.js"></script>
<script type="text/javascript" src="/juniorchina_web/Public/Home/js/tab.js"></script>
<script type="text/javascript" src="/juniorchina_web/Public/Home/js/jquery1101.js"></script>
<script type="text/javascript" src="/juniorchina_web/Public/Home/js/highcharts.js"></script>
<script type="text/javascript" src="/juniorchina_web/Public/Home/js/trend_chart.js"></script>

	
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
		<li><a href="<?php echo U('Funds/funds');?>">基金产品</a></li>
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
  alert("222");
    $.ajax({
             type: "GET",
             url: "<?php echo U("attention");?>",
             data: {"funds_id_q":$("#funds_id").val()},
             dataType: "json",	
             success: function(data){
             
                         $('#attention').empty();   //清空process里面的所有内容
                         var html =''; 
                             $.each(data.content, function(commentIndex, comment){
                               html += '' + comment['online_booking_info']                                        
                                         + '';
                                  }); 
                         $('#attention').html(html);
                         
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
$(function(){   	 
    $('#net_product_t').click(function(){
 
         $.ajax({
             type: "GET",
             url: "<?php echo U("net_product");?>",
             data: {funds_id_q:$("#funds_id").val()},
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
         });
});
//基金资料

$(function(){   	 
    $('#fund_info_t').click(function(){

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
         });
});


</script>



<div id="tabbox">
    <ul class="tabs" id="tabs">	
    	
      	<li><a   rel="4" id="fund_info_t">基金资料</a></li>
		<li><a   rel="2" id="fund_performance_t" >基金业绩</a></li>
		<li><a   rel="3" id="net_product_t">产品净值</a></li>
		<li><a   rel="1" id="attention_t">认购流程</a></li>
	
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
        <li class="tab_con" style="display: none;">
           		
			  <div id="fund_info"></div>
        </li>
    <!--基金业绩-->  
        <li class="tab_con" style="display: none;">
        		
        	
              <div id="fund_performance"></div>
        </li>
    <!--产品净值-->
        <li class="tab_con" style="display: none;">
        	起始日期：<select id="begin">
               <option value="1">a</option>
               <option value="2">b</option>
               <option value="3">c</option>
                      </select>
                          终止日期：<select id="over">
               <option value="1">a</option>
               <option value="2">b</option>
               <option value="3">c</option>
                      </select>
        	<table  class="table_con_t"   cellspacing="0px" style="border-collapse:collapse" >
        		<tr>
        			<th>净值日期</th>
        			<th>单位净值<span style="font-size:10px">（元）</span></th>
        			<th>周涨跌<span style="font-size:10px">（%）</span></th>
        		</tr><tr>
        		
        		
        		</tr>
        		
        		 	</table>
              
        		<div id="net_product"  class="table_con"  cellspacing="0px" style="border-collapse:collapse" ></div>
       
        </li>
    <!--认购流程-->
 <li class="tab_con" style="display: list-item;">
          <div class="buy_info" >
          	<p class="attention">重要提示</p>
               <div id="attention" class="a">
               	
               </div>
              	           
              		<div class="agree">
              		<a href="<?php echo U(order);?>"><p class="agree1">同意</p></a>  
              		 <a href="/juniorchina_web/index.php/Home/Fund/funddata?funds_id=<?php echo ($funds_id); ?>" ><p class="agree2">不同意</p></a>  
              </div>
              
            </div>  
        </li>
        
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