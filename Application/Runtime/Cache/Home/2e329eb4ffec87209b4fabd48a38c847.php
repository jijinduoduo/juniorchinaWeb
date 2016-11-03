<?php if (!defined('THINK_PATH')) exit();?> <div id="custom_content">
 	<?php
 $sum = count($comment_data); for($i=0;$i<$sum;$i++) { echo $comment_data[$i]['answer']; } ?>
</div>