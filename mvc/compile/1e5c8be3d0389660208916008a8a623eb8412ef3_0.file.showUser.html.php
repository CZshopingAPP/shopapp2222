<?php
/* Smarty version 3.1.30, created on 2017-07-13 05:36:30
  from "E:\wamp\www\shopapp2222\mvc\template\admin\showUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5966eabe16b505_94107202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e5c8be3d0389660208916008a8a623eb8412ef3' => 
    array (
      0 => 'E:\\wamp\\www\\shopapp2222\\mvc\\template\\admin\\showUser.html',
      1 => 1499916859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5966eabe16b505_94107202 (Smarty_Internal_Template $_smarty_tpl) {
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
        <th>相片</th>
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
            <?php echo $_smarty_tpl->tpl_vars['v']->value["mrole"];?>

        </td>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['v']->value["photo"];?>

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
