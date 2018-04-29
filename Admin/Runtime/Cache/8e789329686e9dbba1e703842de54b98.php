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
<script>
	$(function(){
			/*添加商品*/
			$("#add").click(function(){
				 var url = "__URL__/add";
				 location.href = url;
			});

			/*ajax改变分类首页显示状态*/
			$(".isshow").click(function(){

				var isshow = $(this).attr("isshow");
				var url = "__URL__/isshow/id/"+isshow;
				var obj = $(this);

				$.get(url,function(data){
					var result = data;

					if(result == 1){
						obj.attr("src","__PUBLIC__/admin/img/yes.gif");
					}else if(result == 2){
						obj.attr("src","__PUBLIC__/admin/img/no.gif");
					}
				
				},'json');
			})
	});
</script>
<div id="content">
	<!-- 顶部右侧快捷操作按钮 开始 -->
		<div id="content-header">
			<h1>分类管理</h1>
		</div>
        <!-- 顶部右侧快捷操作按钮 结束 -->
        <!-- 顶部面包屑导航 开始 -->
		<div id="breadcrumb">
			<a href="__APP__" title="返回首页" class="tip-bottom"><i class="icon-home"></i> 首页</a>
			<a href="__URL__/lists" title="返回分类管理" class="tip-bottom"> 分类管理</a>
			<a href="#" class="current"> 列表</a>
		</div>
		<!-- 顶部面包屑导航 结束 -->
		<!-- 主体区域开始 -->
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<!-- 组件盒子 开始 -->
					<form action="__URL__/caozuo" method="post">
					<div class="widget-box">
						<!-- 组件标题区域 -->
						<div class="widget-title">
							<h5>分类列表</h5>
							<input class="icon" style="margin-top:5px;" type="button" name="add" id="add" value="添加分类">
							<input class="icon" style="margin-top:5px;" type="submit" name="submitd" value="批量删除">
						</div>
						<!-- 组件内容区域 -->
						<div class="widget-content nopadding">
							<table class="table table-bordered data-table">
								<!-- 表头字段区域 -->
								<thead>
									<tr>
										<th></th>
										<th>分类名称</th>
										<th>商品数量</th>
										<th>数量单位</th>
										<th>是否首页显示</th>
										<th>操作</th>
									</tr>
								</thead>
								<!-- 表格主体数据区域 -->
								<tbody>
								<?php if(is_array($cdata)): foreach($cdata as $key=>$vo): ?><tr>
										<td>
											<input type="checkbox" name="all[]" value="<?php echo ($vo["id"]); ?>"/>
										</td>
										<td width="300">
											<?php $__FOR_START_16098__=1;$__FOR_END_16098__=$vo["num"];for($i=$__FOR_START_16098__;$i < $__FOR_END_16098__;$i+=1){ ?><span style="color: #cdcdcd;">|-----&nbsp;</span><?php } echo ($vo["cname"]); ?>
										</td>
										<td><?php echo ($vo["goodnum"]); ?></td>
										<td><?php echo ($vo["danwei"]); ?></td>
									
										<td><?php if($vo["isshow"] == 1): ?><img class="isshow" isshow="<?php echo ($vo["id"]); ?>" src="__PUBLIC__/admin/img/yes.gif"/><?php else: ?><img class="isshow" isshow="<?php echo ($vo["id"]); ?>" src="__PUBLIC__/admin/img/no.gif"/><?php endif; ?></td>

										<td class="taskOptions">
										 <a href="__URL__/zupda/id/<?php echo ($vo["id"]); ?>" class="tip-top" data-original-title="转移商品"><i class="icon-share-alt"></i></a>&nbsp;&nbsp;
									    	<a href="__URL__/upda/id/<?php echo ($vo["id"]); ?>" class="tip-top" data-original-title="编辑"><i class="icon-pencil"></i></a>&nbsp;&nbsp;
									    	<a href="__URL__/del/id/<?php echo ($vo["id"]); ?>" class="tip-top" data-original-title="删除" onclick="return confirm('确定要删除!!!')"><i class="icon-remove"></i></a>
										</td>
									</tr><?php endforeach; endif; ?>
								</tbody>
							</table>  
						</div>
					</div>
					</form>
				     <!-- 组件盒子 结束 -->
				</div>
			</div>
		</div>
		<!-- 主体区域结束 -->
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