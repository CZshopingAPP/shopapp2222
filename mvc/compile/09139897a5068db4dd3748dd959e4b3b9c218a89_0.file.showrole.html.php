<?php
/* Smarty version 3.1.30, created on 2017-07-11 11:08:27
  from "E:\wampserve\wamp\www\shopapp2222\mvc\template\admin\showrole.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5964958b1200f3_55952230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09139897a5068db4dd3748dd959e4b3b9c218a89' => 
    array (
      0 => 'E:\\wampserve\\wamp\\www\\shopapp2222\\mvc\\template\\admin\\showrole.html',
      1 => 1499764103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5964958b1200f3_55952230 (Smarty_Internal_Template $_smarty_tpl) {
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
        <th>rid</th>
        <th>rname</th>
        <th>操作</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['v']->value["rid"];?>

        </td>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['v']->value["rname"];?>

        </td>
        <td>
            <a href="index.php?m=admin&f=role&a=del&mid=<?php echo $_smarty_tpl->tpl_vars['v']->value['rid'];?>
">删除</a>

            <a href="index.php?m=admin&f=role&a=edit&mid=<?php echo $_smarty_tpl->tpl_vars['v']->value['rid'];?>
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
