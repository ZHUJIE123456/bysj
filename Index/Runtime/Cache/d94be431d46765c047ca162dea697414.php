<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<head>
	<title><?php echo ($gdata["gname"]); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!-- Bootstrap不支持IE的兼容模式，此处使IE浏览器运行最新的渲染模式 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- 响应式布局开启视窗控制 -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- 页面信息 -->
	<meta name="keywords" content="<?php echo ($head["keywords"]); ?>">
	<meta name="description" content="<?php echo ($head["description"]); ?>">
	
	<!-- Bootstrap 核心 css 文件-->
	<link rel="stylesheet" href="__PUBLIC__/index/dist/css/bootstrap.min.css">
	<!-- HTML5 支持性检测.js IE8 支持 HTML5 的元素和媒体查询 -->
	<!-- 警告: js文件不工作，通过以下方式查看源文件:// -->
	<!--[if lt IE 9]>
		<script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
		<script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	
	<!-- bootstrap css 文件引入 -->
	<link rel="stylesheet" href="__PUBLIC__/index/css/bootstrap.css">
	<link rel="stylesheet" href="__PUBLIC__/index/css/bootstrap-theme.css">
	<!-- // bootstrap css 文件引入 -->

	<!-- 一般 css 文件引入 -->
	<link rel="stylesheet" href="__PUBLIC__/index/css/minified.css">
	<!-- // 一般 css 文件引入 -->
	<script src="__PUBLIC__/js/jquery-1.8.3.js"></script>
	<!--[if IE 8]>
		<script src="__PUBLIC__/index/js/respond.min.js"></script>
		<script src="__PUBLIC__/index/js/selectivizr-min.js"></script>
	<![endif]-->
	
	<!-- 挂载 jquery.min.js (上线采用)到对象 window 下，若不成功直接加载 -->
	<script>window.jQuery || document.write('<script src="__PUBLIC__/index/js/jquery.min.js"><\/script>');</script>
	
	<!-- // 挂载 jquery.min.js (上线采用)到对象 window 下，若不成功直接加载 -->
	<script src="__PUBLIC__/index/js/modernizr.min.js"></script>
	
	<!-- 挂载bootstrap js 文件 -->
	<script src="__PUBLIC__/index/js/bootstrap.js"></script>
	<!-- // 挂载 bootstrap js 文件 -->
	
	<!-- 特定页面 css 文件 -->
	<link rel="stylesheet" href="__PUBLIC__/index/css/jquery.nouislider.css">
	<link rel="stylesheet" href="__PUBLIC__/index/css/owl.carousel.css">
	<link rel="stylesheet" href="__PUBLIC__/index/css/owl.theme.css">
	<link rel="stylesheet" href="__PUBLIC__/index/css/innerpage.css">
	<!-- // 特定页面 css 文件 -->
	
	<!-- 响应式 css 文件 -->
	<link rel="stylesheet" href="__PUBLIC__/index/css/responsive.css">
	<!-- // 响应式 css 文件 -->
</head>
<script>
	$(function(){
				$("#addcart").click(function(){
					var id = $("#goods_id").val();
					var num = $("#goods_num").val();
					var url = "<?php echo U('Products/cartcookie');?>";

					$.post(url,{id:id,num:num},function(data){
						if(data.status){
						  alert('加入成功');
						}
					  },'json')
				})
		})
</script>
<body class="product-single">
			
	<!-- PAGE WRAPPER 页面封装 -->
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
						<li><a href="__APP__/Index/index">首页</a></li>
						<li><a href="__APP__/Products/products">商品列表</a></li>
						<li class="active">商品详情</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- // BREADCRUMB 面包屑导航 -->
		
		<!-- SITE MAIN CONTENT 站点主要内容 -->
		<main id="main-content" role="main">
					
			<section class="section">
				<div class="container">
					<div class="row">
						<!-- PRODUCT PREVIEW 商品反馈 -->
						<div class="col-xs-12 col-sm-4">
							
							<div class="product-preview">
								<div class="big-image">
									<a href="__PUBLIC__/Uploads/goods/<?php echo ($gdata["pic"]); ?>" data-toggle="lightbox">
										<img src="__PUBLIC__/Uploads/goods/<?php echo ($gdata["pic"]); ?>" alt="" />
									</a>
								</div>
								<!-- 遍历输出商品缩略图 -->
								<ul class="thumbs unstyled clearfix">
									<li>
										<a href="__PUBLIC__/Uploads/goods/<?php echo ($gdata["pic"]); ?>">
											<img src="__PUBLIC__/Uploads/goods/<?php echo ($gdata["pic"]); ?>" alt="" />
										</a>
									</li>
									<?php if(is_array($dimgs)): foreach($dimgs as $key=>$vo): ?><li>
											<a href="__PUBLIC__/Uploads/goods/<?php echo ($vo["pic"]); ?>">
												<img src="__PUBLIC__/Uploads/goods/<?php echo ($vo["pic"]); ?>" alt="" />
											</a>
										</li><?php endforeach; endif; ?>
								</ul>
							</div>
							
						</div>
						<!-- // PRODUCT PREVIEW 商品反馈 -->
						<div class="space40 visible-xs"></div>
						<!-- PRODUCT DETAILS 商品详情 -->
						<form action="__APP__/Checkout/checkout/id/<?php echo ($gdata["id"]); ?>" method="post">
				
						<div class="col-xs-12 col-sm-8">
							<section class="product-details add-cart">
								<header class="entry-header">
									<h2 class="entry-title"> <?php echo ($gdata["gname"]); ?></h2>
								</header>
								<article class="entry-content">
									<figure>
										<span class="entry-price inline-middle">￥<?php echo ($gdata["price"]); ?></span>
										<!-- 商品评论信息显示，暂时屏蔽 SC -->
