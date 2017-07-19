<?php
/* Smarty version 3.1.30, created on 2017-07-19 06:53:21
  from "E:\wampserve\wamp\www\shopapp2222\mvc\template\admin\xzzlistsAdd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596ee5c12b2019_74807357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '044ec948fd87ed67b9ec0866168c749ffccfdd1d' => 
    array (
      0 => 'E:\\wampserve\\wamp\\www\\shopapp2222\\mvc\\template\\admin\\xzzlistsAdd.html',
      1 => 1500439999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596ee5c12b2019_74807357 (Smarty_Internal_Template $_smarty_tpl) {
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
    <style>
        th,td,tr{
            text-align: center;
        }
    </style>
</head>
<body>

<table class="table table-striped">
    <tr>
        <th>sid</th>
        <th>所属分类</th>
        <th>推荐位</th>
        <th>正文标题</th>
        <th>英语标题</th>
        <th>关键词</th>
        <th>发表时间</th>
        <th>缩略图</th>
        <th>内容</th>
        <th>操作</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["sid"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["posname"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["yutitle"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["keywords"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["stime"];?>
</td>
     <td ><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['simage'];?>
" alt="" style="width: 50px;height: 50px;"></td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["scon"];?>
</td>
        <td>
            <a href="index.php?m=admin&f=lists&a=del&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
">删除</a>
            <a href="index.php?m=admin&f=lists&a=edit&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
&posid=<?php echo $_smarty_tpl->tpl_vars['v']->value['posid'];?>
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
