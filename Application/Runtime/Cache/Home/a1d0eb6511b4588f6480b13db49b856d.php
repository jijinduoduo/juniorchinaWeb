<?php if (!defined('THINK_PATH')) exit();?>          <div class="main1">
          	<div class="img_mess"><img src="/juniorchina_web/Public/Home/images/tel.png"></div>
                <div class="main2" >
                    <div class="main2_txt1">非常感谢您光临尊嘉资产官方网站！如果您有任何建议、意见、问题或者想说的话，欢迎您留言告诉我们！我们将在收到留言后，尽快回复！</div>
                    <div id="textarea_txt"><span class="word_most">最多可输入500字</span><strong id="sx">还可以输入</strong> <strong id="cc" style="display:none;">已超出</strong> <strong id="zs">500</strong> <strong> 字  </strong> </div>
                     <form    action="/juniorchina_web/index.php/Home/Custom/me_submit" method="post" enctype="multipart/form-data" name="myme" onsubmit="return check(this)">
					<textarea id="textarea2" name="textarea"></textarea>
                    <div class="main_img3"></div>
                    <table class="mess_info"  border="0" cellspacing="30" cellpadding="0">
                      <tr>
                        <td class="mess_k">姓名：</td>
                        <td colspan="2"><input  type="text" name="people"  class="mess_k2" /></td>
                      </tr>
                      <tr>
                        <td class="mess_k">电话：</td>
                        <td colspan="2"><input name="tel" type="text" class="mess_k2" /></td>
                       
                      </tr>
                      <tr>
                        <td class="mess_k">邮箱：</td>
                        <td colspan="2"><input name="email" type="text" class="mess_k2" /></td>
                      </tr>
                      <tr>
                        <td ></td>
                        <td colspan="2"><input  type="submit" class="me_submit"  value="提交"/></td>
                      </tr>
                    </table>
					</form>
                </div>
            </div>
<script>
	$("#textarea2").keyup(function(){
		var $max = 500;
		var $length = $("#textarea2").val().length;
		if ($length > $max){
			$("#sx").hide();
			$("#cc").show();
			$("#zs").text($length-$max);
		}
		else{
			$("#cc").hide();
			$("#sx").show();
			$("#zs").text($max-$length);
		}
	});
</script>