<?php
/* Smarty version 3.1.30, created on 2017-07-24 03:03:35
  from "E:\wampserve\wamp\www\shopapp2222\mvc\template\index\yj-member.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59754767debb68_34963953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f74101a43d847661d73dc3581fa28f40bf312c6' => 
    array (
      0 => 'E:\\wampserve\\wamp\\www\\shopapp2222\\mvc\\template\\index\\yj-member.html',
      1 => 1500858156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59754767debb68_34963953 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title></title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/mui.min.js"><?php echo '</script'; ?>
>
    <link href="<?php echo CSS_PATH;?>
/mui.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/yj-member.css" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css" />
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jQuery.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="UTF-8">
      	mui.init();
      	mui('.mui-off-canvas-wrap').offCanvas('show');
    <?php echo '</script'; ?>
>
	<style>
		.up{
			display: inline-block;
			width: 100%;
			height:100%;
			position: absolute;
			left:0;
			top:0;
			align-items: baseline;
			color: inherit;
			text-align: start;
		}
	</style>
</head>
<body>
	<!-- 侧滑导航根容器 -->
<div class="mui-off-canvas-wrap mui-draggable mui-scalable big">
  <!-- 菜单容器 -->
  <aside class="mui-off-canvas-left box">
    <div class="mui-scroll-wrapper">
      <div class="mui-scroll">
        <!-- 菜单具体展示内容 -->
        <div class="tou">
        	<div class="tou1">
        		<div class="tou2">
        			<img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" alt="" class="tu" />
        		</div>
        	</div>
        </div>
         <div class="list">
         	<ul>
         		<li>
         			<p>
         				<span><img src="<?php echo IMG_PATH;?>
/yj-member-bi.png" alt="" class="tu"/></span>
         				<span><a href="index.php?m=index&f=member&a=editnc">修改昵称</a></span>
         				<span><img src="<?php echo IMG_PATH;?>
/yj-member-more.png" alt="" class="tu"/></span>
         			</p>
         			<p></p>
         		</li>
         		<li>
         			<p style="position: relative;">
         				<span><img src="<?php echo IMG_PATH;?>
/yj-member-xin.png" alt="" class="tu"/></span>
         				<span><a href="index.php?m=index&f=member&a=editphoto">更换头像</a></span>
         				<span><img src="<?php echo IMG_PATH;?>
/yj-member-more.png" alt="" class="tu"/>
						</span>
         			</p>
         			<p></p>
         		</li>
         		<li>
         			<p>
         				<span><img src="<?php echo IMG_PATH;?>
/yj-member-peng.png" alt="" class="tu"/></span>
         				<span><a href="index.php?m=index&f=member&a=editmm">修改密码</a></span>
         				<span><img src="<?php echo IMG_PATH;?>
/yj-member-more.png" alt="" class="tu"/></span>
         			</p>
         			<p></p>
         		</li>
         		<li>
         			<p>
         				<span><img src="<?php echo IMG_PATH;?>
/yj-member-tui.png" alt="" class="tu"/></span>
         				<span><a href="#">推荐其他好友</a></span>
         				<span><img src="<?php echo IMG_PATH;?>
/yj-member-more.png" alt="" class="tu"/></span>
         			</p>
         			<p></p>
         		</li>
         		<li>
         			<p>
         				<span><img src="<?php echo IMG_PATH;?>
/yj-member-hei.png" alt="" class="tu"/></span>
         				<span><a href="index.php?m=index&f=login&a=logout">退出登录</a></span>
         				<span><img src="<?php echo IMG_PATH;?>
/yj-member-more.png" alt="" class="tu"/></span>
         			</p>
         			<p></p>

         		</li>
         		<li>
         			<p>
         				<span><img src="<?php echo IMG_PATH;?>
/yj-member-tou.png" alt="" class="tu"/></span>
         				<span><a href="">投诉</a></span>
         				<span><img src="<?php echo IMG_PATH;?>
/yj-member-more.png" alt="" class="tu"/></span>
         			</p>
         			<p></p>
         		</li>
         		<li>
         			<p>
         				<span><img src="<?php echo IMG_PATH;?>
/yj-member-shan.png" alt="" class="tu"/></span>
         				<span><a href="">注销</a></span>
         				<span><img src="<?php echo IMG_PATH;?>
/yj-member-more.png" alt="" class="tu"/></span>
         			</p>
         			<p></p>
         		</li>
         	</ul>
         </div>
      </div>
    </div>
  </aside>
  <!-- 主页面容器 -->
  <div class="mui-inner-wrap con">
    <!-- 主页面标题 -->
   
    <div class="mui-content mui-scroll-wrapper conn">
      <div class="mui-scroll bigg">
        <div class="setting"></div>
        <div class="write"></div>
        <div class="zi">5789</div>
        <div class="dengji">
        	<span>
        		<img src="<?php echo IMG_PATH;?>
/yj-member-zuan.png" alt="" class="tu"/>
        	</span>
        	<span>
        		<img src="<?php echo IMG_PATH;?>
/yj-member-zuan.png" alt="" class="tu"/>
        	</span>
        	<span>
        		<img src="<?php echo IMG_PATH;?>
/yj-member-zuan.png" alt="" class="tu"/>
        	</span>
        </div>
        <div class="touxiang">
        	<div class="touxiang1">
        		<div class="touxiang2">
        			<img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" alt="" class="tu" >

        		</div>
        		<div class="tiao1"><?php echo $_smarty_tpl->tpl_vars['nicheng']->value;?>
</div>
        		<div class="tiao2"><span><img src="<?php echo IMG_PATH;?>
/yj-member-guan.png" alt="" class="tu" /></span>
        			<span>购物达人</span>
        		</div>
        		<div class="tiao3">
        			<span><img src="<?php echo IMG_PATH;?>
/yj-member-fenxiang.png" alt=""  class="tu"/></span>
        			<span>分享好友</span>
        		</div>
        		<div class="ge1"></div>
        	</div> 
        </div>
       <div class="dingdan">
       	<ul>
       		<li>
       			<p><img src="<?php echo IMG_PATH;?>
/yj-member-ding.png" alt="" class="tu"/></p>
       			<p>全部订单</p>
       		</li>
       		<li>
       			<p><img src="<?php echo IMG_PATH;?>
/yj-member-fukuan.png" alt="" class="tu"/></p>
       			<p>待付款</p>
       		</li>
       		<li>
       			<p><img src="<?php echo IMG_PATH;?>
/yj-member-fahuo.png" alt="" class="tu"/></p>
       			<p>待发货</p>
       		</li>
       		<li>
       			<p><img src="<?php echo IMG_PATH;?>
/yj-member-shouhuo.png" alt="" class="tu"/></p>
       			<p>待收货</p>
       		</li>
       		<li>
       			<p><img src="<?php echo IMG_PATH;?>
/yj-member-pingjia.png" alt="" class="tu"/></p>
       			<p>待评价</p>
       		</li>
       	</ul>
       </div>
       <div class="fenlei">
       	<ul>
       		<li>
       			<div class="fenlei1"><img src="<?php echo IMG_PATH;?>
/yj-member-fenlei1.png" alt="" class="tu"/></div>
       			<div class="fenlei2">
       				<p><span>会员俱乐部</span>  <span>Member Club</span></p>
       				<p>尽情享受会员福利，成为你的专属</p>
       			</div>
       			<div class="fenlei2-more"></div>
       		</li>
       		<li>
       			<div class="fenlei1"><img src="<?php echo IMG_PATH;?>
/yj-member-fenlei1.png" alt="" class="tu"/></div>
       			<div class="fenlei2">
       				<p><span>我的收藏</span>  <span>Member Club</span></p>
       				<p>尽情享受会员福利，成为你的专属</p>
       			</div>
       			<div class="fenlei2-more"></div>
       		</li>
       		<li>
       			<div class="fenlei1"><img src="<?php echo IMG_PATH;?>
/yj-member-fenlei1.png" alt="" class="tu"/></div>
       			<div class="fenlei2">
       				<p><span>我的作品</span>  <span>Member Club</span></p>
       				<p>尽情享受会员福利，成为你的专属</p>
       			</div>
       			<div class="fenlei2-more"></div>
       		</li>
       		<li>
       			<div class="fenlei1"><img src="<?php echo IMG_PATH;?>
/yj-member-fenlei1.png" alt="" class="tu"/></div>
       			<div class="fenlei2">
       				<p><span>在线服务</span>  <span>Member Club</span></p>
       				<p>尽情享受会员福利，成为你的专属</p>
       			</div>
       			<div class="fenlei2-more"></div>
       		</li>
       	</ul>
       </div>
      <div class="di">
      	<ul>
      		<a href="index.php?m=index&f=index&a=index1"><li>
      			<img src="<?php echo IMG_PATH;?>
/zx2.png" alt="" class="tu"/>
      			<p ></p>
      		</li>
      		</a>
      		<a href="#"><li>
      			<img src="<?php echo IMG_PATH;?>
/zx3.png" alt="" class="tu"/>
      			<p></p>
      		</li>
      		</a>
      		<a href="#"><li>
      			<img src="<?php echo IMG_PATH;?>
/zx1.png" alt="" class="tu"/>
      			<p></p>
      		</li>
      		</a>
      		<a href="#"><li>
      			<img src="<?php echo IMG_PATH;?>
/zx4.png" alt="" class="tu"/>
      			<p></p>
      		</li>
      		</a>
      		<a href="index.php?m=index&f=member"><li>
      			<img src="<?php echo IMG_PATH;?>
/zx5.png" alt="" class="tu"/>
      			<p class="active"></p>
      		</li>
      		</a>
      	</ul>
      </div>
       <div class="zhezhao">
   	  	<img src="<?php echo IMG_PATH;?>
/yj-member-fenxiang1.png" alt="" class="tu"/>
   	  	<div class="fen1">
   	  	<span>
   	  	<img src="<?php echo IMG_PATH;?>
/yj-login-qq.png" alt="" class="tu"/></span>
   	  	<span>
   	  	<img src="<?php echo IMG_PATH;?>
/yj-login-weixin.png" alt="" class="tu"/></span></span>
   	  	<span>
   	  	<img src="<?php echo IMG_PATH;?>
/yj-login-weibo.png" alt="" class="tu"/></span></span>
   	  	</div>
   	  </div> 
      </div>
   
    </div>  
  </div>
</div>
<?php echo '<script'; ?>
>	
	mui(".di").on("tap",".di ul li",function(){
		$(".di>ul li p").removeClass("active")
		$(this).children("p").addClass("active");
	})
	mui(".touxiang1").on("tap",".tiao3",function(){
		$(".zhezhao").show();
	})
	/*$(".zhezhao").click(function(){
		$(this).hide();
	})*/

mui(".conn").on("tap",".zhezhao",function(){
    $(".zhezhao").hide();
  })
	
	mui("body").on("tap","a",function(){
		document.location.href=this.href;
	})
	
<?php echo '</script'; ?>
>

<?php }
}
