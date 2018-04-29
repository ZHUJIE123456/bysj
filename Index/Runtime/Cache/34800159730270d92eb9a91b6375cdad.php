<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<head>
	<title>购物车</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!-- Bootstrap不支持IE的兼容模式，此处使IE浏览器运行最新的渲染模式 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- 响应式布局开启视窗控制 -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- 页面信息 -->
	<meta name="keywords" content="">
	<meta name="description" content="">
	
	
	<!-- bootstarp css 文件引入 -->
	<link rel="stylesheet" href="__PUBLIC__/index/css/bootstrap.css">
	<link rel="stylesheet" href="__PUBLIC__/index/css/bootstrap-theme.css">
	<!-- // bootstrap css 文件引入 -->

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
	
	<!-- 挂载 stickUp 顶部悬浮 js 插件 -->
	<script src="__PUBLIC__/index/js/stickUp.min.js"></script>
	<!-- // 挂载 stickUp 顶部悬浮 js 插件 -->
	
	<!-- 特定页面 css -->
	<link rel="stylesheet" href="__PUBLIC__/index/css/innerpage.css">
	<link rel="stylesheet" href="__PUBLIC__/index/css/owl.carousel.css">
	<link rel="stylesheet" href="__PUBLIC__/index/css/owl.theme.css">
	<!-- // 特定页面 css -->

	<!-- 响应式 css 文件 -->
	<link rel="stylesheet" href="__PUBLIC__/index/css/responsive.css">
	<!-- // 响应式 css 文件 -->
</head>
<body>
			
	<!-- PAGE WRAPPER -->
<div id="page-wrapper">

	<!-- 站点头部 -->
	<!-- SITE HEADER 站点页眉 -->
<header>
<div id="site-header" class="push-up" role="banner">
	<!-- MAIN HEADER 头部主要部分 -->
	<div class="main-header-wrapper">
		<div class="container">
			<div class="main-header">
				<!-- CURRENCY 用户菜单 -->
				<div class="actions">
					<!-- USER RELATED MENU 用户相关菜单 -->
					<nav id="tiny-menu" class="clearfix">
						<ul class="user-menu" >
							<?php if(empty($_SESSION['Username'])): ?><!-- 登陆成功后此处隐藏并显示用户名，点击可进入用户中心 -->
								<li><a blank-"_blank" href="__APP__/Login/login" style="font-size:13px;">登录</a></li>
							<?php else: ?>
								<li><a blank-"_blank" href="__APP__/Personal/center"><?php echo (session('Username')); ?></a></li><?php endif; ?>
							<!-- 登陆成功后此处隐藏 -->
							<li><a href="__APP__/Register/register" style="font-size:13px;">注册会员</a></li>

							<!-- 清除cookie -->
							<?php if(!empty($_SESSION['Username'])): ?><li><a href="__APP__/Login/loginout" style="font-size:13px;">退出</a></li><?php endif; ?>
						</ul>
					</nav>
					<!-- // USER RELATED MENU 用户相关菜单 -->
				</div>
				<!-- // CURRENCY  用户菜单 -->
				<!-- SITE LOGO 站点 logo -->
				<div class="logo-wrapper">
					<a href="__APP__" class="logo" title="<?php echo ($head["shoptitle"]); ?>">
						<img src="__PUBLIC__/Uploads/config/<?php echo ($head["logo"]); ?>" alt="<?php echo ($head["shoptitle"]); ?>" />
					</a>
				</div>
				<!-- // SITE LOGO 站点 logo -->
				<!-- SITE NAVIGATION MENU 网站导航菜单 -->
				<nav id="site-menu" role="navigation">
					<ul class="main-menu hidden-sm hidden-xs">
						<li class="active">
							<a href="__APP__">首页</a>
						</li>
						<li>
							<a href="__APP__/Products/products">商品列表</a>
						</li>
						<?php if(empty($_SESSION['Username'])): else: ?>
							<li class="dropdown">
								<!-- <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)"> -->
								<a href="__APP__/Personal/center">个人中心</a>
								<!-- <b class="caret"></b> 是否显示下拉条 -->
							</li><?php endif; ?>
						<li>
							<a href="__APP__/Cart/cart">购物车</a>
						</li>
						<li>
							<a href="__APP__/Checkout/checkout">结账</a>
						</li>
					</ul>
					
					<!-- MOBILE MENU 手机菜单 -->
						<div id="mobile-menu" class="dl-menuwrapper visible-xs visible-sm" style="z-index:10">
							<button class="dl-trigger"><i class="iconfont-reorder round-icon"></i></button>
							<ul class="dl-menu">
								<li class="active">
									<a href="__APP__">首页</a>
								</li>
						<li>
							<a href="__APP__/Products/products">商品列表</a>
						</li>
						<?php if(empty($_SESSION['Username'])): else: ?>
							<li class="dropdown">
								<!-- <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)"> -->
								<a href="__APP__/Personal/center">个人中心</a>
								<!-- <b class="caret"></b> 是否显示下拉条 -->
							</li><?php endif; ?>
						<li>
							<a href="__APP__/Cart/cart">购物车</a>
						</li>
						<li>
							<a href="__APP__/Checkout/checkout">结账</a>
						</li>
							</ul>
						</div>
					<!-- // MOBILE MENU 手机菜单 -->

				</nav>
				<!-- // SITE NAVIGATION MENU 网站导航菜单 -->
			</div>
		</div>
	</div>
	<!-- // MAIN HEADER 页眉主要部分 -->
