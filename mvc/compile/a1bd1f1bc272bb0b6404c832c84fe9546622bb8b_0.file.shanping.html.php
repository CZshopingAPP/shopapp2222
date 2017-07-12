<?php
<<<<<<< HEAD
/* Smarty version 3.1.30, created on 2017-07-12 03:08:29
=======
/* Smarty version 3.1.30, created on 2017-07-12 03:17:27
>>>>>>> d255588feef48724e7310c1f3733aed7060eddfc
  from "E:\wamp\www\shopapp2222\mvc\template\index\shanping.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
<<<<<<< HEAD
  'unifunc' => 'content_5965768de0d860_86692066',
=======
  'unifunc' => 'content_596578a73665e0_50405494',
>>>>>>> d255588feef48724e7310c1f3733aed7060eddfc
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1bd1f1bc272bb0b6404c832c84fe9546622bb8b' => 
    array (
      0 => 'E:\\wamp\\www\\shopapp2222\\mvc\\template\\index\\shanping.html',
<<<<<<< HEAD
      1 => 1499821586,
=======
      1 => 1499761054,
>>>>>>> d255588feef48724e7310c1f3733aed7060eddfc
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_5965768de0d860_86692066 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_596578a73665e0_50405494 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> d255588feef48724e7310c1f3733aed7060eddfc
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/swiper.min.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/swiper.min.js"><?php echo '</script'; ?>
>
    <title>闪屏</title>
    <style>
        .swiper-container{
            width: 100%;
            height: 100%;
        }
        .swiper-slide{
            width: 100%;
            height: 100%;
        }
        .swiper-slide img{
            width: 100%;
            height: 100%;
        }
        .swiper-pagination-bullet-active{
            opacity: 1;
            background: #fe158e;
        }
    </style>
    <?php echo '<script'; ?>
>
        $(function () {
            var mySwiper = new Swiper('.swiper-container', {
                loop:false,
                pagination : '.swiper-pagination',
            })
        })
    <?php echo '</script'; ?>
>
</head>
<body>
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="<?php echo IMG_PATH;?>
/sp111 (1).png" alt="">
        </div>
        <div class="swiper-slide">
            <img src="<?php echo IMG_PATH;?>
/sp111 (2).png" alt="">
        </div>
        <div class="swiper-slide">
            <a href="index.php?m=index&f=index&a=login1"><img src="<?php echo IMG_PATH;?>
/sp111 (3).png" alt=""></a>

        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>
</body>
</html><?php }
}
