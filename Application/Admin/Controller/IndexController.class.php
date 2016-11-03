<?php
	namespace Admin\Controller;
	use Think\Controller;
	
		class IndexController extends Controller
		{
			public function index()
			{
				
				/*if(!session('?login'))
				{
				 $this->redirect('Use/login');
				
				}*/
				
			
			$this->display();
			}
			
			
    		public function head()
    		{
    			$this->display();
   			}
    	
    		public function left()
    		{
    			$this->display();
		
    		}
    
    
    		public function right()
    		{
    			$data=date('Y-m-d h:i:s');
				$this->assign('data',$data);
    	 		$this->display();
    		}
			
	}
