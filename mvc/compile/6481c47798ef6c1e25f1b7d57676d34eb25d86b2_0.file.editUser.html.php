<?php
/* Smarty version 3.1.30, created on 2017-07-11 10:49:42
  from "E:\wampserve\wamp\www\shopapp2222\mvc\template\admin\editUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59649126a96cd0_82230871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6481c47798ef6c1e25f1b7d57676d34eb25d86b2' => 
    array (
      0 => 'E:\\wampserve\\wamp\\www\\shopapp2222\\mvc\\template\\admin\\editUser.html',
      1 => 1499762768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59649126a96cd0_82230871 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap-3.1.1.min.css">
</head>
<body>
<form action="index.php?m=admin&f=user&a=editCon" method="post">
    <div class="form-group">
        <label class="yh">用户名</label>
        <input type="text" class="form-control" name="mid" value="<?php echo $_smarty_tpl->tpl_vars['mname']->value;?>
">
    </div>

    <div class="form-group">
        <label >昵称</label>
        <input type="text" class="form-control" name="nicheng" value="<?php echo $_smarty_tpl->tpl_vars['nicheng']->value;?>
">
    </div>
    <div class="form-group">
        <label >角色</label>
        <input type="text" class="form-control" name="mrole" value="<?php echo $_smarty_tpl->tpl_vars['mrole']->value;?>
">

    </div>
    <div class="form-group uploadbox">

        <label >相片</label>

        <div class="uploadBox">
            <!--<img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" alt="">-->
        </div>
    </div>
    <input type="submit" class="gai" value="修改">
    <a href="index.php?m=admin&f=user&a=show">返回</a>
</form>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.min.js"><?php echo '</script'; ?>
>
<!--<?php echo '<script'; ?>
>

        $(".gai").click(function () {
        $nicheng=$("input[name=nicheng]").val();
        $mrole=$("input[name=mrole]").val();
        $.ajax({
            url:"index.php?m=admin&f=user&a=editCon",
            type:"post",
            dataType:"json",
            data:{
                nicheng:$nicheng,mrole:$mrole
            },
            success:function (e) {
                if(e=="ok"){
                    alert("修改成功");location.href="index.php?m=admin&f=user&a=add";
                }
            }
        })
    })
<?php echo '</script'; ?>
>-->
</body>
</html><?php }
}
