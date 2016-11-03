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
	
	
	
	  <div class="zj_aboutbody">

	  	<div class="zj_about_logo">
	  		<img src="/juniorchina_web/Public/Home/images/about.png" />
	  		
	  	</div>
	  	<div class="zj_about">
	  	<div class="about1">
	  		<h3 class="about_title"><a>公司简介</a></h3>
	  		<p>
	  			<?php if(is_array($data)): foreach($data as $key=>$vo): ?><p><span id="info_id"> <?php echo ($vo["content"]); ?></span><?php endforeach; endif; ?>
	  		</p>
	  	</div>
 	
	  	<div class="about2">
	  		<h3 class="about_title"><a>投资理念</a></h3>
	  		<p>
	  			<?php if(is_array($idea)): foreach($idea as $key=>$vo): ?><p><span id="info_id"> <?php echo ($vo["content"]); ?></span><?php endforeach; endif; ?>
	  		</p>
	  	</div>
 		  	<div class="about3">
	  		<h3 class="about_title"><a>公司荣誉</a></h3>
	  		<p>
	  			<?php if(is_array($score)): foreach($score as $key=>$vo): ?><p><span id="info_id"> <?php echo ($vo["content"]); ?></span>
			 </p><?php endforeach; endif; ?>
	  		</p>
	  	</div>
 		  	<div class="about4">
	  		<h3 class="about_title"><a>合作伙伴</a></h3>
	  		<p>
	  			<?php if(is_array($partner)): foreach($partner as $key=>$vo): ?><span id="info_id"> <?php echo ($vo["content"]); ?></span><?php endforeach; endif; ?>
	  		</p>
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