<?php if (!defined('THINK_PATH')) exit();?>   <inclde file="Public/Home/js/reg_mail.js" />
   <div id="order">   
              <div id="pro">
               		<p class="sure_yuyue">认购预约</p>
               <form action="/juniorchina_web/index.php/Home/Fund/submit" method="post" enctype="multipart/form-data" name="myform" onsubmit="return check(this)">		
               <div class="ra">
               		<input type="radio" value="个人客户" name="fund_radio" checked="checked"/>个人客户
               		<input type="radio"  value="机构客户" name="fund_radio" />机构客户
               	</div>
               	<table class="client">
               	
               	<tr>
               		<td class="style">
               		预约产品
               		</td>
               		<td>
               		
               			<script> $("#pse").val("<?php  echo $comment_data_id; ?>");</script>
               			<select class="prduce" id='pse' name="prduce">
               			<option value="1">尊嘉新盈冲</option>
               			<option value="2">稳健增长</option>
               			<option value="3">尊嘉ALPH</option>
               			<option value="4">盈冲一号</option>
                     </select>
                    </td>
                </tr>
                
              <tr>
               	<td class="style">
               		预约金额
               	</td>
               		<td><input type="text" name="money" class="prduce"/><span class="bitian">*(必填)</span></td>
               </tr>
              <tr>
               	<td class="style">
               		联&nbsp;&nbsp;系&nbsp;&nbsp;人
               	 </td>
               		<td><input type="text" name="people" class="prduce"/><span class="bitian">*(必填)</span></td>
               </tr>
              <tr>
               	<td class="style">
               		联系电话</td>
               		<td><input type="text" name="tel"  class="prduce"/><span class="bitian">*(必填)</span></td>
              </tr>
               <tr>
               	<td class="style">
               		E-mail</td>
               		<td><input type="text" name="email" class="prduce"/><span class="bitian">*(必填)</span></td>
               		</tr>
               	<tr>
               		<td class="style">
               		联系传真</td>
               		<td><input type="text" name="fax" class="prduce"/><!--<span class="bitian">*(必填)</span>--></td> 
               	</tr>
               	<tr>
               	<td class="style">
               		公司名称</td>
               		<td><input type="text" name="firm" class="prduce"/></td>
               	</tr>
               <tr>
               	<td class="style">
               		联系地址</td>
               		<td><input type="text" name="code" class="prduce"/></td>
               		
               	</tr>
               	<tr>
               	<td class="style">
               		内&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;容</td>
               		<td><textarea clos="100" rows="10" name="textarea" class="textarea_order" class="prduce"></textarea></td>
               	</tr>
               	
               
          
              </table>
              <div class="submit_all">
               	<input class="submit" type="submit" value="提交"/>
				         
                <input class="submit2" type="reset" value="重写"/>
              </div>
              	</form>
              
             </div>

</div>