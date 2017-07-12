<?php
/* Smarty version 3.1.30, created on 2017-07-12 03:36:03
  from "E:\wamp\www\shopapp2222\mvc\template\index\liuyan.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59657d03589348_89674119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c2c97af96645983fdd4f9c58f8aedbd55585a17' => 
    array (
      0 => 'E:\\wamp\\www\\shopapp2222\\mvc\\template\\index\\liuyan.html',
      1 => 1499823022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59657d03589348_89674119 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta charset="UTF-8">
    <title>留言</title>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/liuyan.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
</head>
<body>
	<header>
        <a href="index.php?m=index&f=index&a=index1">
        <div class="back"></div>
        </a>
        <div class="stitle">
        	全部留言
        </div>
    </header>
    <div class="con">
    	<div class="con1">
    		<textarea name="" id="messin" cols="30" rows="10"></textarea>
    		<input type="submit" value="提交" class="submit">
    	</div>
    	<div class="con2">
    		<div class="title">
	    		<div class="head">
	    			<img src="<?php echo IMG_PATH;?>
/yj-reg-p1.png" alt="">
	    		</div>
    			<span class="name">于世芳</span>
    			<span class="time1">12:00</span>
    			<span class="time">2017.07.11</span>
    		</div>
    		<div class="mcon">
    			<p>天气不错，出来溜溜，要一起吗？</p>
    		</div>
    	</div>
    </div>
</body>
</html><?php }
}
