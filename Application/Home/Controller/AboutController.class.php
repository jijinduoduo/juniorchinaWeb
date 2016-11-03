<?php
	/**
	 * 关于尊嘉的页面的控制器
	 */
	namespace Home\Controller;
	use Think\Controller;
	
	class AboutController extends Controller
	{
		public function about()
		{

			 $fund = M('about_juniorchina ');
			 $data = $fund->where('id=1')->select();
			 $idea = $fund->where('id=2')->select();
			 $score = $fund->where('id=3')->select();
			 $partner= $fund->where('id=4')->select();	
			 $this->assign('data',$data);
			 $this->assign('idea',$idea);
			 $this->assign('score',$score);
			 $this->assign('partner',$partner);
			 $this->display();


		}
	}
