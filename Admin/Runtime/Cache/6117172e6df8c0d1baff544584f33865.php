<?php if (!defined('THINK_PATH')) exit();?><!-- 包含顶部 --> 
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

<div id="content">
	<!-- 顶部右侧快捷操作按钮 开始 -->
		<div id="content-header">
			<h1>用户管理</h1>
		</div>
        <!-- 顶部右侧快捷操作按钮 结束 -->
        <!-- 顶部面包屑导航 开始 -->
		<div id="breadcrumb">
			<a href="__APP__" title="返回首页" class="tip-bottom"><i class="icon-home"></i> 首页</a>
			<a href="__URL__/lists" title="返回用户管理" class="tip-bottom"> 用户管理</a>
			<a href="#" class="current"> 添加新会员</a>
		</div>
		<!-- 顶部面包屑导航 结束 -->
		<!-- 主体区域 -->
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<!-- 组件盒子 开始 -->
					<div class="widget-box">
						<!-- 组件标题区域 -->
						<div class="widget-title">
							<span class="icon"><i class="icon-align-justify"></i></span>
							<h5>添加新会员</h5>
						</div>
						<!-- 组件内容区域 -->
						<div class="widget-content nopadding">
							<!-- 编辑表单 -->
							<form action="__URL__/inse" method="post" enctype="multipart/form-data" class="form-horizontal">
								<div class="control-group">
									<label class="control-label">用户名：</label>
									<div class="controls"><input type="text" name="username" /></div>
								</div>
								<div class="control-group">
									<label class="control-label">密码：</label>
									<div class="controls"><input type="password" name="userpwd" /></div>
								</div>
								<div class="control-group">
									<label class="control-label">头像：</label>
									<div class="controls"><input type="file" name="headpic" /></div>
								</div>
								<div class="control-group">
									<label class="control-label">邮箱：</label>
									<div class="controls"><input type="text" name="email" /></div>
								</div>
								<div class="control-group">
									<label class="control-label">用户状态：</label>
									<div class="controls">
										<select name="ustatus">
											<option value="1">正常登陆</option>
											<option value="2">尚未激活</option>
											<option value="3">限制登录</option>
										</select>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">性别：</label>
									<div class="controls">
										<select name="sex">
											<option value="3" selected >保密</option>
											<option value="1">男</option>
											<option value="2">女</option>
										</select>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">生日：</label>
									<div class="controls">
										<select style="width:80px;" name="year">
											<?php $__FOR_START_27709__=1938;$__FOR_END_27709__=2014;for($i=$__FOR_START_27709__;$i < $__FOR_END_27709__;$i+=1){ ?><option value="<?php echo ($i); ?>"><?php echo ($i); ?></option><?php } ?>
										</select>
										<select style="width:60px;" name="month">
											<?php $__FOR_START_23602__=1;$__FOR_END_23602__=12;for($i=$__FOR_START_23602__;$i < $__FOR_END_23602__;$i+=1){ ?><option value="<$i>"><?php echo ($i); ?></option><?php } ?>
										</select>
										<select style="width:60px;" name="day">
											<?php $__FOR_START_11651__=1;$__FOR_END_11651__=31;for($i=$__FOR_START_11651__;$i < $__FOR_END_11651__;$i+=1){ ?><option value="<?php echo ($i); ?>"><?php echo ($i); ?></option><?php } ?>
										</select>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">居住地</label>
									<div class="controls">
										<select id="sheng" style="width:100px;" name="province"></select>&nbsp;&nbsp;
										<select id="shi" style="width:100px;" name="city" ></select>&nbsp;&nbsp;
										<select id="qu" style="width:120px;" name="county"></select>
										<script type="text/javascript" src="__PUBLIC__/js/area.js"></script>
										<script type="text/javascript">_init_area();</script>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">真实姓名：</label>
									<div class="controls"><input type="text" name="realname" /></div>
								</div>
								<div class="control-group">
									<label class="control-label">身份证号：</label>
									<div class="controls"><input type="text" name="idcard" /></div>
								</div>
								<div class="control-group">
									<label class="control-label">联系电话：</label>
									<div class="controls"><input type="text" name="cellphone" /></div>
								</div>
								<!-- 提交提交按钮 -->
								<div class="form-actions">
									<button type="submit" class="btn btn-primary">保存</button>
								</div>

							</form>
						</div>
						</div>	
				</div>
			</div>


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