<?php
/* Smarty version 3.1.30, created on 2017-07-17 16:01:34
  from "E:\wampserve\wamp\www\shopapp2222\mvc\template\admin\showUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596cc33e193707_11558016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77ea1da3cd15310c5122e6f7157691a118d7051c' => 
    array (
      0 => 'E:\\wampserve\\wamp\\www\\shopapp2222\\mvc\\template\\admin\\showUser.html',
      1 => 1500300090,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596cc33e193707_11558016 (Smarty_Internal_Template $_smarty_tpl) {
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
<table class="table table-striped">
    <tr>
        <th>mid</th>
        <th>用户名</th>
        <th>昵称</th>
        <th>角色</th>
        <th>头像</th>
        <th>操作</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['v']->value["mid"];?>

        </td>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['v']->value["mname"];?>

        </td>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['v']->value["nicheng"];?>

        </td>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['v']->value["rname"];?>

        </td>
        <td>
            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['photo'];?>
" alt="" style="width: 50px;height: 50px;">
        </td>
        <td>
            <a href="index.php?m=admin&f=user&a=del&mid=<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
">删除</a>

            <a href="index.php?m=admin&f=user&a=edit&mid=<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
">编辑</a>
        </td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
</body>
</html><?php }
}
