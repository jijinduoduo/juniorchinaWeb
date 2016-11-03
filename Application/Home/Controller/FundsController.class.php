<?php
	/**
	 * 基金产品总的页面的控制器
	 */
	namespace Home\Controller;
	use Think\Controller;
	
	class FundsController extends Controller
	{
		      public function funds()
		{
			
            $user = M('fund');	     			
			$funds_one = $user->join("fund_value on fund.id=fund_value.fund_id")->where("fund_series_id=1 ")->order('name asc,value_time asc')->getField('name,fund_series_id,fund_id,share_value');
			$funds_two = $user->join("fund_value on fund.id=fund_value.fund_id")->where("fund_series_id=2")->order('value_time asc')->getField('name,fund_series_id,fund_id,share_value');
			$funds_three= $user->join("fund_value on fund.id=fund_value.fund_id")->where("fund_series_id=3")->order('value_time asc')->getField('name,fund_series_id,fund_id,share_value');
		    $this -> assign('funds_one', $funds_one);
			$this -> assign('funds_two', $funds_two);
			$this -> assign('funds_three', $funds_three);
		    $this->display();
		}
			

	}
?>
