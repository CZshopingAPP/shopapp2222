<?php
/* Smarty version 3.1.30, created on 2017-06-30 11:25:48
  from "E:\wamp\www\PHP\mvc\template\admin\editLists.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5956191c1f9b78_74814575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56d37c552cce2b2e45b7f33a7662cfe9805c72dd' => 
    array (
      0 => 'E:\\wamp\\www\\PHP\\mvc\\template\\admin\\editLists.html',
      1 => 1498814743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5956191c1f9b78_74814575 (Smarty_Internal_Template $_smarty_tpl) {
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
<form>

    <div class="form-group">
        <label for="exampleInputEmail1">所属话题</label>
        <input type="text" name="cid" value="<?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">标题</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="stitle" value="<?php echo $_smarty_tpl->tpl_vars['stitle']->value;?>
">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">关键词</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="keywords" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
">

    </div>
    <div class="form-group">
        <textarea name="" id="" cols="30" rows="10"><?php echo $_smarty_tpl->tpl_vars['scon']->value;?>
</textarea>
    </div>
    <div class="form-group uploadbox">

        <label for="exampleInputFile">图片</label>

        <div class="uploadBox">
            <img src="<?php echo $_smarty_tpl->tpl_vars['simage']->value;?>
" alt="">
        </div>

    </div>
</form>
<form action="index.php?m=admin&f=lists&a=editStatus" method="post" class="">
    <input type="hidden" name="sid" value="<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
">
    未审核：<input type="radio" name="status" value="0" <?php if ($_smarty_tpl->tpl_vars['status']->value == 0) {?>checked<?php }?>><br>
    审核中：<input type="radio" name="status" value="1"  <?php if ($_smarty_tpl->tpl_vars['status']->value == 1) {?>checked<?php }?>><br>
    通过：<input type="radio" name="status" value="2"  <?php if ($_smarty_tpl->tpl_vars['status']->value == 2) {?>checked<?php }?>><br>
    <input type="submit" value="修改">
    <a href="index.php?m=admin&f=lists&a=add">返回</a>
</form>
</body>
</html><?php }
}
