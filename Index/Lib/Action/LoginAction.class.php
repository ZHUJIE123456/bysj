<?php
	
	/**
	* 类名：LoginAction
	* 功能：实现登录以及登录需要的验证跳转操作
	*/
	class LoginAction extends Action{
		
		public function login(){

			if(empty($_SESSION['uid'])){
				R('Base/header');
				R('Base/footer');
				$this->display();
			}else{
				$this->error('您已成功登陆,无需再次登录','Index/index');
			}
		}

		/**
		 * 方法名：loginVerify
		 * 功能：登录验证
		 */
		function loginVerify(){

			$user = M('user');
			if($_POST['username']){
				$data = $user->where(array('username'=>$_POST['username'],'userpwd'=>md5($_POST['userpwd'])))->find();				
			}
			if($_GET['username']){
				$data = $user->where(array('username'=>$_GET['username'],'userpwd'=>md5($_GET['userpwd'])))->find();
			}

			if(!empty($data)){
                $_SESSION['is_store'] = $data['is_store'];

				/* 判断用户当前状态 */	
				if($data['ustatus'] == 1){
					/* 写入session */
					$_SESSION['uid'] = $data['id'];
					$_SESSION['Username'] = $data['username'];

					/* 将最新登录信息写入数据库 */
					$info = M('userinfo');
					$add['logintime'] = time();
					$add['loginip'] = $_SERVER['REMOTE_ADDR'];
					$info->where(array('uid'=>$data['id']))->save($add);
					
					// 跳转验证
					if($_GET['username']){
						
                        $this->ajaxReturn("success");
					}else{
						$this->success('验证成功','__APP__');							
					}	
				}elseif($data['ustatus'] == 2){
					$this->error('请先激活账号');
				}else{
					$this->error('您已被限制登录,永不开通');
				}

			}else{
				$this->error('验证失败');
			}
		}

		Public function verify(){
   			import("ORG.Util.Image");
    		Image::buildImageVerify(4,1);
		}



		/**
		 * 方法名：loginout
		 * 功能：用户退出通道
		 */
		function loginout(){

			/* 判断session是否存在（即是否登陆过） */
			if(!empty($_SESSION['uid']) && !empty($_SESSION['Username'])){
				unset($_SESSION['uid']);
				unset($_SESSION['Username']);
				$this->success('退出成功','__APP__');
			}else{
				$this->error('您还没有登录，请先登陆','__APP__/Login/login');
			}
			
		}
	}