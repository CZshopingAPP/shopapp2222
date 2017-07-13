<?php
/* Smarty version 3.1.30, created on 2017-07-12 15:29:28
  from "E:\wampserve\wamp\www\shopapp2222\mvc\template\admin\editposition.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59662438c83007_00457943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '109f39fd1b82b0bd3fc6fa24e4a880a8099d3a59' => 
    array (
      0 => 'E:\\wampserve\\wamp\\www\\shopapp2222\\mvc\\template\\admin\\editposition.html',
      1 => 1499866104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59662438c83007_00457943 (Smarty_Internal_Template $_smarty_tpl) {
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

<form action="index.php?m=admin&f=position&a=editCon" method="post">

    <div class="form-group">
        <label class="yh">分类名</label>
        <input type="text" class="form-control" name="posname" value="<?php echo $_smarty_tpl->tpl_vars['posname']->value;?>
">
    </div>

    <input type="submit" class="gai" value="修改">
    <input type="hidden" name="posid" value="<?php echo $_smarty_tpl->tpl_vars['posid']->value;?>
">
    <a href="index.php?m=admin&f=position&a=show">返回</a>
</form>


</body>
</html><?php }
}