<!-- 										<div class="rate-bar inline-middle">
											<!-- 此处需改成直接显示评价的平均值 -->
											<!-- <input type="range" value="4.5" step="0.5" id="backing0" /> -->
											<!-- <div class="rateit" data-rateit-backingfld="#backing0" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div> -->
										<!-- </div> -->
										<!-- 评论人数显示 -->
										<!-- <span class="entry-review-count inline-middle"></span> -->
										
										<ul class="entry-meta unstyled">
											<?php if($gdata["mprice"] > 0): ?><li style="line-height: 26px;">
												<span class="key">原价:</span>
												<span class="value"><font style="text-decoration:line-through;">$<?php echo ($gdata["mprice"]); ?></font></span>
											</li><?php endif; ?>
											<li style="line-height: 26px;">
												<span class="key">商品货号:</span>
												<span class="value"><?php echo ($gdata["gnum"]); ?></span>
											</li>
											<li style="line-height: 26px;">
												<span class="key">已售出:</span>
												<span class="value">100</span>
											</li>
											<li style="line-height: 26px;">
												<span class="key">库存:</span>
												<span class="value"><?php echo ($gdata["gtotal"]); ?></span>
											</li>
											<li style="line-height: 6px">&nbsp;</li>
											<li style="line-height: 20px;">
												<span class="key">购买数量:</span>
											    <div class="qty-btn-group">
											        <button class="down" type="button">
											            <i class="iconfont-caret-down inline-middle"></i>
											        </button>
											        <input type="text" name="number" value="1" id="goods_num"></input>
											        <button class="up" type="button">
											            <i class="iconfont-caret-up inline-middle"></i>
											        </button>
											    </div>
											</li>
										</ul>

										<div class="clearfix"></div>

										<div class="row">
											<div class="clearfix"></div>
											<ul class="inline-li li-m-r-l m-t-lg">
												<li>
													<input type="hidden" id="goods_id" value="<?php echo ($gdata["id"]); ?>">
													<a href="" id="addcart" class="btn btn-default btn-lg btn-round">加入购物车</a>
												</li>
											</ul>
										</div>
									</figure>
								</article>
							</section>
						</div>
						</form>
						<!-- // PRODUCT DETAILS 商品详情 -->
					</div>
					<div class="m-t-lg">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#product-description" data-toggle="tab">商品描述</a></li>
							<li><a href="#product-reviews" data-toggle="tab">客户评价</a></li>
							
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade in active" id="product-description">
								<?php echo ($gdata["gdescription"]); ?>
							</div>

							<div class="tab-pane fade in" id="product-reviews">
								<div class="comments-list">
									<!-- 商品评论开始-->
									<table border="1" class="table table-bordered data-table dataTable" width="800">
										<?php if(is_array($cdata)): foreach($cdata as $key=>$vo): ?><tr>
									 			<td><img src="__PUBLIC__/Uploads/headpic/<?php echo ($vo["pic"]); ?>" width="40"/></td>
									 			<td><?php echo ($vo["user_name"]); ?></td>
									 			<td><strong>评价:</strong><?php echo ($vo["content"]); ?></td>
											 </tr><?php endforeach; endif; ?>
									</table>
									<!-- 商品评论结束-->
								</div>
								<form action="../../add_comment" method="get">
									<input type="hidden" value="<?php echo ($gdata["id"]); ?>" name="gid"/>
									<textarea name="content" style="height: 80px; width:300px;"></textarea> <br/>
									<input type="submit" value="提交" />
								</form>
							</div>

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
<!-- // PAGE WRAPPER 页面封装 -->

<!-- Essential Javascripts 基本的 js 文件 -->
<script src="__PUBLIC__/index/js/minified.js"></script>
<!-- // Essential Javascripts 基本的 js 文件 -->

<!-- Particular Page Javascripts 特定页面的 js 文件 -->
<script src="__PUBLIC__/index/js/jquery.nouislider.js"></script>
<script src="__PUBLIC__/index/js/owl.carousel.js"></script>
<script src="__PUBLIC__/index/js/products.js"></script>
<!-- // Particular Page Javascripts 特定页面的 js 文件 -->	
</body>
</html>