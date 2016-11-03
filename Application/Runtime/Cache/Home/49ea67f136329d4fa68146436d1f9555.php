<?php if (!defined('THINK_PATH')) exit();?>    <script>
       $.ajax({
             type: "GET",
             url: "<?php echo U("company");?>",
            
             dataType: "json",	
             success: function(data){
             
                         $('#company').empty();   //清空process里面的所有内容
                         var html =''; 
                             $.each(data, function(commentIndex, comment){
                               html += '' + data['content']                                      
                                         + '';
                                  }); 
                         $('#company').html(html);
                      }
             });
    </script>
      <div id="company">			  		
	  </div>