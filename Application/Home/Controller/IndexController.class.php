<?php
	/**
	 * 主页面的控制器
	 */
	namespace Home\Controller;
	use Think\Controller;
	class IndexController extends Controller {
    	public function index()
    	{
       		 $this->display();
  	  }
}