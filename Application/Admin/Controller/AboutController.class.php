<?php
	namespace Admin\Controller;
	use Think\Controller;
	class AboutController extends FundController
	{
		
		//公司简介方法
		public function profile()
		{
			$Model= M('About_juniorchina');
			$v="";
			if (!empty($_POST['content1'])) {
         	$id=$_POST["title"];
         	$v=stripslashes($_POST['content1']);
			$fund['id']=$id;
			$fund['content']=$v;
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
		//投资理念方法
		public function invest()
		{
			$Model= M('About_juniorchina');
			$v="";
			if (!empty($_POST['content1'])) {
         	$id=$_POST["title"];
         	$v=stripslashes($_POST['content1']);
			$fund['id']=$id;
			$fund['content']=$v;
			$Model->save($fund);
			echo "<script language='JavaScript'> location.replace(location.href);</script>";	
			}
			else
			{
			$info=$Model->where('id=2')->select();
			$this->assign('info',$info);
			}
			$this->display();
		}
		//公司荣誉方法
		public function honor()
		{
			$Model= M('About_juniorchina');
			$v="";
			if (!empty($_POST['content1'])) {
         	$id=$_POST["title"];
         	$v=stripslashes($_POST['content1']);
			$fund['id']=$id;
			$fund['content']=$v;
			$Model->save($fund);
			echo "<script language='JavaScript'> location.replace(location.href);</script>";	
			}
			else
			{
			$info=$Model->where('id=3')->select();
			$this->assign('info',$info);
			}
			$this->display();
		}
		//合作伙伴方法
		public function partner()
		{
			$Model= M('About_juniorchina');
			$v="";
			if (!empty($_POST['content1'])) {
         	$id=$_POST["title"];
         	$v=stripslashes($_POST['content1']);
			$fund['id']=$id;
			$fund['content']=$v;
			$Model->save($fund);
			echo "<script language='JavaScript'> location.replace(location.href);</script>";	
			}
			else
			{
			$info=$Model->where('id=4')->select();
			$this->assign('info',$info);
			}
			$this->display();
		}
	}