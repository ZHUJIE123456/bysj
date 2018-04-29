<?php if (!defined('THINK_PATH')) exit();?>﻿<!-- 包含顶部 -->
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
                      //确认订单
                      $("#queren").click(function(){
                              var id = $(this).attr("orderid");
                              var url = "__URL__/queren/id/"+id;
                              location.href = url;
                      })

                       //取消确认订单
                      $("#uqueren").click(function(){
                              var id = $(this).attr("orderid");
                              var url = "__URL__/uqueren/id/"+id;
                              location.href = url;
                      })

                      $("#fukuan").click(function(){
                             var id = $(this).attr("orderid");
                              var url = "__URL__/fukuan/id/"+id;
                              location.href = url;
                      })

                      $("#fahuo").click(function(){
                             var id = $(this).attr("orderid");
                              var url = "__URL__/fahuo/id/"+id;
                              location.href = url;
                      })

                      $("#wancheng").click(function(){
                             var id = $(this).attr("orderid");
                              var url = "__URL__/wancheng/id/"+id;
                              location.href = url;
                      })
            })
</script>
<div id="content">
  <!-- 顶部右侧快捷操作按钮 开始 -->
    <div id="content-header">
      <h1>订单管理</h1>
      <div class="btn-group">
        <a class="btn btn-large tip-bottom" title="订单管理"><i class="icon-file"></i></a>
        <a class="btn btn-large tip-bottom" title="用户管理"><i class="icon-user"></i></a>
        <a class="btn btn-large tip-bottom" title="评论管理"><i class="icon-comment"></i><span class="label label-important">5</span></a>
        <a class="btn btn-large tip-bottom" title="购物车管理"><i class="icon-shopping-cart"></i></a>
    </div>
    </div>
        <!-- 顶部右侧快捷操作按钮 结束 -->
        <!-- 顶部面包屑导航 开始 -->
    <div id="breadcrumb">
      <a href="__APP__" title="返回首页" class="tip-bottom"><i class="icon-home"></i> 首页</a>
      <a href="__URL__/lists" title="返回订单管理" class="tip-bottom"> 订单管理</a>
      <a href="#" class="current"> 订单详情</a>
    </div>

  
          <!-- 组件盒子 开始 -->
          <div class="widget-box">
            <!-- 组件标题区域 -->
            <div class="widget-title">
              <span class="icon"><i class="icon-align-justify"></i></span>
              <h5>基本信息</h5>     
            </div>
            <!-- 组件内容区域 -->
            <div class="widget-content nopadding">
      <div class="span4" style="width:500px;">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-eye-open"></i> </span>
            <?php if($order["orderstatus"] == 2): ?><h5><a href="__URL__/updaj/id/<?php echo ($order["id"]); ?>">编辑</a></h5><?php endif; ?>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered">
  
              <tbody>
                <tr>
                  <td>订单号</td>
                  <td><?php echo ($order["ordernum"]); ?></td>
                </tr>
                <tr>
                  <td>购货人</td>
                  <td><?php echo ($user["username"]); ?></td>
                </tr>
                <tr>
                  <td>支付方式</td>
                  <td><?php echo ($order["payname"]); ?></td>
                </tr>
                <tr>
                  <td>订单状态</td>
                  <td>
                      <?php if($order["orderstatus"] == 1): ?><font color="green">已确认</font>
                          <?php else: ?><font color="red">未确认</font><?php endif; ?>
                  </td>
                </tr>
                <tr>
                  <td>购买状态</td>
                  <td> 
                      <?php if($order["paystatus"] == 1): ?><font color="green">已付款</font>
                          <?php else: ?><font color="red">未付款</font><?php endif; ?>
                  </td>
                </tr>
                <tr>
                  <td>发货状态</td>
                  <td>
                          <?php if($order["sendstatus"] == 1): ?><font color="green">已发货</font>
                          <?php elseif($order["sendstatus"] == 2): ?><font color="red">未发货</font>
                          <?php elseif($order["sendstatus"] == 3): ?><font color="green">完成交易</font><?php endif; ?>
                  </td>
                </tr>
                <tr>
                  <td>下单时间</td>
                  <td><?php echo (date('Y-m-d H:i',$order["addtime"])); ?></td>
                </tr>
                <tr>
                  <td>发货时间</td>
                  <td>
                          <?php if($order["sendtime"] == 0): ?>未发货
                                    <?php else: ?>
                                  <?php echo (date('Y-m-d H:i',$order["sendtime"])); endif; ?>
                  </td>
                </tr>
                <tr>
                  <td>发货方式</td>
                  <td><?php echo ($order["diliveryname"]); ?></td>
                </tr>

                 <tr>
                  <td>订单留言</td>
                  <td><font color="blue"><?php echo ($order["uremark"]); ?></font></td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
    </div>

          <!-- 组件盒子 开始 -->
          <div class="widget-box">
            <!-- 组件标题区域 -->
            <div class="widget-title">
              <span class="icon"><i class="icon-align-justify"></i></span>
              <h5>收货人信息</h5>      
            </div>
            <!-- 组件内容区域 -->
            <div class="widget-content nopadding">
   
          
      <div class="span4" style="width:500px;">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-eye-open"></i> </span>
          <?php if($order["orderstatus"] == 2): ?><h5><a href="__URL__/updas/id/<?php echo ($adata["id"]); ?>/did/<?php echo ($order["id"]); ?>">编辑</a></h5><?php endif; ?>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered">
         
              <tbody>
                <tr>
                  <td>收货人</td>
                  <td><?php echo ($adata["receiver"]); ?></td>
                </tr>
                <tr>
                  <td>地址</td>
                  <td><?php echo ($adata["province1"]); echo ($adata["city1"]); echo ($adata["area1"]); echo ($adata["street"]); ?></td>
                </tr>
                <tr>
                  <td>电话号</td>
                  <td><?php echo ($adata["tel"]); ?></td>
                </tr>
                <tr>
                  <td>手机号</td>
                  <td><?php echo ($adata["mobile"]); ?></td>
                </tr>

                <tr>
                  <td>电子邮件</td>
                  <td><?php echo ($adata["email"]); ?></td>
                </tr>
                <tr>
                  <td>邮编</td>
                  <td><?php echo ($adata["postcode"]); ?></td>
                </tr>
                <tr>
                  <td>是否为默认地址</td>
                  <td><?php if($adata["isdefault"] == 1): ?>是<?php else: ?>否<?php endif; ?></td>
                </tr>
          <!--       <tr>
            <td>最佳送货时间</td>
            <td><?php echo (date("Y-m-d H:i:s",$adata["besttime"])); ?></td>
          </tr> -->

              </tbody>

              </tbody>
            </table>
          </div>
        </div>
      </div>
     </div>
     </div>
      
             <!-- 组件盒子 开始 -->
          <div class="widget-box">
            <!-- 组件标题区域 -->
            <div class="widget-title">
              <span class="icon"><i class="icon-align-justify"></i></span>
             
              <h5>订单商品信息&nbsp;&nbsp;<?php if($order["paystatus"] == 1): ?><font color="green">(总价:<?php echo ($order["realprice"]); ?>)</font><?php else: ?><font color="red">(总价:<?php echo ($order["realprice"]); ?>)</font><?php endif; ?></h5>
              <?php if($order["orderstatus"] == 2): ?><h5><a href="__URL__/upda/id/<?php echo ($order["id"]); ?>">编辑</a></h5><?php endif; ?>   
            </div>
            <!-- 组件内容区域 -->
           <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <!-- 表头字段区域 -->
                <thead>
                  <tr>  
                    <th>商品名称</th>
                    <th style="width:60px;">图片</th>
                    <th>价格</th>
                    <th>数量</th>
                    <th>库存</th> 
                    <th>小计</th>
                  </tr>
                </thead>
                <!-- 表格主体数据区域 -->
                <tbody>
                <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
                    <td><?php echo ($vo["gname"]); ?></td>
                    <td><img src="__PUBLIC__/Uploads/goods/<?php echo ($vo["pic"]); ?>" style="width:60px;height:50px;"></td>
                    <td><?php echo ($vo["price"]); ?></td>
                    <td><?php echo ($vo["num"]); ?></td>
                    <td><?php echo ($vo["gtotal"]); ?></td>
                    <td><?php echo ($vo["subtotal"]); ?></td>
                  </tr><?php endforeach; endif; ?>
                </tbody>
              </table>  
            </div>
          </div>

          <!-- 提交按钮开始 -->
          <div class="form-actions">
            <?php if($order["sendstatus"] == 3): ?><strong style="color:green;">交易已经完成</strong>
                    <?php else: ?>
                    <strong>当前可以实行的操作:&nbsp;&nbsp;</strong><?php endif; ?>
            <?php if($order["orderstatus"] == 2): ?><button type="button" class="btn btn-primary" id="queren" orderid="<?php echo ($order["id"]); ?>">确认</button><?php endif; ?>
            <?php if($order["paystatus"] == 2 AND $order["orderstatus"] == 1): ?><button type="button" class="btn btn-primary" id="fukuan" orderid="<?php echo ($order["id"]); ?>">付款</button>
                  <button type="button" class="btn btn-primary" id="uqueren" orderid="<?php echo ($order["id"]); ?>">取消确认</button><?php endif; ?>
            <?php if($order["sendstatus"] == 2 AND $order["paystatus"] == 1 AND $order["orderstatus"] == 1): ?><button type="button" class="btn btn-primary" id="fahuo" orderid="<?php echo ($order["id"]); ?>">发货</button><?php endif; ?>

            <?php if($order["sendstatus"] == 1 AND $order["paystatus"] == 1 AND $order["orderstatus"] == 1): ?><button type="button" class="btn btn-primary" id="wancheng" orderid="<?php echo ($order["id"]); ?>">完成交易</button><?php endif; ?>
  
          </div>
          <!-- 提交按钮结束 -->
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