<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
	<title><?php echo ($head["shoptitle"]); ?>用户注册</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!-- Bootstrap不支持IE的兼容模式，此处使IE浏览器运行最新的渲染模式 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- 响应式布局开启视窗控制 -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- 页面信息 -->
	<meta name="keywords" content="<?php echo ($head["keywords"]); ?>">
	<meta name="description" content="<?php echo ($head["description"]); ?>">
	
	
	<!-- bootstarp css 文件引入 -->
	<link rel="stylesheet" href="__PUBLIC__/index/css/bootstrap.css">
	<link rel="stylesheet" href="__PUBLIC__/index/css/bootstrap-theme.css">
	<!-- // bootstrap css 文件引入 -->
	<!-- HTML5 支持性检测.js IE8 支持 HTML5 的元素和媒体查询 -->
	<!-- 警告: js文件不工作，通过以下方式查看源文件:// -->
	<!--[if lt IE 9]>
		<script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
		<script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

	<!-- 一般 css 文件引入 -->
	<link rel="stylesheet" href="__PUBLIC__/index/css/minified.css">
	<!-- // 一般 css 文件引入 -->

	<!--[if IE 8]>
		<script src="__PUBLIC__/index/js/respond.min.js"></script>
		<script src="__PUBLIC__/index/js/selectivizr-min.js"></script>
	<![endif]-->

	<!-- 挂载 jquery.min.js (上线采用)到对象 window 下，若不成功直接加载 -->
	<script>window.jQuery || document.write('<script src="__PUBLIC__/index/js/jquery.min.js"><\/script>');</script>
	<!-- // 挂载 jquery.min.js (上线采用)到对象 window 下，若不成功直接加载 -->
	
	<script src="__PUBLIC__/index/js/modernizr.min.js"></script>
	
	<!-- 挂载bootstrap js 文件 -->
	<script src="__PUBLIC__/index/js/bootstarp.js"></script>
	<!-- // 挂载 bootstarp js 文件 -->
	
	<!-- 响应式 css 文件 -->
	<link rel="stylesheet" href="__PUBLIC__/index/css/responsive.css">
	<!-- // 响应式 css 文件 -->
</head>
<body class="home">	
<!-- PAGE WRAPPER 页面封装 -->
<div id="page-wrapper">
	<header>
	<div id="site-header" class="push-up" role="banner" style="padding-top:15px;padding-bottom:20px;">
		<a href="__APP__" class="logo" title="<?php echo ($head["shoptitle"]); ?>">
			<img src="__PUBLIC__/Uploads/config/<?php echo ($head["logo"]); ?>" alt="<?php echo ($head["shoptitle"]); ?>" />
		</a>
	</div>
	</header>
		<!-- SITE MAIN CONTENT 站点主要内容 -->
		
		<main id="main-content" role="main">
			<div style="height:20px;width:100%;clear:both;"></div>
			<div class="row" style="background-size:70% auto;height:430px;border-top:5px solid white;border-bottom:5px solid white;">
				<div class="col-md-offset-8 col-md-4 col-xs-offset-2 col-xs-8">
					<form class="form-horizontal" role="form" action="__URL__/loginVerify" method="post">
					  	<div class="form-group" style="padding-top:80px;padding-bottom:6px;">
							<label for="username" class="col-xs-4 control-label">用户名</label>
							<div class="col-xs-7">
						 		<input type="text" class="form-control" id="username" name="username" placeholder="请输入用户名">
							</div>
					  	</div>
					  	<div class="form-group" style="padding-bottom:10px;">
							<label for="userpwd" class="col-xs-4 control-label">密码</label>
							<div class="col-xs-7">
						 		<input type="password" class="form-control" id="userpwd" name="userpwd" placeholder="请输入密码">
							</div>
					  	</div>
					  	<div class="form-group">
							<div class="col-xs-offset-4 col-xs-3">
						  		<button type="submit" class="btn btn-primary btn-sm">登录</button>
							</div>
					  	</div>
						<div class="form-group" style="padding-top:10px;">
							<label class="col-xs-2 control-label"></label>
							<div class="col-xs-6">
								<label class="control-label text-left">
									<a href="__APP__/Register/register">还没有帐号? 点击快速注册</a>
								</label>
							</div>
					  	</div>
					</form>
				</div>
			</div>
		</main>
</div>
<!-- // 页面封装 -->	
</body>
</html>
<script>
	// 验证码动态验证
	$(function(){
		$("form").bind("submit",function(event){
			// 取得需要检测对象的值	
	       	var stru  = $("#username").val()
	       	var strp  = $("#userpwd").val()

	       	// 判断不提交条件
	       	// 所有文本框不能为空、复选框必须被选中

	       	if(stru && strp){

	       	}
	      	else if(!stru)
	       	{
	       		alert("请输入用户名");
	       		// event.preventDefault();  //阻止默认行为 ( 表单提交 )
	       		return false;
	       	}
	       	else if(!strp)
	       	{
	       		alert("请输入密码");
	       		return false;
	       	}
		})
	})
</script>