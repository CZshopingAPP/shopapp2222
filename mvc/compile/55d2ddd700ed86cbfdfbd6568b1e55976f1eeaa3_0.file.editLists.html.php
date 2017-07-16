<?php
/* Smarty version 3.1.30, created on 2017-07-15 12:11:15
  from "E:\wampserve\wamp\www\shopapp2222\mvc\template\admin\editLists.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5969ea438ab437_61381408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55d2ddd700ed86cbfdfbd6568b1e55976f1eeaa3' => 
    array (
      0 => 'E:\\wampserve\\wamp\\www\\shopapp2222\\mvc\\template\\admin\\editLists.html',
      1 => 1500107109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5969ea438ab437_61381408 (Smarty_Internal_Template $_smarty_tpl) {
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
<form action="index.php?m=admin&f=lists&a=editStatus" method="post" class="">
    <div class="form-group">
        <select name="cid"  class="form-control">
            <option value="0">
                --一级分类--
            </option>
            <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

        </select>
    </div>

    <div class="form-group">
        <label >推荐位</label>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result2']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['v']->value["posname"];?>
 <input type="checkbox"  name="posid" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['posid'];?>
" >
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">正文标题</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="stitle" value="<?php echo $_smarty_tpl->tpl_vars['stitle']->value;?>
">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">英语标题</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="yutitle" value="<?php echo $_smarty_tpl->tpl_vars['yutitle']->value;?>
">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">关键词</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="keywords" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
">

    </div>
    <div class="form-group">
        <textarea name="scon" id="" cols="30" rows="10"><?php echo $_smarty_tpl->tpl_vars['scon']->value;?>
</textarea>
    </div>
    <div class="form-group uploadbox">

        <label for="exampleInputFile">图片</label>

        <div class="uploadBox">
            <img class="simage" src="<?php echo $_smarty_tpl->tpl_vars['simage']->value;?>
" alt="" style="width: 50px;height: 50px;">
        </div>

    </div>
    <div class="form-group uploadbox">

        <label for="">详情展示图片</label>

        <div class="uploadBox">
            <img class="simage" src="<?php echo $_smarty_tpl->tpl_vars['simages']->value;?>
" alt="" style="width: 50px;height: 50px;">
        </div>

    </div>
    <!--<input type="submit" value="修改内容">-->


    <input type="hidden" name="sid" value="<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
">



    <input type="submit" class="gai" value="修改">
    <a href="index.php?m=admin&f=lists&a=add">返回</a>
</form>
</body>
</html><?php }
}
