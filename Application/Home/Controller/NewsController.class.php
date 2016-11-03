<?php
/*
 *新闻控制器页面 
 */
	
	namespace Home\Controller;
	use Think\Controller;
	class NewsController extends Controller {
    	public function news()
    	{
    		$news_id= I('get.news_id'); 			
	        $this->assign('news_id', $news_id);    		
       		$this->display();
  	  	}
		//公司公告
		public function company()
		{
		    $fund_page=I('get.fund_page');
			$news  = M(news);
			$this->comment_data = $news->where("news_type='公司公告'")->page("$fund_page,10")->order('news_time desc ')->select();
			$this->comment_data_sum= $news->where("news_type='公司公告'")->select();							
			$data['content']= $this->fetch('News/company');	
			$this->ajaxReturn($data);
			
			
		}
		//新闻报道
		public function new_report()
		{
			$fund_page=I('get.fund_page');
			$news  = M(news);
			$this->comment_data = $news->where("news_type='新闻报道'")->page("$fund_page,10")->order('news_time desc ')->select();	
			$this->comment_data_sum= $news->where("news_type='新闻报道'")->select();	
			$data['content']= $this->fetch('News/new_report');	
			$this->ajaxReturn($data);
		}
		
		//公司视点
		
		public function view()
		{
			$news  = M(news);
			$this->comment_data = $news->where("news_type='公司视点'")->page("$fund_page,10")->order('news_time desc ')->select();	
			$this->comment_data_sum= $news->where("news_type='公司视点'")->select();	
			$data['content']= $this->fetch('News/view');	
			$this->ajaxReturn($data);
		}
		//文章列表的方法
		public function  news_content()
		{
				 
	           $news_id_q= I('get.news_id_q'); 									                  
				$fund = M('news');				
			    $this->comment_data = $fund->where("id=$news_id_q")->select();	
				$data['content']= $this->fetch('news/news_content');			
                $this->ajaxReturn($data);
		}
		
}
