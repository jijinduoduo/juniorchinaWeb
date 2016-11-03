<?php if (!defined('THINK_PATH')) exit();?> <div id="question" class="question">
			  	   
	<?php
 $sum = count($comment_data); for($i=0;$i<$sum;$i++) { $custom_id=$comment_data[$i]['id']; ?> 
	<div class="custom_list" custom_id="<?php echo $custom_id;?>">
		
		
	<?php  echo '<h3>'.$custom_id.'、'.$comment_data[$i]['question'].'</h3><br /><span class="question_data">'.$comment_data[$i]['answer']."</span><br /><br />"; ?>
	</div>
	
	<?php
 } ?>	
	
 </div>