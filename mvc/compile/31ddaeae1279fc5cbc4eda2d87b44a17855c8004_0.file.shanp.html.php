<?php
/* Smarty version 3.1.30, created on 2017-07-10 09:53:12
  from "E:\wampserve\wamp\www\shopapp2222\mvc\template\index\shanp.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596332682c50c2_75006651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31ddaeae1279fc5cbc4eda2d87b44a17855c8004' => 
    array (
      0 => 'E:\\wampserve\\wamp\\www\\shopapp2222\\mvc\\template\\index\\shanp.html',
      1 => 1499659399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596332682c50c2_75006651 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/swiper.min.js"><?php echo '</script'; ?>
>
    <style>
        .box{
            width: 100%;height: 13.34rem;
        }
        .box li{ width: 100%;height: 100%;
        }
       /* .box li:nth-child(1){
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
        }*/
        .active{
            z-index: 2;
        }
    </style>
</head>
<body>
<div class="hjy-banner swiper-container">
    <ul class="swiper-wrapper box">
        <li class="swiper-slide">
            <img src="<?php echo IMG_PATH;?>
/sp111 (1).png" alt="">
        </li>
        <li class="swiper-slide">
            <img src="<?php echo IMG_PATH;?>
/sp111 (2).png" alt="">
        </li>
        <li class="swiper-slide">
            <img src="<?php echo IMG_PATH;?>
/sp111 (3).png" alt="">
        </li>
    </ul>
</div>
</body>
<?php echo '<script'; ?>
>

<?php echo '</script'; ?>
>
</html><?php }
}
