<?php
	/**
	 * 基金产品的页面的控制器
	 */
	namespace Home\Controller;
	use Think\Controller;
	
	class FundController extends Controller
	{
		     public function funddata()
		{   
            $funds_id= I('get.funds_id'); 			
	        $this->assign('funds_id', $funds_id);
		    $this->display();
		}
		     public function fund_info()//基金资料
		{
                $funds_id_q= I('get.funds_id_q'); 					                  
				$fund = M('fund');
					
			    $data['content'] = $fund->where("id=$funds_id_q")->select();		
                $this->ajaxReturn($data);
				$this->display();                          
			
		}
		      public function fund_performance()//基金业绩
		{

                $funds_id_q= I('get.funds_id_q'); 	
	         	$fund = M('fund_value');
			    $this->comment_data1 = $fund->where("fund_id=$funds_id_q")->order('value_time desc,share_value ')->select();					
                $data['content1']= $this->fetch('fund/fund_performance');				
			    $this->ajaxReturn($data);	 
			
		}
			public function net_product()//产品净值
		{
				
                $funds_id_q= I('get.funds_id_q');
				$funds_begin= I('get.funds_begin');
				$funds_over= I('get.funds_over');
				$fund_page=I('get.fund_page');
				$fund = M('Fund_value');										
			    $this->comment_data = $fund->where("fund_id=$funds_id_q")->order('value_time desc,share_value ')->select();	
									
                $data['content']= $this->fetch('fund/net_product');									
			    $this->ajaxReturn($data);					
				               			
		}
					
		public function product_page()//产品净值分页---------------------页面
		{
				
                $funds_id_q= I('get.funds_id_q');
				$funds_begin= I('get.funds_begin');
				$funds_over= I('get.funds_over');
				$fund_page=I('get.fund_page');
				$fund = M('Fund_value');										
			   	$map['value_time'] = array(array('egt',$funds_begin),array('elt',$funds_over), 'and') ;	
				$map['fund_id']=$funds_id_q;
				$this->comment_data_page = $fund->where($map)->order('value_time desc,share_value ')->page("$fund_page,20")->select();
				$this->comment_data_sum= $fund->where($map)->order('value_time desc,share_value ')->select();						
                $data['content']= $this->fetch('fund/product_page');									
			    $this->ajaxReturn($data);					
				               			
		}
	              public function process()//认购流程
		{
	       
                
	           
	            $funds_id_q= I('get.funds_id_q'); 									                  
				$fund = M('fund');				
			    $this->comment_data = $fund->where("id=$funds_id_q")->select();	
				$data['content4']= $this->fetch('fund/process');			
                $this->ajaxReturn($data);  
				                          
			
		}

		//提示页面的控制器
		public function attention()
		{
				
				$funds_id_q= I('get.funds_id_q'); 									                  
				$fund = M('Fund');				
			    $this->comment_data = $fund->where("id=$funds_id_q")->select();	
				$data['content2']= $this->fetch('fund/attention');			
                $this->ajaxReturn($data);
			
				
		}
		//添加客户信息页面控制器
		public function order()
		{
				
				$funds_id_q= I('get.funds_id_q'); 									                  
				$fund = M('Fund');	
				$this->comment_data_id=$funds_id_q;			
			    $this->comment_data = $fund->where("id=$funds_id_q")->select();	
				$data['content3']= $this->fetch('fund/order');			
                $this->ajaxReturn($data);
		}
		//提交数据处理  插入数据方法
	public function submit()
		{
			 
                $fund = M('online_booking');	
                $exp = "^[a-z'0-9]+([._-][a-z'0-9]+)*@([a-z0-9]+([._-][a-z0-9]+))+$";
                if(eregi($exp,$_POST['email'])){ //先用正则表达式验证email格式的有效性
                if(checkdnsrr(array_pop(explode("@",$_POST['email'])),"MX")){//再用checkdnsrr验证email的域名部分的有效性

			$data['customer_type']=$_POST['fund_radio'];			
			$data['fund_id']=$_POST['prduce'];
			$data['booking_amount']=$_POST['money'];	
			$data['customer_name']=$_POST['people'];
			$data['customer_phone']=$_POST['tel'];
			$data['customer_fax']=$_POST['fax'];	
			$data['customer_email']=$_POST['email'];			
			$data['customer_firm']=$_POST['firm'];
			$data['customer_address']=$_POST['code'];	
			$data['customer_textarea']=$_POST['textarea'];						
			//$fund->create();
			if($fund->add($data))
				{
					$this->success('<script>alert("填写信息成功"); history.back();</script>');
				}
				else
				{
					$this->error('<script>alert("填写信息失败"); history.back();</script>');
				}

               }else{
	               $this->error('<script>alert("填写信息失败,没有这个邮箱"); history.back();</script>');
                   return false;

               }
                    }else{
	                $this->error('<script>alert("填写信息失败,没有这个邮箱"); history.back();</script>');
                   return false;
               }
			
			
		}
	}
	
?>
