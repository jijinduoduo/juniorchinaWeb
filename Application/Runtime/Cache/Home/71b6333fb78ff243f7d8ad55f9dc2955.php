<?php if (!defined('THINK_PATH')) exit();?>     
     
     <?php
$sum = count($comment_data); ?>
<script type="text/javascript">
	 $("#begin").val("<?php echo $comment_data[$sum-1]['value_time']; ?>");
	 $("#over").val("<?php echo $comment_data[0]['value_time']; ?>");
	 $("#sum_all").val("<?php echo $sum; ?>");
</script>
           	<table  class="table_con_t"   cellspacing="0px" style="border-collapse:collapse" >
        		<tr>
        			<th>净值日期</th>
        			<th>单位净值<span style="font-size:10px">（元）</span></th>
        			<th>涨跌幅<span style="font-size:10px">（%）</span></th>
        		</tr>
        	</table>
      
 <div id="product_in">
 	 
<!--<?php
$sum = count($comment_data); echo '<table id="net_product"  class="table_con"  cellspacing="0px" style="border-collapse:collapse" >'; for($i=0;$i<$sum;$i++) { echo "<tr><td>".$comment_data[$i]['value_time']."</td>"; echo "<td>".$comment_data[$i]['share_value']."</td>"; echo "<td>".$comment_data[$i]['value_change']."</td></tr>"; } echo "</table>"; ?>//自动全局分页注释为关闭。不注释为开启-->
</div>