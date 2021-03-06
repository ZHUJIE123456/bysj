<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="noIE" lang="en-US"><!--<![endif]-->
<head>
	<title>个人中心</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!-- Bootstrap不支持IE的兼容模式，此处使IE浏览器运行最新的渲染模式 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- 响应式布局开启视窗控制 -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- 页面信息 -->
	<meta name="keywords" content="">
	<meta name="description" content="">
	
	
	<!-- bootstarp css 文件引入 -->
	<link rel="stylesheet" href="__PUBLIC__/index/css/bootstrap.css">
	<link rel="stylesheet" href="__PUBLIC__/index/css/bootstrap-theme.css">
	<!-- // bootstrap css 文件引入 -->

	<!-- 一般 css 文件引入 -->
	<link rel="stylesheet" href="__PUBLIC__/index/css/minified.css">
	 <!-- <link rel="stylesheet" type="text/css" href="__PUBLIC__/uploadify/uploadify.css"> -->
	<!-- // 一般 css 文件引入 -->

	<!--[if IE 8]>
		<script src="js/respond.min.js"></script>
		<script src="js/selectivizr-min.js"></script>
	<![endif]-->
	<!--
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	-->
	<!-- 挂载 jquery.min.js (上线采用)到对象 window 下，若不成功直接加载 -->
	<script>window.jQuery || document.write('<script src="__PUBLIC__/index/js/jquery.min.js"><\/script>');</script>
	<!-- // 挂载 jquery.min.js (上线采用)到对象 window 下，若不成功直接加载 -->
	
	<script src="__PUBLIC__/index/js/modernizr.min.js"></script>
	
	<!-- 挂载bootstrap js 文件 -->
	<script src="__PUBLIC__/index/js/bootstarp.js"></script>
	<!-- // 挂载 bootstarp js 文件 -->
	
	<!-- PARTICULAR PAGES CSS FILES 特定页面css文件 -->
	<link rel="stylesheet" href="__PUBLIC__/index/css/innerpage.css">
	<!-- // PARTICULAR PAGES CSS FILES 特定页面css文件 -->

	<!-- 响应式 css 文件 -->
	<link rel="stylesheet" href="__PUBLIC__/index/css/responsive.css">
	<!-- // 响应式 css 文件 -->
	
	<style type="text/css">
		#file_upload{
			position:relative;
			top:-50px;
			margin:0px auto;
			text-align:center;
			color:white;
			font-weight:bold;
		}
		#bg{
			width:100%;
			height:20px;
			background:black;
			filter:alpha(opacity=50);
			opacity:0.5;
			position:relative;
			top:-25px;
		}
		/* 格式化div使默认隐藏 */
		#person-safe, #person-footprint, #person-address, #person-goods, #person-order, #person-collect 
		{
			display: none;
		}
		
		/* 定义select 选择器，是背景颜色和页面背景色统一*/
		.select, .text {
				background:#EEE;
			}
		/* 定义file 控件格式，使垂直居中 */
		.file {
				display: block;
				padding-top: 4px;
			}
		/* 定义图片 选择器，使宽高固定 */
		.img40px {
			width: 40px;
			height: 40px;
			}
		.img60px {
			width: 60px;
			height: 60px;
		}
		.img80px {
			width: 80px;
			height: 80px;
		}
		/* 定义固定高度div */
		.h20px {
			height: 20px;
			}
		.h30px {
				height: 30px;
			}
		/* 定义error警示色 */
		.error {
				color: #F03 ;
			}
		/* 定义灰色背景色 */
		.back-grey {
				background: #F2F2F2;
			}
		/* 格式化所有padding和marign */
		.nopm {
				margin: 0;
				padding: 0
			}
		.nop {
			padding: 0;
		}
		.nom {
			margin: 0;
		}
		/* 重定义clearfix使具有高度 */
		.clearfix{
				height: 12px;
			}
		/* 重定义th标签 */
		th {
  			border-bottom: 2px solid #DDDDDD;
    		vertical-align: bottom;
			font-size: 14px;
			font-weight: 600;
		}
		/* 重新定义操作a链接 */
		.a-handle:link, .a-handle-visited, a-handle:hover, .a-handle:active, .a-handle {
				color: #00F;
			}
	</style>
	<script type="text/javascript" src="__PUBLIC__/uploadify/jquery.uploadify-3.1.min.js"></script>
	<script>
        function OpenDialog(sURL, iWidth, iHeight){
            var oDialog = window.open(sURL, "_EditorDialog", "width=" + iWidth.toString() + ",height=" + iHeight.toString() + ",resizable=no,left=0,top=0,scrollbars=no,status=no,titlebar=no,toolbar=no,menubar=no,location=no");
            oDialog.focus();
        }
	</script>
    	<script type="text/javascript">  
	   	$(function() {  
		        	$('#file_upload').uploadify({  
		            'swf'      : '__PUBLIC__/uploadify/uploadify.swf',  
		            'uploader' : '__PUBLIC__/uploadify/uploadify.php?uid=<?php echo (session('uid')); ?>',
		            'buttonText': '上传图片'  
		              
		            // Your options here  
		        	});  
	    	});  
  	</script>
  	<script type="text/javascript">
  		$(function(){
  			$('.upda').click(function(){
  				var id = this.id;
  				$.get("__APP__/Personal/addressFind/id/"+id, function(data){
  					
  					$("#xprovence").append("<option value='"+data.province+"'>"+data.province+"</option>")
  					$("#xcity").append('<option value="'+data.city+'">'+data.city+'</option>');
  					$("#xcounty").append('<option value="'+data.area+'">'+data.area+'</option>');
					$("#upostcode").val(data.postcode);
					$("#ustreet").val(data.street);
					$("#ureceiptName").val(data.receiver);
					$("#ucellPhone").val(data.tel);
					$("#uareaCode").val(data.mobile);

				},'json');

  			})
  		})
  	</script>
  	<script type="text/javascript">
  		$(function(){		
  			//地址省份province
			//获取市
			$("#province").change(function(){

				    var region_id = $(this).val();
				    var url = "__URL__/getcity/region_id/"+region_id;
					 $("#city").empty();
					 $("#area").empty();
				    var obj = $(this);
					 $.get(url,function(data){
		 				for(var i in data){
		 			
		 					$("#city").append('<option value="'+data[i].region_id+'">'+data[i].region_name+'</option>');
		 				}
							
					 },'json');
			})

			$("#city").change(function(){
				
				    var region_id = $(this).val();
				    var url = "__URL__/getarea/region_id/"+region_id;
				    var obj = $(this);
					 $.get(url,function(data){
		 				for(var i in data){
		 						
		 					$("#area").append('<option value="'+data[i].region_id+'">'+data[i].region_name+'</option>');
		 				}
							
					 },'json');
			})

			//地址省份province
			//获取市
			$("#sheng").change(function(){

				    var region_id = $(this).val();
				    var url = "__URL__/getcity/region_id/"+region_id;
					 $("#shi").empty();
					 $("#qu").empty();
				    var obj = $(this);
					 $.get(url,function(data){
					 				for(var i in data){
					 			
					 						$("#shi").append('<option value="'+data[i].region_id+'">'+data[i].region_name+'</option>');
					 				}
							
					 },'json');
			})

			$("#shi").change(function(){
				
				    var region_id = $(this).val();
				    var url = "__URL__/getarea/region_id/"+region_id;
				    var obj = $(this);
					 $.get(url,function(data){
					 				for(var i in data){
					 						
					 						$("#qu").append('<option value="'+data[i].region_id+'">'+data[i].region_name+'</option>');
					 				}
							
					 },'json');
			})
			//地址省份province
			//获取市
			$("#xprovence").change(function(){

				    var region_id = $(this).val();
				    var url = "__URL__/getcity/region_id/"+region_id;
					 $("#xcity").empty();
					 $("#xcounty").empty();
				    var obj = $(this);
					 $.get(url,function(data){
					 				for(var i in data){
					 			
					 						$("#xcity").append('<option value="'+data[i].region_name+'">'+data[i].region_name+'</option>');
					 				}
							
					 },'json');
			})

			$("#xcity").change(function(){
				
				    var region_id = $(this).val();
				    var url = "__URL__/getarea/region_id/"+region_id;
				    var obj = $(this);
					 $.get(url,function(data){
					 				for(var i in data){
					 						
					 						$("#xcounty").append('<option value="'+data[i].region_name+'">'+data[i].region_name+'</option>');
					 				}
							
					 },'json');
			})
	})
  	</script>
  	<script type="text/javascript">
  		$(function(){
  			$('#sendvi').click(function(){
  				var phone = $('#cellphones').val();
  				var verify = Math.floor(Math.random()*100000);

  				$.get("http://121.199.16.178/webservice/sms.php?method=Submit&account=cf_gx4852&password=123456&mobile="+phone+"&content=您的验证码是："+verify+"。请不要把验证码泄露给其他人。", function(msg){
					alert(msg);
				},'json');

				$.get("__APP__/Personal/phoneverify/verify/"+verify,function(){

				},'json')
  			})
  			$('#query').click(function(){
  				var verify = $("#verify").val();
  				$.get("__APP__/Personal/isVerify/verify/"+verify,function(date){
  					if(date == 'true'){
  						alert('验证成功');
  					}else{
  						alert('验证失败');
  					}
  				}
  			});
  		});
  	</script>
	<script>
	$(function(){
		$("#a-info").click(function(){
			$("#person-info").css("display", "block");
			$("#person-safe, #person-address, #person-goods, #person-footprint, #person-collect").css("display", "none");
		});
		$("#a-safe").click(function(){
			$("#person-safe").css("display", "block");
			$("#person-info, #person-address, #person-goods, #person-footprint, #person-collect").css("display", "none");
		});
		$("#a-address").click(function(){
			$("#person-address").css("display", "block");
			$("#person-info, #person-safe, #person-goods, #person-footprint, #person-collect").css("display", "none");
		});
		$("#a-goods").click(function(){
			$("#person-goods").css("display", "block");
			$("#person-info, #person-safe, #person-address, #person-footprint, #person-collect").css("display", "none");
		});
		$("#a-footprint").click(function(){
			$("#person-footprint").css("display", "block");
			$("#person-info, #person-safe, #person-address, #person-goods, #person-collect").css("display", "none");
		});
		$("#a-collect").click(function(){
			$("#person-collect").css("display", "block");
			$("#person-info, #person-safe, #person-address, #person-goods, #person-footprint").css("display", "none");
		});
	})
	</script>
</head>
<body>
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

		<!-- SITE MAIN CONTENT 站点主要内容 -->
		<main id="main-content" role="main">
		
			<div class="container">
				<div class="row">
					
					<div class="m-t-b clearfix">
						<!-- SIDEBAR 侧边栏 -->
						<aside class="col-xs-12 col-sm-4 col-md-3">
							<section class="side-section">
    <h3 class="uppercase text-bold"><span class="text-xs">个人中心</span></h3>
    <ul class="nav nav-tabs nav-stacked">
        <li><a href="__APP__/Personal/center">个人信息</a></li>
        <li><a id="a-safe">安全中心</a></li>
    <?php
 if($_SESSION['is_store'] == 1){ ?>
        <li><a href="__APP__/Uproduct/lists">产品管理</a></li>
        <li><a href="__APP__/Order/lists">卖出的商品管理</a></li>
    <?php
 }else{ ?>
        <li><a id="a-address">收货地址</a></li>
        <li><a id="a-goods">已买到的宝贝</a></li>
   <?php
 } ?>
    </ul>
</section>
						</aside>
						<section class="col-xs-12 col-sm-8 col-md-9">
							<div class="panel-group checkout person-info" id="person-info">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<!-- 注意href="#checkout-collapse1"和id="checkout-collapse1"须一致，不然toggle失效-->
											<a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse1">
											基本信息
											</a>
										</h4>
									</div>
									<div id="checkout-collapse1" class="panel-collapse">
										<div class="panel-body">
											<div class="h30px"></div>
											<form class="paymethod form-horizontal" role="form"  action="__URL__/saveinfo" method="post" name="form1" enctype="multipart/form-data">
												<div class="form-group">
													<label for="username" class="col-md-3 control-label">用户名</label>
													<div class="col-md-6">
													<input type="text" class="form-control" id="username" value="<?php echo ($data["user"]["username"]); ?>" disabled >
													</div>
												</div>
												<div class="clearfix"></div>
												<div class="form-group">
													<label class="col-md-3 control-label">性别</label>
													<div class="col-md-5">
														 <div class="col-md-3">
														 	<div class="form-group stylish-input">
																<input type="radio" name="sex" class="prettyCheckable m-r" data-label="男" value="1" <?php echo ($data["info"]["sexa"]); ?>/>
															</div>
														</div>
														<div class="col-md-3">
														 	<div class="form-group stylish-input">
																<input type="radio" name="sex" class="prettyCheckable m-r" data-label="女" value="2" <?php echo ($data["info"]["sexb"]); ?>/>
															</div>	
														</div>
														<div class="col-md-3">
														 	<div class="form-group stylish-input">
																<input type="radio" name="sex" class="prettyCheckable m-r" data-label="保密" value="3" <?php echo ($data["info"]["sexc"]); ?>/>
															</div>	
														</div>
													</div>
												</div>
												<div class="clearfix"></div>
												<div class="form-group">
													<label class="col-md-3 control-label">所在地</label>
													<div class="col-md-2">
														<select id="province" class="form-control select" name="province">
															<?php if(is_array($prodata)): foreach($prodata as $key=>$vo): ?><option value="<?php echo ($vo["region_id"]); ?>" <?php if($vo['region_name'] == $data['city'][0]): ?>selected<?php endif; ?>><?php echo ($vo["region_name"]); ?></option><?php endforeach; endif; ?>
														</select>
													</div>
													<div class="col-md-2">
														<select id="city" class="form-control select" name="city">
															<option value="<?php echo ($data["city"]["1"]); ?>"><?php echo ($data["city"]["1"]); ?></option>
														</select>
													</div>
													<div class="col-md-2">
														<select id="area" class="form-control select" name="county">
															<option value="<?php echo ($data["city"]["2"]); ?>"><?php echo ($data["city"]["2"]); ?></option>
														</select>
													</div>
												</div>
												<div class="clearfix"></div>
												<div class="form-group">
													<label class="col-md-3 control-label">生日</label>
													<div class="col-md-2">
														<select class="form-control select" name="year">
															<option>--请选择--</option>
															<?php $__FOR_START_14384__=1938;$__FOR_END_14384__=2014;for($i=$__FOR_START_14384__;$i < $__FOR_END_14384__;$i+=1){ ?><option value="<?php echo ($i); ?>" <?php if($data['bir'][0] == $i): ?>selected<?php endif; ?>><?php echo ($i); ?></option><?php } ?>
														</select>
													</div>
													<div class="col-md-2">
														<select class="form-control select" name="month">
															<option>--请选择--</option>
															<?php $__FOR_START_15529__=1;$__FOR_END_15529__=13;for($i=$__FOR_START_15529__;$i < $__FOR_END_15529__;$i+=1){ ?><option value="<?php echo ($i); ?>" <?php if($data['bir'][1] == $i): ?>selected<?php endif; ?>><?php echo ($i); ?></option><?php } ?>
														</select>
													</div>
													<div class="col-md-2">
														<select class="form-control select" name="day">
															<option>--请选择--</option>
															<?php $__FOR_START_558__=1;$__FOR_END_558__=31;for($i=$__FOR_START_558__;$i < $__FOR_END_558__;$i+=1){ ?><option value="<?php echo ($i); ?>" <?php if($data['bir'][2] == $i): ?>selected<?php endif; ?>><?php echo ($i); ?></option><?php } ?>
														</select>
													</div>
												</div>
												<div class="clearfix"></div>
												<div class="form-group">
													<label class="col-md-3 control-label">当前头像</label>
													<div class="col-md-2">
														<div class="controls">
															<img  id="df_img" src="__PUBLIC__/Uploads/headpic/<?php echo ($data["user"]["headpic"]); ?>" width="100" height="100" /><br />
															<input type="text" name="headpic"  value="<?php echo ($data["user"]["headpic"]); ?>"/>
															<a href="javaScript:OpenDialog('__APP__/../upfile.php?Result=headpic',460,180)">上传</a>
														</div>
													</div>
												</div>
												<div class="clearfix"></div>
												<div class="form-group">
													<label for="username" class="col-md-3 control-label">是否店铺</label>
													<div class="col-md-6">
														<input type="checkbox" name="is_store" id="is_store" value="1" <?php if($data['user']['is_store'] == 1): ?>checked<?php endif; ?> />
													</div>
												</div>
												<div class="form-group">
													<label for="username" class="col-md-3 control-label">店铺名称</label>
													<div class="col-md-6">
														<input type="text" class="form-control store_info" id="store_name" name="store_name" value="<?php echo ($data["user"]["store_name"]); ?>">
													</div>
												</div>
												<div class="form-group">
													<label for="username" class="col-md-3 control-label">电话</label>
													<div class="col-md-6">
														<input type="text" class="form-control store_info" id="store_tel" name="store_tel"  value="<?php echo ($data["user"]["store_tel"]); ?>">
													</div>
												</div>
												<div class="clearfix"></div>
												<div class="h30px"></div>
												<div class="form-group">
													<label class="col-md-offset-3 col-md-2">
														<input type="submit" class="btn btn-primary padder" value="提交修改">
													</label>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="panel-group checkout person-info" id="person-safe">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse2">
											修改密码
											</a>
										</h4>
									</div>
									<div id="checkout-collapse2" class="panel-collapse">
										<div class="panel-body">
											<div class="h30px"></div>
											<form class="paymethod form-horizontal" role="form" action="__URL__/saveuser" method="post" name="">
												<div class="form-group">
													<label for="userpwd" class="col-md-3 control-label">原密码</label>
													<div class="col-md-5">
														<input type="password" class="form-control text" id="userpwd" name="luserpwd">
													</div>
												</div>
												<div class="clearfix"></div>
												<div class="form-group">
													<label for="repeatUserpwd" class="col-md-3 control-label">新密码</label>
													<div class="col-md-5">
														<input type="password" class="form-control text" id="repeatUserpwd" name="userpwd">
													</div>
													<div class="col-md-3">
														<p class="error">两次密码不一致给出提示/密码错误给出提示</p>
													</div>
												</div>
												<div class="clearfix"></div>
												<div class="form-group">
													<label for="newUserpwd" class="col-md-3 control-label">重复密码</label>
													<div class="col-md-5">
														<input type="password" class="form-control text" id="newUserpwd" name="newUserpwd">
													</div>
												</div>
												<div class="clearfix h20px"></div>
												<div class="form-group">
													<label class="col-md-offset-3 col-md-2">
														<input type="submit" class="btn btn-primary padder" value="修改密码">
													</label>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse3">
											密保安全
											</a>
										</h4>
									</div>
									<div id="checkout-collapse3" class="panel-collapse collapse">
										<div class="panel-body">
											<div class="h30px">
												<p>此处信息关系帐户安全，一旦提交将不可更改，请慎重填写</p>
											</div>
											<div class="h30px"></div>
											<div class="clearfix"></div>
											<form class="paymethod form-horizontal" role="form" method="post" action="__URL__/saveinfo" enctype="multipart/form-data">
												<div class="form-group">
													<label for="realname" class="col-md-3 control-label">真实姓名</label>
													<div class="col-md-6">
														<input type="text" class="form-control text" id="realname" <?php echo ($data["ureal"]); ?> value="<?php echo (substr($data["info"]["realname"],0,3)); echo ($data["cname"]); ?>" 
														>
													</div>
													<div class="col-md-3">
														<p>真实姓名只能设置一次，提交生效后将不能更改，此提示只在用户未设置真实姓名时出现</p>
													</div>
												</div>
												<div class="clearfix"></div>
												<div class="form-group">
													<label for="idcard" class="col-md-3 control-label">身份证号</label>
													<div class="col-md-6">
														<input type="text" class="form-control text" id="idcard" <?php echo ($data["creal"]); ?> <?php echo ($data["idcn"]); ?> <?php if(!empty($data['info']['idcard'])): ?>value="<?php echo (substr($data["info"]["idcard"],0,14)); ?>****"<?php endif; ?>>
													</div>
													<div class="col-md-3">
														<p>身份证号只能设置一次，提交生效后将不能更改，此提示只在用户未设置身份证时出现</p>
													</div>
												</div>
												<div class="clearfix"></div>
												<div class="form-group">
													<label for="cellphone" class="col-md-3 control-label">手机号</label>
													<div class="col-md-4">
														<input type="text" class="form-control text" id="cellphones" name="cellphone" value="" 
														placeholder="若手机号已存在，此输入框直接变为禁用状态，只显示部分手机号信息，其他以*代替">
													</div>
													<div class="col-md-2">
														<input type="button" class="btn btn-primary pull-right" id="sendvi" value="发送验证码">
													</div>
													
												</div>
												<div class="form-group">
													<label for="cellphone" class="col-md-3 control-label">验证码</label>
													<div class="col-md-2">
														<input type="text" class="form-control text" id="verify" name="verify" value="" 
														placeholder="">
													</div>
													<div class="col-md-2">
														<input type="button" class="btn btn-primary pull-right" id="query" value="确认">
													</div>
												</div>
												<div class="clearfix"></div>
												<div class="h20px"></div>
												<div class="form-group">
													<label class="col-md-offset-3 col-md-2">
														<input type="submit" class="btn btn-primary padder" value="修改信息">
													</label>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="panel-group checkout" id="person-address">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse4">
												已保存的有效收货地址(最多10条)
											</a>
										</h4>
									</div>
									<div id="checkout-collapse4" class="panel-collapse">
										<div class="panel-body">
											<div class="table-responsive">
												<table class="table table-hover">
													<thead>
														<tr>
															<th>收货人</th>
															<th>所在地区</th>
															<th>街道地址</th>
															<th>邮编</th>
															<th>电话号码</th>
															<th>地址状态</th>
															<th>操作</th>
														</tr>
													</thead>
													<tbody>
														<?php if(is_array($data["address"])): foreach($data["address"] as $key=>$v): ?><tr>
															<td><?php echo ($v["receiver"]); ?></td>
															<td><?php echo ($v["province"]); echo ($v["city"]); echo ($v["area"]); ?></td>
															<td><?php echo ($v["street"]); ?></td>
															<td><?php echo ($v["postcode"]); ?></td>
															<td><?php echo ($v["tel"]); ?></td>
															<td>默认地址/不输出</td>
															<td>
																<a href="#checkout-collapse6" data-toggle="collapse" id="<?php echo ($v["id"]); ?>" class="a-handle upda">修改</a>
																&nbsp;&nbsp;|&nbsp;&nbsp;
																<a href="__URL__/addressDel/id/<?php echo ($v["id"]); ?>" class="a-handle">删除</a>
															</td>
														</tr><?php endforeach; endif; ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse5">
												新增收货地址
											</a>
										</h4>
									</div>
									<div id="checkout-collapse5" class="panel-collapse collapse">
										<div class="panel-body">
											<form class="paymethod form-horizontal" role="form" action="__URL__/addressAdd" name="" method="post">
												<div class="form-group">
													<label for="district" class="col-md-2 control-label">所在地区</label>
													<div class="col-md-3">
														<select class="form-control select" id="sheng" name="province">
															<?php if(is_array($prodata)): foreach($prodata as $key=>$vo): ?><option value="<?php echo ($vo["region_id"]); ?>"><?php echo ($vo["region_name"]); ?></option><?php endforeach; endif; ?>
														</select>
													</div>
													<div class="col-md-3">
														<select class="form-control select" id="shi" name="city"></select>
													</div>
													<div class="col-md-3">
														<select class="form-control select" id="qu" name="area"></select>
													</div>
												</div>
												<div class="clearfix"></div>
												<div class="form-group">
													<label for="postcode" class="col-md-2 control-label">邮编</label>
													<div class="col-md-6">
														<input type="text" class="form-control text" name="postcode" id="postcode">
													</div>
												</div>
												<div class="clearfix"></div>
												<div class="form-group">
													<label for="street" class="col-md-2 control-label">街道地址</label>
													<div class="col-md-7">
														<textarea id="street" class="form-control text" name="street" rows="3" placeholder="不需要重复填写省市，必须大于6个字符，小于100个字符"></textarea>
													</div>
												</div>
												<div class="clearfix"></div>
												<div class="form-group">
													<label for="receiptName" class="col-md-2 control-label">收货人姓名</label>
													<div class="col-md-7">
														<input type="text" id="receiptName" name="receiver" class="form-control text" placeholder="不能大于10个汉字">
													</div>
												</div>
												<div class="clearfix"></div>
												<div class="form-group">
													<label for="cellPhone" class="col-md-2 control-label">手机号码</label>
													<div class="col-md-7">
														<input type="text" id="cellPhone" name="tel" class="form-control text" placeholder="11位即可">
													</div>
												</div>
												<div class="clearfix"></div>
												<div class="form-group">
													<label for="fixPhone" class="col-md-2 control-label">电话号码</label>
													<div class="col-md-2">
														<input type="text" id="areaCode" name="areaCode" class="form-control text" placeholder="区号">
													</div>
													<div class="col-md-3">
														<input type="text" id="phoneNum" name="phoneNum" class="form-control text" placeholder="电话号码">
													</div>
													<div class="col-md-2">
														<input type="text" id="extenNum" name="extenNum" class="form-control text" placeholder="分机">
													</div>
												</div>
												<div class="clearfix"></div>
												<div class="form-group">
													<label  class="col-md-2 control-label">设为默认地址</label>
													<div class="col-md-3">
														<label class="checkbox-inline">
															<div class="form-group stylish-input">
																<input type="checkbox" name="isdefault" id="defaultAddress" class="prettyCheckable m-r" data-label="设为默认收货地址" value="1" />
															</div>
														</label>
													</div>
												</div>
												<div class="clearfix"></div>
												<div class="h20px"></div>
												<div class="form-group">
													<div class="col-md-offset-2 col-md-3">
														<label>
															<input type="submit" class="btn btn-primary" value="提交修改">
														</label>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse6">
												修改收货地址(此页面默认不显示包括菜单头，只有通过点击修改才显示)
											</a>
										</h4>
									</div>
									<div id="checkout-collapse6" class="panel-collapse collapse">
										<div class="panel-body">
											<form class="paymethod form-horizontal" role="form" action="" name="">
												<div class="form-group">
													<label for="district" class="col-md-2 control-label">所在地区</label>
													<div class="col-md-3">
														<select class="form-control select" id="xprovence">
															<?php if(is_array($prodata)): foreach($prodata as $key=>$vo): endforeach; endif; ?>
														</select>
													</div>
													<div class="col-md-3">
														<select class="form-control select" id="xcity">
														
														</select>
													</div>
													<div class="col-md-3">
														<select class="form-control select" id="xcounty">
															
														</select>
													</div>
												</div>
												<div class="clearfix"></div>
												<div class="form-group">
													<label for="postcode" class="col-md-2 control-label">邮编</label>
													<div class="col-md-6">
														<input type="text" class="form-control text" id="upostcode">
													</div>
												</div>
												<div class="clearfix"></div>
												<div class="form-group">
													<label for="street" class="col-md-2 control-label">街道地址</label>
													<div class="col-md-7">
														<textarea id="ustreet" class="form-control text" name="street" rows="3" placeholder="不需要重复填写省市，必须大于6个字符，小于100个字符"></textarea>
													</div>
												</div>
												<div class="clearfix"></div>
												<div class="form-group">
													<label for="receiptName" class="col-md-2 control-label">收货人姓名</label>
													<div class="col-md-7">
														<input type="text" id="ureceiptName" name="receiptName" class="form-control text" placeholder="不能大于10个汉字">
													</div>
												</div>
												<div class="clearfix"></div>
												<div class="form-group">
													<label for="cellPhone" class="col-md-2 control-label">手机号码</label>
													<div class="col-md-7">
														<input type="text" id="ucellPhone" name="cellPhone" class="form-control text" placeholder="11位即可">
													</div>
												</div>
												<div class="clearfix"></div>
												<div class="form-group">
													<label for="fixPhone" class="col-md-2 control-label">电话号码</label>
													<div class="col-md-2">
														<input type="text" id="uareaCode" name="areaCode" class="form-control text" placeholder="区号">
													</div>
													<div class="col-md-3">
														<input type="text" id="phoneNum" name="phoneNum" class="form-control text" placeholder="电话号码">
													</div>
													<div class="col-md-2">
														<input type="text" id="extenNum" name="extenNum" class="form-control text" placeholder="分机">
													</div>
												</div>
												<div class="clearfix"></div>
												<div class="form-group">
													<label  class="col-md-2 control-label">设为默认地址</label>
													<div class="col-md-3">
														<label class="checkbox-inline">
															<div class="form-group stylish-input">
																<input type="checkbox" name="defaultAddress" id="defaultAddress" class="prettyCheckable m-r" data-label="设为默认收货地址" value="1" />
															</div>
														</label>
													</div>
												</div>
												<div class="clearfix"></div>
												<div class="h20px"></div>
												<div class="form-group">
													<div class="col-md-offset-2 col-md-3">
														<label>
															<input type="submit" class="btn btn-primary" value="提交修改">
														</label>
													</div>
												</div>
											</form>

										</div>
									</div>
								</div>
							</div>
							<div class="panel-group checkout" id="person-goods">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse7">
												已买到的宝贝
											</a>
										</h4>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<div class="row">
											<div class="col-md-4">宝贝</div>
											<div class="col-md-1 nop text-center">单价(元)</div>
											<div class="col-md-1">数量</div>
											<div class="col-md-2">实付款(元)</div>
											<div class="col-md-2">交易状态</div>
											<div class="col-md-2">其他操作</div>
										</div>
									</div>
								</div>
								<?php if(is_array($data["order"])): foreach($data["order"] as $key=>$o): ?><div class="panel panel-default">
										<div class="panel-heading">
											<div class="row">
												<div class="col-md-4">
													<label>订单编号：<?php echo ($data["webconfig"]["content"]); echo ($o["ordernum"]); ?></label>
												</div>
												<div class="col-md-4">
													<label>成交时间：<?php echo (date('Y-m-d H:i:s',$o["addtime"])); ?></label>
												</div>
											</div>
										</div>
										<div class="panel-body">
											<div class="row">
												<div class="col-md-6">
												<?php if(is_array($o["ordersp"])): foreach($o["ordersp"] as $key=>$v): ?><!-- 一个商品的不同规格在此遍历 -->
													<div class="row">
														<div class="col-md-4">
															<img src="__PUBLIC__/Uploads/goods/<?php echo ($v["goods"]["pic"]); ?>" class="img80px" title="<?php echo ($v["goods"]["gname"]); ?>" alt="<?php echo ($v["goods"]["gname"]); ?>">
														</div>
														<div class="col-md-4">
															<a href="http://<?php echo ($_SERVER['HTTP_HOST']); ?>/mss/index.php/Products/product/id/<?php echo ($v["goods"]["id"]); ?>"><?php echo ($v["goods"]["gname"]); ?></a><br />
															<!-- 规格：<?php echo ($v["type"]); ?> -->
														</div>
														<div class="col-md-2">
														<?php echo ($v["goods"]["price"]); ?>
														</div>
														<div class="col-md-2">
														<?php echo ($v["num"]); ?>
														</div>
													</div>
													<br /><?php endforeach; endif; ?>

												</div>
												<div class="col-md-2">
													　　　<?php echo ($o["realprice"]); ?><br />
													（含快递费<?php echo ($o["transcosts"]); ?>元)
												</div>
												<div class="col-md-2">
													交易状态<br />
													　<?php echo ($o["pstatus"]); ?>
												</div>
												<div class="col-md-2">
													其他操作<br/>
													<a href="__APP__/Personal/order/id/<?php echo ($o["id"]); ?>">查看订单</a><br />
													<?php echo ($o["ostatus"]); ?>
												</div>
											</div>
										
										</div>
									</div><?php endforeach; endif; ?>
							</div>
							<div class="panel-group checkout" id="person-footprint">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse5">
												我的足迹
											</a>
										</h4>
									</div>
									<div id="checkout-collapse5" class="panel-collapse collapse">
										<div class="panel-body">
											<form class="paymethod" role="form">
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="panel-group checkout" id="person-collect">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse5">
												我的收藏
											</a>
										</h4>
									</div>
									<div id="checkout-collapse5" class="panel-collapse collapse">
										<div class="panel-body">
											<form class="paymethod" role="form">
											</form>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		
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
</body>
</html>