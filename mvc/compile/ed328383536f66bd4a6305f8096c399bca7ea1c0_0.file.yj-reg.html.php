<?php
/* Smarty version 3.1.30, created on 2017-07-24 03:56:17
  from "E:\wamp\www\shopapp2222\mvc\template\index\yj-reg.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597553c1241ca0_92741990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed328383536f66bd4a6305f8096c399bca7ea1c0' => 
    array (
      0 => 'E:\\wamp\\www\\shopapp2222\\mvc\\template\\index\\yj-reg.html',
      1 => 1500859003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597553c1241ca0_92741990 (Smarty_Internal_Template $_smarty_tpl) {
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
/jquery.min.js"><?php echo '</script'; ?>
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
			bottom: 1.1rem;
			left:0;
			right:0;
		}
		.message{
			width:4.72rem;
		}
       .message span{
		   margin-left: 0.6rem;
		   margin-top: -0.45rem;
	   }
		.message .error{
			position: absolute;
			top: 3.75rem;
			left: 1.4rem;
		}
		.pass{
			margin-top: 1.3rem;
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
			<form action="index.php?m=index&f=login" class="myform" method="post">
			<input type="text" class="user phone" placeholder="请输入手机号码" name="mname">
			<input type="text" class="code" name="code" placeholder="请输入验证码">
			<input type="password" class="pass" placeholder="请输入密码" name="mpass">
			<input type="password" class="pass1" placeholder="请再次输入密码" name="mpass1">
			<div class="huoqu">获取</div>

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
		}else{
						$(".loginn").disable();
						$(".loginn").css("background-image","url('<?php echo IMG_PATH;?>
/yj-reg-reg1.png')");

					}
	})

//		jQuery.validator.addMethod("isMobile", function(value, element) {
//		var length = value.length;
//		var mobile = /^(13[0-9]<?php echo 9;?>
)|(18[0-9]<?php echo 9;?>
)|(14[0-9]<?php echo 9;?>
)|(17[0-9]<?php echo 9;?>
)|(15[0-9]<?php echo 9;?>
)$/;
//		return this.optional(element) || (length == 11 && mobile.test(value));
//	}, "请正确填写您的手机号码");

	$(".myform").validate({
	//	errorLabelContainer:".message span",
		rules: {
			mname: {
				required: true,
				minlength: 11,
				// 自定义方法：校验手机号在数据库中是否存在
				// checkPhoneExist : true,
//				isMobile: true,

			},
			code:{
				required:true,
				digits:true,
				maxlength:4,
				minlength:4,
			},
			mpass:{
				required:true,
				rangelength:[6,10],

			},
			mpass1:{
				equalTo:".pass"
			},
		},
		messages: {
			mname: {
				required: "请输入手机号",
				minlength: "不能小于11个字符",
				isMobile: "请正确填写您的手机号码"
			},
			mpass1:{
                equalTo: "密码输入不一致",
			}
		}
	})
//   if($(".message span").children().hasClass(".error")){
//	   $(".message").css("display","block")
//   }

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	$("input[name='mname']").blur(function () {
		var that=$(this);
	    if($("#mname-error").length==0){

            var ts='<label id="mname-error" class="error" for="mname"></label>';
            that.after(ts);

		}
        var str=$(".myform").serialize();
//
		if(!$(this).val()==""){
            if($("#mname-error").html()=="用户已存在"||$("#mname-error").html()==""){

                $.ajax({
            url:"index.php?m=index&f=reg&a=reg1",
            type:"post",
            data:str,
            success:function(e){
                if(e=="ok"){

                }else {
                    $("#mname-error").html(e).css("display","");
                }

            }
        })
            }
		}




    })

    $("input[name='mpass']"&&"input[name='mpass1']").blur(function () {
        var that=$(this);
        if($("#mname-error").length==0){

            var ts='<label id="mname-error" class="error" for="mname"></label>';
            that.after(ts);

        }
        var str=$(".myform").serialize();
//
        if(!$(this).val()==""){
            if($("#mname-error").html()=="密码不能为空"||$("#mname-error").html()==""){

                $.ajax({
                    url:"index.php?m=index&f=reg&a=reg2",
                    type:"post",
                    data:str,
                    success:function(e){
                        if(e=="ok"){
                            location.href("yj-login.html");
                        }else {
                            $("#mname-error").html(e).css("display","");
                        }

                    }
                })
            }
        }




    })
<?php echo '</script'; ?>
>

</html><?php }
}
