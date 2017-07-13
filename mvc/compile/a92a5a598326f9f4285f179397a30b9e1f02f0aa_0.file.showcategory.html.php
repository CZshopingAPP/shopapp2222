<?php
/* Smarty version 3.1.30, created on 2017-07-13 05:36:49
  from "E:\wamp\www\shopapp2222\mvc\template\admin\showcategory.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5966ead1b1b060_76594380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a92a5a598326f9f4285f179397a30b9e1f02f0aa' => 
    array (
      0 => 'E:\\wamp\\www\\shopapp2222\\mvc\\template\\admin\\showcategory.html',
      1 => 1499916859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5966ead1b1b060_76594380 (Smarty_Internal_Template $_smarty_tpl) {
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
        <th>cid</th>
        <th>cname</th>
        <th>操作</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['v']->value["cid"];?>

        </td>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>

        </td>
        <td>
            <a href="index.php?m=admin&f=category&a=del&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">删除</a>

            <a href="index.php?m=admin&f=category&a=edit&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
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
