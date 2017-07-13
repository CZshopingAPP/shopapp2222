<?php
/* Smarty version 3.1.30, created on 2017-07-12 15:24:05
  from "E:\wampserve\wamp\www\shopapp2222\mvc\template\admin\editcategory.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596622f6000432_17238838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c29006b292c30dea020beb921bd8bedcfe47f80a' => 
    array (
      0 => 'E:\\wampserve\\wamp\\www\\shopapp2222\\mvc\\template\\admin\\editcategory.html',
      1 => 1499865843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596622f6000432_17238838 (Smarty_Internal_Template $_smarty_tpl) {
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

<form action="index.php?m=admin&f=category&a=editCon" method="post">

    <div class="form-group">
        <label class="yh">分类名</label>
        <input type="text" class="form-control" name="cname" value="<?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
">
    </div>

    <input type="submit" class="gai" value="修改">
    <input type="hidden" name="cid" value="<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
">
    <a href="index.php?m=admin&f=category&a=show">返回</a>
</form>


</body>
</html><?php }
}
