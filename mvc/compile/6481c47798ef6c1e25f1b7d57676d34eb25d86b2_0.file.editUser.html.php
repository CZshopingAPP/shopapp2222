<?php
/* Smarty version 3.1.30, created on 2017-07-17 15:43:35
  from "E:\wampserve\wamp\www\shopapp2222\mvc\template\admin\editUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596cbf07eda447_90887231',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6481c47798ef6c1e25f1b7d57676d34eb25d86b2' => 
    array (
      0 => 'E:\\wampserve\\wamp\\www\\shopapp2222\\mvc\\template\\admin\\editUser.html',
      1 => 1500298982,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596cbf07eda447_90887231 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/upload.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap-3.1.1.min.css">
    <style>
        .form-group {
            position: relative;
        }

        .sc {
            position: absolute;
            top: 30px;
            left: 70px;
            color:red;
            cursor: pointer;
        }
    </style>
</head>
<body>

<form action="index.php?m=admin&f=user&a=editCon" method="post">

    <div class="form-group">
        <label class="yh">用户名</label>
        <input type="text" class="form-control" name="" value="<?php echo $_smarty_tpl->tpl_vars['mname']->value;?>
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

    <input type="hidden" class="photo" name="photo">
    <div class="form-group form-group1">
            <label >头像</label>
            <img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" alt=""  style="width: 100px;height: 100px;" >
            <div class="sc">删除</div>
    </div>
    <div class="form-group uploadbox">

    </div>
    <input type="submit" class="gai" value="修改">
    <input type="hidden" name="mid" value="<?php echo $_smarty_tpl->tpl_vars['mid']->value;?>
">
    <a href="index.php?m=admin&f=user&a=show">返回</a>
</form>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.min.js"><?php echo '</script'; ?>
>

</body>
<?php echo '<script'; ?>
>
    var obj=new upload();
    obj.createView({
        parent:document.querySelector(".uploadbox")
    })
    obj.up("index.php?m=admin&f=user&a=upload",function (data) {
        document.querySelector(".photo").value=data;
    });

     var sc=document.querySelector(".sc");

    sc.onclick=function () {
        var ajax=new XMLHttpRequest();
        var mid=document.querySelector("input[name=mid]").value;
        ajax.open("POST","index.php?m=admin&f=user&a=deltx&mid="+mid);
        ajax.setRequestHeader("Content-Type","applaction/X-www-form-urlencoded");
        ajax.send("mid="+mid);
        ajax.onload=function () {
            if(ajax.response=="ok1"){
                sc.parentNode.parentNode.removeChild(sc.parentNode);
            }
        }

    }
<?php echo '</script'; ?>
>
</html><?php }
}
