<?php if (!defined('THINK_PATH')) exit();?><div class="buy_info" >
	<p class="attention">重要提示</p>
        <div id="attention" class="attention_c">              
			<?php
 $sum = count($comment_data); for($i=0;$i<$sum;$i++) { echo $comment_data[$i]['online_booking_info']; } ?>
		</div>            	           
        <div class="agree">
             
            <a  onclick="order()" id="order_t"><span class="agree1">同意</span></a>
            <a onclick ="process_t()" id="process_t" ><span class="agree2">不同意</span></a>   
        	<input type="hidden" value="1" id="funds_id"/>
         </div>
</div>