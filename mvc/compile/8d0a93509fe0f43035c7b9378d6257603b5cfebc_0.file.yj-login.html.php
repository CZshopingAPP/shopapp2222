<?php
/* Smarty version 3.1.30, created on 2017-07-09 17:51:32
  from "E:\wampserve\wamp\www\mvc\template\index\yj-login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59625104189110_31591834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d0a93509fe0f43035c7b9378d6257603b5cfebc' => 
    array (
      0 => 'E:\\wampserve\\wamp\\www\\mvc\\template\\index\\yj-login.html',
      1 => 1499615491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59625104189110_31591834 (Smarty_Internal_Template $_smarty_tpl) {
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
			margin-top: 0.6rem;
		}
		.pass{
			margin-top: -2.45rem;
		}
	</style>
</head>
<body>
	<div class="box">
		<div class="shop1"></div>
		<div class="shop"></div>
        <form action="index.php?m=index&f=login&a=login1" method="post" id="login-form">
            <div class="login">
                <div class="user">
                    <div class="xuan">
                        <div class="xuan1"></div>
                        <div class="xuan2"></div>
                    </div>
                    <div class="usertitle"></div>
                    <input type="text" class="input" placeholder="您可以输入邮箱或手机号" name="mname" id="account">

					<!--<label for="" class="error" id="account-error"></label>-->

                    <input type="password" class="password" placeholder="您可以输入密码" name="mpass">
                </div>
                <div class="zc">
                    <div class="zc1">
                        <span></span>
                        <span>找回密码</span>
                    </div>
                    <div class="zc2">
                        <span></span>
                        <span><a href="index.php?m=index&f=index&a=reg1" style="color:#f72f6c">我要注册</a></span>

                    </div>
                </div>
            </div>

		<div class="tiao"></div>
		<div class="user1"></div>
		<div class="pass"></div>
		<div class="message">
			<div class="message1"></div>
		</div>

			<input type="submit" class="loginn" value="">

        </form>
		
        
		<div class="san">
			<span></span>
			<span></span>
			<span></span>
		</div>

	</div>
</body>
<?php echo '<script'; ?>
>
    $(function() {
        $(".pass").click(function () {
            if ($(".input").val() == "") {
                $(".pass").disabled();
            }
        })
        $(".pass").click(function () {
            $(".usertitle").css("background-image", "url('<?php echo IMG_PATH;?>
/yj-login-userpass.png')");
            $(".input").hide();
            $(".password").show();
            $(this).css("background-image", "url('<?php echo IMG_PATH;?>
/yj-login-pass1.png')");
            $(".xuan1").css("width", "0.08rem");
            $(".xuan2").css("width", "0.19rem");
        })
        $(".user1").click(function () {
            $(".usertitle").css("background-image", "url('<?php echo IMG_PATH;?>
/yj-login-username.png')");
            $(".input").show();
            $(".password").hide();
            $(".xuan2").css("width", "0.08rem");
            $(".xuan1").css("width", "0.19rem");
        })

	$(".password").blur(function () {
        if($(".password").val() != ""){
			$(".loginn").css("background-image","url('<?php echo IMG_PATH;?>
/yj-login-login1.png')")
        }
	})

		/*$(".input").blur(function () {
            $(".message").css("display","block");
            $(".input").removeClass("error");
        })*/



        $("#login-form").validate({
            rules:{
                mname:{
                    required:true,minlength:6,
                    remote:{
                        //url:"checkname.php",
                        type:"post",
                        dataType:"json",
                        data:{
                            mname:function () {
                                return $("").val();
                            }
                        }
                    }
                },
                mpass:{
                    required:true,minlength:6
                }
            },
            messages:{
                mname:{
                    required:"必填",minlength:"必须是手机号或邮箱",
                },
                mpass:{
                    required:"必填",minlength:"密码不能少于6位"
                }
            }
        })
		
		$(".input").removeClass("error");
		
		
		})
<?php echo '</script'; ?>
>
</html><?php }
}
