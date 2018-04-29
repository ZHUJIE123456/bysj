<?php 
	
	
	/**
	* 类名：CartAction
	* 功能：显示购物车状态
	*/
	class CartAction extends Action
	{
		public function cart() 
		{
			R('Base/header');
			R('Base/footer');

			$data = M("goods");
			$tdata = $data->limit(10,17)->select();
			$this->assign("tdata",$tdata);
			$this->display();
		}
	}