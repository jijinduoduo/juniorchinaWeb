<?php
	/**
	 * 基金产品的页面的控制器
	 */
	namespace Home\Controller;
	use Think\Controller;
	
	class CustomController extends Controller
	{
		/*
		 *建立一个主方法 
		 */
		public function custom()
		{
			  		
       		
			$this->display();
		}
		/*
		 *建立一个问题方法 
		 */
		public function question()
		{
			$custom  = M('question_answer');
			$this->comment_data = $custom->where("question_type='常见问题'")->select();	
			$data['content']= $this->fetch('custom/question');	
			$this->ajaxReturn($data);
		}
		
		/*
		 *建立一个联系我们方法 
		 */
		public function tel()
		{
			$tel  = M('customer_service');
			$this->comment_data = $tel->where()->select();	
			$data['content1']= $this->fetch('custom/tel');	
			$this->ajaxReturn($data);
		}
		/*
		 *建立一地图
		 */
		public function map()
		{
			
			$data['content2']= $this->fetch('custom/map');	
			$this->ajaxReturn($data);
		}
		/*
		 *建立一个在线留言方法 
		 */
		public function message()
		{
			$data['content']= $this->fetch('custom/message');	
			$this->ajaxReturn($data);
		}
		/*
		 *建立一个提交接收方法 
		 */
		public function me_submit()
		{
			 $fund = M('online_message');
			                $exp = "^[a-z'0-9]+([._-][a-z'0-9]+)*@([a-z0-9]+([._-][a-z0-9]+))+$";
                if(eregi($exp,$_POST['email'])){ //先用正则表达式验证email格式的有效性
                if(checkdnsrr(array_pop(explode("@",$_POST['email'])),"MX")){//再用checkdnsrr验证email的域名部分的有效性
			
               	
 	                  $data['customer_name']=$_POST['people'];
			          $data['customer_phone']=$_POST['tel'];
			          $data['customer_email']=$_POST['email'];				
			          $data['content']=$_POST['textarea'];								
			
			if($fund->add($data))
				{
					$this->success('<script>alert("留言已提交，感谢您的支持"); history.back();</script>');
				}
				else
				{
					$this->error('<script>alert("留言失败"); history.back();</script>');
				}
			
	       return true;
               }else{
	               $this->error('<script>alert("留言失败,没有这个邮箱"); history.back();</script>');
                   return false;

               }
                    }else{
	                $this->error('<script>alert("留言失败,没有这个邮箱"); history.back();</script>');
                   return false;
               }
			
			
	    	
				

		}
		/*
		 *建立一个招聘方法 
		 */
		public function recruit()
		{
			$this->display();
		}
		

	}
	