</header>
<!-- // SITE HEADER 网站页眉-->
		<!-- BREADCRUMB 面包屑导航 -->
		<div class="breadcrumb-container">
			<div class="container">
				<div class="relative">
					<ul class="bc unstyled clearfix">
						<li><a href="#">首页</a></li>
						<li><a href="products.html" class="active">购物车</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- // BREADCRUMB 面包屑导航 -->
		
		<!-- SITE MAIN CONTENT 站点主要内容-->
		<main id="main-content" role="main">
				
			<section class="section">
				<div class="container">
					<!-- 商品信息列表 -->
					<table class="tbl-cart">
						<thead>
							<tr>
								<th>商品名</th>
								<th style="width: 15%;">单价</th>
								<th style="width: 15%;">数量</th>
								<th class="hidden-xs" style="width: 15%;">合计</th>
								<th class="hidden-xs" style="width: 10%;"></th>
							</tr>
						</thead>
						<tbody>
							<tr class="hide empty-cart">
								<td colspan="5" >
									您的购物车为空, 您可以去<a href="__APP__/Products/products">商品列表</a>找您喜欢的商品.
								</td>
							</tr>
						</tbody>
					</table>
					
					<div class="shopcart-total pull-right clearfix">
						<div class="cart-total text-bold m-b-lg clearfix">
							<span class="pull-left">共计:</span>
							<span class="pull-right">￥0.00</span>
						</div>
						<div class="text-center">
							<a class="btn btn-primary btn-round uppercase" href="__APP__/Checkout/checkout">继续购物</a>
							<a class="btn btn-round btn-default uppercase" href="__APP__/Checkout/checkout">进入结算中心</a>

						</div>
					</div>
				</div>
			</section>
		</main>
		<!-- // SITE MAIN CONTENT -->
		<!-- 站点页脚 -->
			<!-- SITE FOOTER 网站页脚 -->
<footer class="page-footer">
	
	<!-- WIDGET AREA 小部件区域 -->
	<div class="widgets">
	
		<!-- FIRST ROW 第一行 -->
		<div class="section">
			<div class="container">
				<div class="row">

					<div class="col-xs-12 col-sm-12 col-md-3">
						<section class="widget widget-menu">
							<h5 class="widget-title">联系方式</h5>
							<div class="widget-content">
								<ul class="menu iconed-list unstyled">
									<li>
										<div class="list-content"><?php echo ($foot["address"]); ?></div>
									</li>
									<li>
										<div class="list-content"><?php echo ($foot["cellphone"]); ?></div>
									</li>
									<li>
										<div class="list-content"><?php echo ($foot["aemail"]); ?></div>
									</li>
									<li>
										<div class="list-content"><?php echo ($foot["weibo"]); ?></div>
									</li>
								</ul>
							</div>
						</section>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4">
						<section class="widget widget-text">
							<h5 class="widget-title">技术支持</h5>
							<div class="widget-content">
								<p>浙江大学城市学院-陈杜劼</p>
								</p>
							</div>
						</section>
					</div>
					
					<div class="col-xs-12 col-sm-6 col-md-3">
						<section class="widget widget-text">
							<h5 class="widget-title">营业时间</h5>
							<div class="widget-content">
								<p>周一 - 周五 :-------------------------8:00 -- 22:00</p>
								<p>周六 - 周日 :-------------------------9:00 -- 24:00</p>
								<br/>
								<p>全年365天营业，节假日不休息，在线购物期待您的光临！</p>
							</div>
						</section>
					</div>
					
					<div class="space40 visible-sm clearfix"></div>
					
				</div>
			</div>
		</div>
		<!-- // FIRST ROW 第一行 -->
	</div>
</footer>
<!-- // SITE FOOTER 站点尾部 -->
		
</div>
<!-- // PAGE WRAPPER -->

<!-- Essential Javascripts 基本的 js 文件 -->
<script src="__PUBLIC__/index/js/minified.js"></script>
<!-- // Essential Javascripts 基本的 js 文件 -->

<!-- Particular Page Javascripts 特定页面 js 文件 -->
<script src="__PUBLIC__/index/js/products.js"></script>
<script src="__PUBLIC__/index/js/owl.carousel.js"></script>
<!-- // Particular Page Javascripts 特定页面 js 文件 -->
	
</body>
</html>