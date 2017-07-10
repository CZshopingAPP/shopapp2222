<?php
/* Smarty version 3.1.30, created on 2017-07-09 17:52:04
  from "E:\wampserve\wamp\www\mvc\template\index\yj-reg.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596251242f8468_93034224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53d0f01afee94952faba9e52df4115fd040a5eb3' => 
    array (
      0 => 'E:\\wampserve\\wamp\\www\\mvc\\template\\index\\yj-reg.html',
      1 => 1499615519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596251242f8468_93034224 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/yj-reg.css">
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
/yj-reg-reg1.png");
			background-size: 100%;
			background-position: center;
			border: none;
			border-radius: 0.4rem;
			/*margin-top: 0.6rem;*/
			position: fixed;
			bottom: 1.5rem;
		}
       .message span{
		   margin-left: 0.6rem;
		   margin-top: -0.45rem;
	   }
	</style>
</head>
<body>
	<div class="box">
		<div class="shop1"></div>
		<div class="shop"></div>
		<div class="reg">
			<div class="reg-title">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
			<form action="" class="myform">
			<input type="text" class="user phone" placeholder="请输入手机号码或邮箱" name="mname">
			<input type="text" class="code" placeholder="请输入验证码">
			<input type="password" class="pass" placeholder="请输入密码" name="mpass">
			<input type="password" class="pass1" placeholder="请再次输入密码" name="mpass1">
			<div class="huoqu">获取</div>

		<div class="message">
			<div class="message1"></div>
			<span></span>
		</div>
		<input type="submit" class="loginn" value="">

		</form>
		</div>
	</div>
</body>
<?php echo '<script'; ?>
>
	$("input").blur(function () {
		if($(".user").val()!=""){
			if($(".code").val()!=""){
				if($(".pass").val()!=""){
					if($(".pass1").val()!=""){
						$(".loginn").css("background-image","url('<?php echo IMG_PATH;?>
/yj-reg-reg.png')")
					}
				}

			}
		}
	})
		jQuery.validator.addMethod("isMobile", function(value, element) {
		var length = value.length;
		var mobile = /^(13[0-9]<?php echo 9;?>
)|(18[0-9]<?php echo 9;?>
)|(14[0-9]<?php echo 9;?>
)|(17[0-9]<?php echo 9;?>
)|(15[0-9]<?php echo 9;?>
)$/;
		return this.optional(element) || (length == 11 && mobile.test(value));
	}, "请正确填写您的手机号码");

	$(".myform").validate({
		errorLabelContainer:".message span",
		rules: {
			/*user: {
				required: true,
				email: true,

			},*/
			mname: {
				required: true,
				minlength: 11,
				// 自定义方法：校验手机号在数据库中是否存在
				// checkPhoneExist : true,
				isMobile: true,
				email:true,
			},
		},
		messages: {
			mname: {
				required: "请输入手机号",
				minlength: "确认手机不能小于11个字符",
				isMobile: "请正确填写您的手机号码"
			},
		}
	})


<?php echo '</script'; ?>
>
</html><?php }
}
