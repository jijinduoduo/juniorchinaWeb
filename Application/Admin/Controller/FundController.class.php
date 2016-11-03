<?php
	namespace Admin\Controller;
	use Think\Controller;
	class FundController extends Controller
	{
		public function funddata()
		{
			$Model= M('Fund');
			$v="";
			if (!empty($_POST['content1'])) {
         	$id=$_POST["title"];
         	$v=stripslashes($_POST['content1']);
			$fund['id']=$id;
			$fund['basic_info']=$v;
			$Model->save($fund);
			echo "<script language='JavaScript'> location.replace(location.href);</script>";	
			}
			else
			{
			$info=$Model->where('id=1')->select();
			$this->assign('info',$info);
			}
			$this->display();
		}
		
		
		public function order()
		{
			$Model= M('Fund');
			$v="";
			if (!empty($_POST['content1'])) {
         	$id=$_POST["title"];
         	$v=stripslashes($_POST['content1']);
			$fund['id']=$id;
			$fund['subscription_process']=$v;
			$Model->save($fund);
			echo "<script language='JavaScript'> location.replace(location.href);</script>";	
			}
			else
			{
			$info=$Model->where('id=1')->select();
			$this->assign('info',$info);
			}
			$this->display();
		}
	}
