<?php
/* Smarty version 3.1.30, created on 2017-07-18 06:34:46
  from "D:\wamp\wamp\www\shopapp2222\mvc\template\index\yj-login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596dac06eb3526_44470851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8597e88b772f458567a8d0834d03635e8232c99c' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\shopapp2222\\mvc\\template\\index\\yj-login.html',
      1 => 1500359685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596dac06eb3526_44470851 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/yj-login.css">
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jQuery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.validate.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/messages_zh.js"><?php echo '</script'; ?>
>
	<style>
		.loginn{
			background-image: url("<?php echo IMG_PATH;?>
/yj-login-login.png");
			background-size: 100%;
			background-position: center;
			border: none;
			border-radius: 0.4rem;
			margin-top: 0.8rem;
		}
		.pass{
			margin-top: -2.65rem;
		}
		.loginn{
			position: absolute;
			left:0;
			right:0;
			bottom:3.8rem;
		}
		
	</style>
</head>
<body>
	<div class="box">
		<div class="shop1"></div>
		<div class="shop"></div>
        
            <div class="login">
                <div class="user">
                    <div class="xuan">
                        <div class="xuan1"></div>
                        <div class="xuan2"></div>
                    </div>
                    <div class="usertitle"></div>
                    <form action="index.php?m=index&f=login&a=willLogin" class="myform" method="post">
                    <input type="text" class="input"  placeholder="您可以输入手机号" name="mname">
                    <input type="password" class="password" placeholder="您可以输入密码" name="mpass">
						<input type="submit" class="loginn" value="">
						</form>
                </div>

                <div class="zc">
                    <div class="zc1">
                        <span></span>
                        <span>找回密码</span>
                    </div>
                    <div class="zc2">
                        <span></span>
						<span><a href="index.php?m=index&f=reg" style="color:#f72f6c" >我要注册</a></span>

                    </div>
                </div>
            </div>


		<div class="tiao"></div>
		<div class="user1"></div>
		<div class="pass"></div>
		<div class="message">
			<div class="message1"></div>
			<span><!--您填写的用户名或密码有误--></span>
		</div>
			<div class="zhezhao"></div>




		
        
		<div class="san">
			<span></span>
			<span></span>
			<span></span>
		</div>
		
			
	</div>
<div class="kong"></div>
</body>
<?php echo '<script'; ?>
 type="text/javascript">

     
	$(".pass").click(function () {
		if($(".input").val()==""){
			$(".pass").disabled();
		}
	})
	$(".pass").click(function(){
		$(".usertitle").css("background-image","url('<?php echo IMG_PATH;?>
/yj-login-userpass.png')");
		$(".input").hide();
		$(".password").show();
		$(this).css("background-image","url('<?php echo IMG_PATH;?>
/yj-login-pass1.png')");
		$(".xuan1").css("width","0.08rem");
		$(".xuan2").css("width","0.19rem");
		$(".message").css("opacity",0)
		$(".message span").children().empty();
	})
	$(".user1").click(function(){
		$(".usertitle").css("background-image","url('<?php echo IMG_PATH;?>
/yj-login-username.png')");
		$(".input").show();
		$(".password").hide();
		$(".xuan2").css("width","0.08rem");
		$(".xuan1").css("width","0.19rem");
		$(".message").css("opacity",0)
		$(".message span").children().empty();
	})
	/*if($(".input").val()==""){
		if($(".password").val()==""){
			$(".loginn").disable();
		}
	}*/
	$(".password").blur(function () {
		if($(".password").val()!=""){
			$(".loginn").css("background-image","url('<?php echo IMG_PATH;?>
/yj-login-login1.png')");
				$(".zhezhao").css("display","none");
		}
	})/*jQuery.validator.addMethod("isMobile", function(value, element) {
	 var length = value.length;
	 var mobile = /^(13[0-9]<?php echo 9;?>
)|(18[0-9]<?php echo 9;?>
)|(14[0-9]<?php echo 9;?>
)|(17[0-9]<?php echo 9;?>
)|(15[0-9]<?php echo 9;?>
)$/;
	 return this.optional(element) || (length == 11 && mobile.test(value));
	 }, "请正确填写您的手机号码");*/

	$(".myform").validate({
		errorLabelContainer:".message span",
		rules: {
			mname: {
				required: true,
				minlength: 11,
				// 自定义方法：校验手机号在数据库中是否存在
				// checkPhoneExist : true,
//				isMobile: true,
			},
			mpass:{
				required:true,
				rangelength:[6,10],

			},


		},
		messages: {
			/*mname: {
				required: "请输入手机号",
				minlength: "确认手机不能小于11个字符",
				isMobile: "请正确填写您的手机号码"
			},*/
		}
	})
    $("input").blur(function(){
    	if($(".message span").children().hasClass("error")){
    		$(".message").css("opacity",1);
    		setTimeout(function(){
	$(".message").css("opacity",0);
	},3000);
    	}
    })
	
  /*  errorLabelContainer:".message span",*/
		
<?php echo '</script'; ?>
>
</html><?php }
}
