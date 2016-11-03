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


	  <div class="zj_fundsbody">
	  <div class="funds_classify">
	  	 <table  class="funds_con_1"  border="1px" cellspacing="0px" style="border-collapse:collapse" >
        		<tr>
        			<!--<a href="<?php echo U('Fund/funddata');?>"-->
        		    <th class="fund_name">产品名称</th>
        			<th class="fund_zhi">净值</th>
        			<th class="fund_sou">年化收益</th>
        			<th class="fund_lv">夏普比率</th>
        		</tr>
        	
        <!--支持输出查询结果中的部分数据，例如输出其中的第5～15条记录-->
         <?php if(is_array($funds_one)): $i = 0; $__LIST__ = $funds_one;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr id="funds_product1" > 
        	    <td>	<a href="/juniorchina_web/index.php/Home/Fund/funddata?funds_id=<?php echo ($vo["fund_id"]); ?>" ><?php echo ($vo["name"]); ?></a></td>
        		<td><a href="/juniorchina_web/index.php/Home/Fund/funddata?funds_id=<?php echo ($vo["fund_series_id"]); ?>" ><?php echo ($vo["share_value"]); ?></a></td>
        		<td></td>
        		<td></td>	
        	</tr><?php endforeach; endif; else: echo "$empty" ;endif; ?>			
        	
        
         </table>
         	  	 <table  class="funds_con_1"  border="1px" cellspacing="0px" style="border-collapse:collapse" >
        		<tr>
        			<!--<a href="<?php echo U('Fund/funddata');?>"-->
        		    <th class="fund_name">产品名称</th>
        			<th class="fund_zhi">净值</th>
        			<th class="fund_sou">年化收益</th>
        			<th class="fund_lv">夏普比率</th>
        		</tr>
        	
        <!--支持输出查询结果中的部分数据，例如输出其中的第5～15条记录-->
         <?php if(is_array($funds_two)): $i = 0; $__LIST__ = $funds_two;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr id="funds_product2" > 
        	    <td>	<a href="/juniorchina_web/index.php/Home/Fund/funddata?funds_id=<?php echo ($vo["fund_id"]); ?>" ><?php echo ($vo["name"]); ?></a></td>
        		<td><a href="/juniorchina_web/index.php/Home/Fund/funddata?funds_id=<?php echo ($vo["fund_id"]); ?>" ><?php echo ($vo["share_value"]); ?></a></td>
        		<td></td>
        		<td></td>
        	</tr><?php endforeach; endif; else: echo "$empty" ;endif; ?>			
        	
        
         </table>
         	  	 
         	  	 <table  class="funds_con_1"  border="1px" cellspacing="0px" style="border-collapse:collapse" >
        		<tr>
        			<!--<a href="<?php echo U('Fund/funddata');?>"-->
        		    <th class="fund_name">产品名称</th>
        			<th class="fund_zhi">净值</th>
        			<th class="fund_sou">年化收益</th>
        			<th class="fund_lv">夏普比率</th>
        		</tr>
        	
        <!--支持输出查询结果中的部分数据，例如输出其中的第5～15条记录-->
         <?php if(is_array($funds_three)): $i = 0; $__LIST__ = $funds_three;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr id="funds_product3" > 
        	    <td><a href="/juniorchina_web/index.php/Home/Fund/funddata?funds_id=<?php echo ($vo["fund_id"]); ?>" ><?php echo ($vo["name"]); ?></a></td>
        		<td><a href="/juniorchina_web/index.php/Home/Fund/funddata?funds_id=<?php echo ($vo["fund_id"]); ?>" ><?php echo ($vo["share_value"]); ?></a></td>
        		<td></td>
        		<td></td>
        	</tr><?php endforeach; endif; else: echo "$empty" ;endif; ?>
	  </div>
     </table>
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