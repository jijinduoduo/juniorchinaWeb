<?php if (!defined('THINK_PATH')) exit();?> <div id="news_content" class="question2">
 	
 	<?php
 $sum = count($comment_data); for($i=0;$i<$sum;$i++) { echo '<h3 class="new_title">'.$comment_data[$i]['title'].'</h3>'; echo $comment_data[$i]['content']; } ?>
</div>