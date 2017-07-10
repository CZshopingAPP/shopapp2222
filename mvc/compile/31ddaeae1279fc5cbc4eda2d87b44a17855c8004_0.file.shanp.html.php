<?php
/* Smarty version 3.1.30, created on 2017-07-10 05:35:50
  from "E:\wampserve\wamp\www\shopapp2222\mvc\template\index\shanp.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5962f616eed878_82254168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31ddaeae1279fc5cbc4eda2d87b44a17855c8004' => 
    array (
      0 => 'E:\\wampserve\\wamp\\www\\shopapp2222\\mvc\\template\\index\\shanp.html',
      1 => 1499657750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5962f616eed878_82254168 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>闪屏</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <style>
        .box{
            width: 100%;height: 13.34rem;
            position: relative;
        }
        .box li{ width: 100%;height: 100%;
            position: absolute;
            left: 0;top: 0;
        }
        .box li:nth-child(1){
            background: url("<?php echo IMG_PATH;?>
/sp111 (1).png");
            background-position: center;
            background-size: 100%;
            background-repeat: no-repeat;
        }
        .box li:nth-child(2){
            background: url("<?php echo IMG_PATH;?>
/sp111 (2).png");
            background-position: center;
            background-size: 100%;
            background-repeat: no-repeat;
        }
        .box li:nth-child(3){
            background: url("<?php echo IMG_PATH;?>
/sp111 (3).png");
            background-position: center;
            background-size: 100%;
            background-repeat: no-repeat;
        }
        .active{
            z-index: 2;
        }
    </style>
</head>
<body>
<ul class="box">
    <li></li>
    <li></li>
    <li></li>
</ul>
</body>
</html><?php }
}
