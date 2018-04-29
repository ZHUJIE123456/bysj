<?php if (!defined('THINK_PATH')) exit();?>		<!-- 包含顶部 -->
		<!DOCTYPE html>
<html lang="en">
	<head>
		<title>后台 Admin</title>
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="__PUBLIC__/admin/css/bootstrap.min.css" />
		<link rel="stylesheet" href="__PUBLIC__/admin/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="__PUBLIC__/admin/css/uniform.css" />
        <link rel="stylesheet" href="__PUBLIC__/admin/css/select2.css" />  	
		<link rel="stylesheet" href="__PUBLIC__/admin/css/unicorn.main.css" />
		<link rel="stylesheet" href="__PUBLIC__/admin/css/unicorn.grey.css" class="skin-color" />
                        <script src="__PUBLIC__/admin/js/jquery.min.js"></script>
                        <script src="__PUBLIC__/admin/js/bootstrap.min.js"></script>
    </head>
	<body>
		<div id="header">
			<h1><a href="./dashboard.html">Unicorn Admin</a></h1>		
		</div>
		<!-- 顶部右侧 个人信息区域 开始 -->
		<div id="user-nav" class="navbar navbar-inverse">
            <ul class="nav btn-group">
                <li class="btn btn-inverse">
                    <a title="" href="__ROOT__"><i class="icon icon-eye-open"></i> <span class="text">查看店铺</span></a>
                </li>
                <li class="btn btn-inverse">
                	<a title="" href="__APP__/Login/logout"><i class="icon icon-share-alt"></i> <span class="text">退出</span></a>
                </li>
            </ul>
        </div>
        <!-- 顶部右侧 个人信息区域 结束 -->
        <!-- 侧边 菜单栏 开始 -->
        <div id="sidebar">
            <a href="#" class="visible-phone"><i class="icon icon-home"></i> 控制面板</a>
            <ul>
                <li class="submenu" id="user">
                    <a href="#"><i class="icon icon-user"></i> <span>用户管理</span></a>
                    <ul>
                        <li><a href="__APP__/User/lists">会员列表</a></li>
                        <li><a href="__APP__/User/add">添加会员</a></li>
                    </ul>
                </li>
                <li class="submenu" id="role">
                    <a href="#"><i class="icon icon-lock"></i> <span>权限管理</span></a>
                    <ul>
                        <li><a href="__APP__/Auser/lists">管理员列表</a></li>
                        <li><a href="__APP__/Alog/lists">系统操作日志</a></li>
                    </ul>
                </li>
                <li class="submenu" id="goods">
                    <a href="#"><i class="icon icon-shopping-cart"></i> <span>商品管理</span></a>
                    <ul>
                        <li><a href="__APP__/Goods/lists">商品列表</a></li>
                        <li><a href="__APP__/Goods/add">添加商品</a></li>
                        <li><a href="__APP__/Class/lists">商品分类</a></li>
                        <li><a href="__APP__/Goodstype/lists">商品规格</a></li>
                        <li><a href="__APP__/Comment/lists">用户评论</a></li>
                    </ul>
                </li>
                <li class="submenu" id="order">
                    <a href="#"><i class="icon icon-tag"></i> <span>订单管理</span></a>
                    <ul>
                        <li><a href="__APP__/Order/lists">订单列表</a></li>
                        <li><a href="__APP__/Order/query">订单查询</a></li>
                    </ul>
                </li>
                <li id="config"><a href="__APP__/Config/listsConfig"><i class="icon icon-cog"></i> <span>网站设置</span></a></li>
                    <!-- 基本信息、自定义导航、系统公告 ... -->
                <li id="friend"><a href="__APP__/Friend/lists"><i class="icon icon-heart"></i> <span>友情链接</span></a></li>
            </ul>
        </div>
        <!-- 侧边 菜单栏 结束 -->
		

<!-- ////////////////////////////////////////// 顶部 ///////////////////////////// -->

		<!-- 后台颜色切换  -->
