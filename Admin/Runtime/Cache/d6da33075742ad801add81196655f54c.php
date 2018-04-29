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

<!-- 包含侧边栏 -->

<link type="text/css" rel="stylesheet" href="__PUBLIC__/ueditor/themes/default/css/umeditor.min.css">
<script>
      	 window.UMEDITOR_HOME_URL = "__PUBLIC__/ueditor/";
</script>
<script type="text/javascript" src="__PUBLIC__/ueditor/jquery.js"></script>
<script type="text/javascript" src="__PUBLIC__/ueditor/umeditor.config.js"></script>
<script type="text/javascript" src="__PUBLIC__/ueditor/umeditor.js"></script>
<div id="content">
	<!-- 顶部右侧快捷操作按钮 开始 -->
		<div id="content-header">
			<h1>商品管理</h1>
		</div>
        <!-- 顶部右侧快捷操作按钮 结束 -->
        <!-- 顶部面包屑导航 开始 -->
		<div id="breadcrumb">
			<a href="__APP__" title="返回首页" class="tip-bottom"><i class="icon-home"></i> 首页</a>
			<a href="__URL__/lists" title="返回用户管理" class="tip-bottom"> 商品管理</a>
			<a href="#" class="current"> 编辑</a>
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
							<h5>编辑商品</h5>
						</div>
						<!-- 组件内容区域 -->
						<div class="widget-content nopadding">
							<!-- 编辑表单 -->
							<form action="__URL__/update/id/<?php echo ($data["id"]); ?>"  method="post" enctype="multipart/form-data" class="form-horizontal">
								<div class="control-group">
									<label class="control-label">商品名称：</label>
									<div class="controls"><input type="text" name="gname" value="<?php echo ($data["gname"]); ?>" /></div>
								</div>
								<div class="control-group">
									<label class="control-label">商品数量：</label>
									<div class="controls"><input type="text" name="gtotal" value="<?php echo ($data["gtotal"]); ?>" /></div>
								</div>
								<div class="control-group">
									<label class="control-label">商品货号：</label>
									<div class="controls"><input type="text" name="gnum" value="<?php echo ($data["gnum"]); ?>" /></div>
								</div>
								<div class="control-group">
									<label class="control-label">本商城价格：</label>
									<div class="controls"><input type="text" name="price" value="<?php echo ($data["price"]); ?>" /></div>
								</div>
								<div class="control-group">
									<label class="control-label">市场价格：</label>
									<div class="controls"><input type="text" name="mprice" value="<?php echo ($data["mprice"]); ?>" /></div>
								</div>
								<div class="control-group">
									<label class="control-label">所属分类：</label>
									<div class="controls">
										<select name="classid" style="width:200px;">
                                            <option value="0" >顶级分类</option>
					     				 	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php echo ($vo['id'] == $data['classid'] ? 'selected' : ''); ?> >
						                		<?php $__FOR_START_10613__=1;$__FOR_END_10613__=$vo["num"];for($i=$__FOR_START_10613__;$i < $__FOR_END_10613__;$i+=1){ ?><span style="color: #cdcdcd;">|-----&nbsp;</span><?php } echo ($vo["cname"]); ?>
						                	</option><?php endforeach; endif; else: echo "" ;endif; ?>
    									</select>
									</div>
								</div>
								
								<div class="control-group">
									<label class="control-label">商品图片：</label>
									<div class="controls"><input type="file" name="pic" /></div>
								
								</div>
								<div class="control-group">
									<label class="control-label"></label>
									<div class="controls"><img src="__PUBLIC__/Uploads/goods/<?php echo ($data["pic"]); ?>" width="150"></div>
								</div>

								<div class="control-group">
									<label class="control-label">是否上架：</label>
									<div class="controls">
											<select name="issell" style="width:60px;">
												<option value="1" <?php if($data["issell"] == 1): ?>selected<?php endif; ?>>是</option>
												<option value="2" <?php if($data["issell"] == 2): ?>selected<?php endif; ?>>否</option>
											</select>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label">商品描述：</label>
									<div class="controls">
										<textarea id='gdescription' cols='70' rows='2' name="gdescription" placeholder='请输入相关商品描述'><?php echo ($data["gdescription"]); ?></textarea>
									</div>
								</div>
								<!-- 提交提交按钮 -->
								<div class="form-actions">
									<button type="submit" class="btn btn-primary">修改</button>
								</div>
							</form>
						</div>
						</div>
						</div>	
				</div>
			</div>

		<!-- 主体区域结束 -->
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
<SCRIPT type=text/javascript>

//var editor = UM.getEditor('myEditor',{initialFrameWidth:600});

    var editor = UM.getEditor('gdescription',{
            
            //默认的编辑区域高度
            initialFrameHeight:100,
            initialFrameWidth:725
            //更多其他参数，请参考umeditor.config.js中的配置项
        });

</SCRIPT>