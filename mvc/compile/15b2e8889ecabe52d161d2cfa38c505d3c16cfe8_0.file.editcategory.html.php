<?php
/* Smarty version 3.1.30, created on 2017-07-13 05:36:51
  from "E:\wamp\www\shopapp2222\mvc\template\admin\editcategory.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5966ead34c2045_45146437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15b2e8889ecabe52d161d2cfa38c505d3c16cfe8' => 
    array (
      0 => 'E:\\wamp\\www\\shopapp2222\\mvc\\template\\admin\\editcategory.html',
      1 => 1499916859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5966ead34c2045_45146437 (Smarty_Internal_Template $_smarty_tpl) {
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
