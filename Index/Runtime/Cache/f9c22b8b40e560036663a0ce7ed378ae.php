<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="noIE" lang="en-US"><!--<![endif]-->
<html>
<head>
	<title><?php echo ($head["shoptitle"]); ?></title>
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
	
	<!-- 特定页面的 css 文件 -->
	<link rel="stylesheet" href="__PUBLIC__/index/css/owl.carousel.css">
	<link rel="stylesheet" href="__PUBLIC__/index/css/owl.theme.css">
	<link rel="stylesheet" href="__PUBLIC__/index/css/flexslider.css">
	<!-- // 特定页面的 css 文件 -->
	
	<!-- 响应式 css 文件 -->
	<link rel="stylesheet" href="__PUBLIC__/index/css/responsive.css">
	<!-- // 响应式 css 文件 -->
</head>
<body class="home">	
<!-- PAGE WRAPPER 页面封装 -->
<div id="page-wrapper">
<!-- 引入页眉文件 -->
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
	<!-- HOMEPAGE SLIDER 主页上部滑动块(轮播) -->
	<div id="home-slider">
		<div class="flexslider">
			<ul class="slides">
				<!-- THE FIRST SLIDE 第一张滑动图片 -->
				<li>
					<!-- THE MAIN IMAGE IN THE SLIDE 主图像幻灯片 -->
					<img src="__PUBLIC__/index/rev-slider/img/slides/Street-Fashion.jpg" alt="" />
				</li>
				<!-- THE THREE SLIDE 第三章滑动图片 -->
				<li>
					<!-- THE MAIN IMAGE IN THE SLIDE 主图像幻灯片 -->
					<img src="__PUBLIC__/index/rev-slider/img/slides/3303349658_cfaebb811f_o.jpg" alt="" />
				</li>
			</ul>
		</div>
	</div>
	<!-- // HOMEPAGE SLIDER 主页上部滑动块(轮播) -->
	
	<!-- SITE MAIN CONTENT 站点主要内容-->
	<main id="main-content" role="main">
		<!-- NEW ARRIVAL PRODUCTS 新品上市 -->
		<section class="section new-arrivals visible-items-5">
			<div class="container">
				<div class="row">
					<header class="section-header clearfix col-sm-offset-3 col-sm-6">
						<h3 class="section-title">新品上架</h3>
					</header>
					
					<div class="clearfix"></div>
					
					<!-- BEGIN CAROUSEL 开始旋转木马 -->
					<div id="new-arrivals-products" class="add-cart" data-product=".product" data-thumbnail=".entry-media .thumb" data-title=".entry-title > a" data-url=".entry-title > a" data-price=".entry-price > .price">	
						<div class="owl-controls clickable outside">
							<div class="owl-buttons">
								<div class="owl-prev"><i class="iconfont-angle-left"></i></div>
								
								<div class="owl-next"><i class="iconfont-angle-right"></i></div>
							</div>
						</div>
						
						<div class="owl-carousel owl-theme" data-visible-items="5" data-navigation="true" data-lazyload="true">
							<!-- 新品上架部分遍历开始 -->
							<?php if(is_array($zdata)): foreach($zdata as $key=>$vo): ?><div class="product" data-product-id="<?php echo ($vo["id"]); ?>">
								<div class="entry-media">
									<img data-src="__PUBLIC__/Uploads/goods/<?php echo ($vo["pic"]); ?>" alt="" class="lazyOwl thumb"/>
									<div class="hover">
										<a href="__APP__/Products/product/id/<?php echo ($vo["id"]); ?>" class="entry-url"></a>
									</div>
								</div>
								<div class="entry-main">
									<h5 class="entry-title">
										<a href="__PUBLIC__/index/#"><?php echo ($vo["gname"]); ?></a>
									</h5>
									<div class="entry-price">
										<strong class="accent-color price">￥<?php echo ($vo["price"]); ?></strong>
									</div>
								</div>
							</div><?php endforeach; endif; ?>
							<!-- 新品上架部分遍历结束-->
						</div>
						
					</div>
					<!-- // END CAROUSEL 旋转木马结束 -->
					
				</div>
			</div>
		</section>
		<!-- // NEW ARRIVAL PRODUCTS 新品上市 -->
			
	</main>
	<!-- // SITE MAIN CONTENT 网站主要内容 -->

<!-- 引入页脚文件 -->
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
<!-- // PAGE WRAPPER 页面封装 -->
</body>
</html>
<script>
	jQuery(function($) {
		var $slider = $('#home-slider > .flexslider');
		$slider.find('.flex-caption').each(function() {
			var $this = $(this);
			var configs = {
				left: $this.data('x'),
				top: $this.data('y'),
				speed: $this.data('speed') + 'ms',
				delay: $this.data('start') + 'ms'
			};
			if ( configs.left == 'center' && $this.width() !== 0 ) 
			{
				configs.left = ( $slider.width() - $this.width() ) / 2;
			}
			if ( configs.top == 'center' && $this.height() !== 0 ) 
			{
				configs.top = ( $slider.height() - $this.height() ) / 2;
			}
			
			$this.data('positions', configs);
			
			$this.css({
				'left': configs.left + 'px',
				'top': configs.top + 'px',
				'animation-duration': configs.speed,
				'animation-delay': configs.delay
			});
		});
		
		$(window).on('resize', function() {
			var wW = $(window).width(),
				zoom = ( wW >= 1170 ) ? 1 : wW / 1349;
			$('.flex-caption.gfc').css('zoom', zoom);
		});
		$(window).trigger('resize');
		
		
		
		$slider.imagesLoaded(function() {
			$slider.flexslider({
				animation: 'slide',
				easing: 'easeInQuad',
				slideshow: false,
				nextText: '<i class="iconfont-angle-right"></i>',
				prevText: '<i class="iconfont-angle-left"></i>',
				start: function() {
					flex_fix_pos(1);
				},
				before: function(slider) {
					// initial caption animation for next show
					$slider.find('.slides li .animation-done').each(function() {
						$(this).removeClass('animation-done');
						var animation = $(this).attr('data-animation');
						$(this).removeClass(animation);
					});
					
					flex_fix_pos(slider.animatingTo + 1);
				},
				after: function() {
					// run caption animation
					$slider.find('.flex-active-slide .animated').each(function() {
						var animation = $(this).attr('data-animation');
						$(this).addClass('animation-done').addClass(animation);
					});
				}
			});
		});
		
		
		function flex_fix_pos(i) {
			$slider.find('.slides > li:eq(' + i + ') .gfc').each(function() {
				var $this = $(this),
					pos = $(this).data('positions');
					
				if ( pos.left == 'center' )
				{
					pos.left = ( $slider.width() - $this.width() ) / 2;
					$this.css('left', pos.left + 'px');
					$this.data('positions', pos);
				}
				if ( pos.top == 'center' )
				{
					pos.top = ( $slider.height() - $this.height() ) / 2;
					$this.css('left', pos.top + 'px');
					$this.data('positions', pos);
				}
			});
		}
	});
</script>		
<!-- Essential Javascripts 基本的 js 文件 -->
<script src="__PUBLIC__/index/js/minified.js"></script>
<!-- // Essential Javascripts 基本的 js 文件 -->

<!-- Particular Page Javascripts 特定页面的 javascripts -->
<script src="__PUBLIC__/index/js/owl.carousel.js"></script>
<script src="__PUBLIC__/index/js/jquery.flexslider-min.js"></script>
<!-- // Particular Page Javascripts 特定页面的 javascripts -->