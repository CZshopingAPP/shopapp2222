<?php
/* Smarty version 3.1.30, created on 2017-07-14 04:36:40
  from "E:\wampserve\wamp\www\shopapp2222\mvc\template\admin\showmessage.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59682e38933843_15950436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de7050f49ef97dcc361a3ab37c1756c06f19e57d' => 
    array (
      0 => 'E:\\wampserve\\wamp\\www\\shopapp2222\\mvc\\template\\admin\\showmessage.html',
      1 => 1499998203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59682e38933843_15950436 (Smarty_Internal_Template $_smarty_tpl) {
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
        <th>sid</th>
        <th>mcon</th>
        <th>操作</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['v']->value["sid"];?>

        </td>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['v']->value["mcon"];?>

        </td>
        <td>
            <a href="index.php?m=admin&f=position&a=del&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
">删除</a>

            <a href="index.php?m=admin&f=position&a=edit&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
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
