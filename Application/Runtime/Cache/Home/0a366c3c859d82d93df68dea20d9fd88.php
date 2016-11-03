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
		<li><a href="<?php echo U('New/new');?>">新闻咨询</a></li>
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
  
  			<!-- //ajax代码段基金资料-->
<script type="text/javascript">
    window.onload=function(){
	 $("#fund_data").empty();
	 var ajax=new XMLHttpRequest();
	 ajax.open('GET','<?php echo U("fund_data");?>',true);
	 ajax.send();
	 ajax.onreadystatechange=function(){
	 if(ajax.readyState==4 &&ajax.status==200 ){
	 //document.getElementById('div').innerHTML=ajax.responseText;
	 ///////////////////////////
	 
	     var obj=eval(ajax.responseText);  
	  
	    for (var i=0; i<obj.length; i++){  	    	
	 $('#fund_data').append("<p><span>"+obj[i].v+"</span></p>");  
	 
	}
	 ////////////////////////
	 }
	 } 
	 }
</script>
  			<!-- //ajax代码段认购流程-->
<script type="text/javascript">

$(function(){
    $('#process_t').click(function(){
    	 
         $.ajax({
             type: "GET",
             url: "<?php echo U("process");?>",
             data: {funds_id:$("#funds_id").val()},
             dataType: "json",
             success: function(data){
                         $('#process').empty();   //清空process里面的所有内容
                         var html = ''; 
                         $.each(data, function(commentIndex, comment){
                               html += '<div class="comment"><h6>' + comment['id']
                                         + ':</h6><p class="para"' + comment['v']
                                         + '</p></div>';
                         });
                         $('#process').html(html);
                      }
         });
    });
});


</script>



<div id="tabbox">
	<h1></h1>
    <ul class="tabs" id="tabs">
      	<li><a   rel="1" onclick="fund_data()">基金资料</a></li>
		<li><a   rel="2"  onclick="fund_performance()" >基金业绩</a></li>
		<li><a   rel="3" onclick="net_product()">产品净值</a></li>
		<li><a   rel="4"  id="process_t">认购流程</a></li>
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
           <!--<?php if(is_array($data)): foreach($data as $key=>$vo): ?><p>{$vo.id}<span id="info_id"> {$vo.v}</span>
			 </p><?php endforeach; endif; ?>-->			
			 
			  <div id="fund_data"></div>
        </li>
    <!--基金业绩-->  
        <li class="tab_con" style="display: none;">
        		<div id="container" ></div>
        	
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
        			<th>当期净值<span style="font-size:10px">（元）</span></th>
        		</tr>
        		 	</table>
              
        		<table id="net_product"  class="table_con"  cellspacing="0px" style="border-collapse:collapse" ></table>
       
        </li>
    <!--认购流程-->
        <li class="tab_con" style="display: none;">
              <div id="process"></div>
              <div class="sure_process">
               <a href="#" ><img src="/juniorchina_web/Public/Home/images/sure_process.png"</a>
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