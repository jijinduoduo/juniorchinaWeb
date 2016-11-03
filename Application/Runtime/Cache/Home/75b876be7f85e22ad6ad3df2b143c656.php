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

<div id="tabbox">
	<h1></h1>
    <ul class="tabs" id="tabs">
      	<li><a   rel="1" onclick="fund_data()">基金资料</a></li>
		<li><a   rel="2"  onclick="fund_performance()" >基金业绩</a></li>
		<li><a   rel="3" onclick="net_product()">产品净值</a></li>
		<li><a   rel="4"  onclick="process()">认购流程</a></li>
		 
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
              <div id="pro">
             
               		<p class="p">认购预约</p>
               <form action="" method="post">		
               	<div class="client">
               		
               		<input type="radio"  name="fund_radio" checked="checked"/>个人客户
               		<input type="radio"   name="fund_radio" />机构客户
               	</div>
               	<div>
               		<div class="style">
               		预约产品
               		</div>
               		<select class="prduce">
               			<option value="1">a</option>
               			<option value="2">b</option>
               			<option value="3">c</option>
                     </select>
                </div>
                
              <div>
                <div class="style">
               		预约金额
               	</div>
               		<input type="text" name="money" class="prduce"/><span class="bitian">*(必填)</span>
               </div>
              <div>
               	<div class="style">
               		联系人
               	 </div>
               		<input type="text" name="people" class="prduce"/><span class="bitian">*(必填)</span>
               	</div>
               <div>
               		<div class="style">
               		联系电话</div><input type="text" name="tel"  class="prduce"/><span class="bitian">*(必填)</span>
               		</div>
               <div>
               		<div class="style">
               		联系传真</div><input type="text" name="fax" class="prduce"/><span class="bitian">*(必填)</span>
               		</div>
               	<div>
               		<div class="style">
               		E-mail</div><input type="text" name="email" class="prduce"/><span class="bitian">*(必填)</span> 
               		</div>
               	<div>
               	<div class="style">
               		公司名称</div><input type="text" name="firm" class="prduce"/>
               	</div>
               <div>
               <div class="style">
               		邮编</div><input type="text" name="code" class="prduce"/>
               	</div>
               	<div>
               	<div class="style">
               		内容</div><input type="textarea" class="prduce"/>
               	</div>
               	</div>
               
            	<div class="sub">
               	<input class="submit" type="submit" value="提交"/>
				              
              </div>
               <input class="submit" type="reset" value="重写"/>
               		</form>
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