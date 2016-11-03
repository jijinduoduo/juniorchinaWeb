<?php if (!defined('THINK_PATH')) exit();?>      <?php
$sum = count($comment_data); ?>
<script type="text/javascript">
	
	 $("#sum_all").val("<?php echo $sum; ?>");
</script>
 <div id="company">
			  	   
	<?php
 $sum = count($comment_data); for($i=0;$i<$sum;$i++) { $news_id=$comment_data[$i]['id']; ?> 
	<div class="news_list" news_id="<?php echo $news_id;?>">
		
		
	<?php  echo $comment_data[$i]['title'].'<span class="new_data">'.$comment_data[$i]['news_time']."</span><br />"; ?>
	</div>
	
	<?php
 } $sum_all = count($comment_data_sum); echo '<br />'; $pagenumber=ceil($sum_all/10); ?>	
	
 </div>

<script type="text/javascript">
	 $("#pagenumber").val("<?php echo $pagenumber; ?>");
	 $("#sum_all").val("<?php echo $sum_all; ?>");
	
</script>
                         <!--日期筛选后所有记录-->
                     <input id="sum_all" value="" type="hidden"  />
                           <!--这是一共多少页数-->
                     <input id="pagenumber" value="" type="hidden"  />
                            	  <!--当前页为：-->
                     <input  value="1" id="page" type="hidden"/> 
 
<div style="width:800px;margin:0 auto;">
<div id="kkpager"></div>
</div>
<script type="text/javascript">
function getParameter(name) { 
	var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)"); 
	var r = window.location.search.substr(1).match(reg); 
	if (r!=null) return unescape(r[2]); return null;
}

//init

$(function(){
	var totalPage = $("#pagenumber").val();	//总页码
	var totalRecords = $("#sum_all").val();//总数据条数
	var pageNo = getParameter($("#page").val()); //当前页码
	if(!pageNo){
		pageNo = 1;
	}
	//生成分页
	//有些参数是可选的，比如lang，若不传有默认值
	kkpager.generPageHtml({
        //当前页码
		pno : pageNo,
		//总页码
		total : totalPage,
		//总数据条数
		totalRecords : totalRecords,
		mode : 'click',//默认值是link，可选link或者click
		click : function(n){
					 
                $("#page").val(n);  //给页码 赋值  
                company_t();//ajax调用
               
			    this.selectPage(n);
			return false;
		}
		
		,lang				: {
			firstPageText			: '首页',
			firstPageTipText		: '首页',
			lastPageText			: '尾页',
			lastPageTipText			: '尾页',
			prePageText				: '上一页',
			prePageTipText			: '上一页',
			nextPageText			: '下一页',
			nextPageTipText			: '下一页',
			totalPageBeforeText		: '共',
			totalPageAfterText		: '页',
			currPageBeforeText		: '第',
			currPageAfterText		: '页',
			totalInfoSplitStr		: '/',
			totalRecordsBeforeText	: '共',
			totalRecordsAfterText	: '条数据',
			gopageBeforeText		: '',
			gopageButtonOkText		: '确定',
			gopageAfterText			: '页',
			buttonTipBeforeText		: '第',
			buttonTipAfterText		: '页'
           

		}
	});
});


</script>


<script type="text/javascript">
$(function(){
	$('.news_list').click(function(){
 
	
	var news_id = $(this).attr('news_id');
         $.ajax({
             type: "GET",
             url: "<?php echo U("news_content");?>",                     
             data: {"news_id_q":news_id},          
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

         });

});
</script>