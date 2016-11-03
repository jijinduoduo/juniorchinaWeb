<?php
	namespace Admin\Controller;
	use Think\Controller;
	class UseController extends Controller
	{
		public function login()
			{
				$username = $_POST['username'];
				$password = $_POST['password'];
				 if($username!="" && $password!="")
					{
						$user = M('login');
						$name = $user->where("name='$username' && password='$passwprd'")->select();
						
				  		if($name>0)
				  		{
				  			$this->success('登入成功',U('Index/index'));
				  		}
						else
						{
							$this->error('login');
						}
						
					}
					$this->display();
				
			}
	}