<!-- 		<div id="style-switcher">
			<i class="icon-arrow-left icon-white"></i>
			<span>Style:</span>
			<a href="#grey" style="background-color: #555555;border-color: #aaaaaa;"></a>
			<a href="#blue" style="background-color: #2D2F57;"></a>
			<a href="#red" style="background-color: #673232;"></a>
		</div> -->
		
		<div id="content">
            <!-- 顶部面包屑导航 开始 -->
			<div id="breadcrumb">
				<a href="#" title="返回首页" class="tip-bottom"><i class="icon-home"></i> 首页</a>
				<a href="#" class="current">控制面板</a>
			</div>
            <!-- 顶部面包屑导航 结束 -->
			<div class="container-fluid">
                <!-- 下部组件 -->
				<div class="row-fluid">
					<!-- -->
					<div class="span6">
						<div class="widget-box">
							<!-- 标题 -->
							<div class="widget-title"><span class="icon"><i class="icon-comment"></i></span><h5>操作动态</h5></div>
							<!-- 内容部分 开始 -->
							<div class="widget-content nopadding">
								<?php if(is_array($log)): foreach($log as $key=>$v): echo ($v["loginfo"]); ?><br /><?php endforeach; endif; ?>
							</div>
							<!-- 内容部分 结束-->
						</div>
					</div>
					<!-- -->
					<div class="span6">
						<div class="widget-box">
							<!-- 标题 -->
							<div class="widget-title"><span class="icon"><i class="icon-comment"></i></span><h5>系统信息</h5></div>
							<!-- 内容部分 开始 -->
							<div class="widget-content nopadding">
								<table class="table table-bordered">
									<tbody>
										<tr>
											<td>服务器操作系统：</td>
											<td><?php echo ($sysinfo["os"]); ?>&nbsp;<?php echo ($sysinfo["ip"]); ?></td>
										</tr>
										<tr>
											<td>Web 服务器：</td>
											<td><?php echo ($sysinfo["web_server"]); ?></td>
										</tr>
										<tr>
											<td>PHP 版本：</td>
											<td><?php echo ($sysinfo["php_ver"]); ?></td>
										</tr>
										<tr>
											<td>MySQL 版本：</td>
											<td>5.0.51b-community-nt-log</td>
										</tr>
										<tr>
											<td>ThinkPHP 版本：</td>
											<td><?php echo (THINK_VERSION); ?></td>
										</tr>
										<tr>
											<td>系统 版本：</td>
											<td>V1.0</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- 内容部分 结束-->
						</div>
					</div>
				</div>
					
	<!--//////////////////////////////////////////////  底部 //////////////////////////////////-->

		<!-- 包含底部 -->
					
            <!-- 页面底部版权 -->
			
		</div>
	</div>


	<!-- 加载相关JS文件 -->
    <script src="__PUBLIC__/admin/js/excanvas.min.js"></script>
    <script src="__PUBLIC__/admin/js/jquery.ui.custom.js"></script>
    <script src="__PUBLIC__/admin/js/jquery.uniform.js"></script>
    <script src="__PUBLIC__/admin/js/select2.min.js"></script>
    <script src="__PUBLIC__/admin/js/jquery.dataTables.min.js"></script>
    <script src="__PUBLIC__/admin/js/jquery.flot.min.js"></script>
    <script src="__PUBLIC__/admin/js/jquery.flot.resize.min.js"></script>
    <script src="__PUBLIC__/admin/js/jquery.peity.min.js"></script>
    <script src="__PUBLIC__/admin/js/unicorn.js"></script>
    <script src="__PUBLIC__/admin/js/unicorn.tables.js"></script>
    <script src="__PUBLIC__/admin/js/unicorn.dashboard.js"></script>

    <script>
        // 侧边菜单栏，高亮当前模块 样式设置
    
        // 去除之前的样式
        $("li[class='active']").removeClass("active");
        // 高亮当前样式
        $("li[id='<?php echo (strtolower(MODULE_NAME)); ?>']").addClass("active");
    </script>

</body>
</html>