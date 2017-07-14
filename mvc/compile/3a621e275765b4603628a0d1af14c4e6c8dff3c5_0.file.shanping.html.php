<?php
/* Smarty version 3.1.30, created on 2017-07-14 16:01:50
  from "E:\wampserve\wamp\www\shopapp2222\mvc\template\index\shanping.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5968cece969d06_70339684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a621e275765b4603628a0d1af14c4e6c8dff3c5' => 
    array (
      0 => 'E:\\wampserve\\wamp\\www\\shopapp2222\\mvc\\template\\index\\shanping.html',
      1 => 1500040909,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5968cece969d06_70339684 (Smarty_Internal_Template $_smarty_tpl) {
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
        .quan{
            width: 100%;height: 100%;
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
            <a href="index.php?m=index&f=index&a=login1" class="quan swiper-slide">
                <img src="<?php echo IMG_PATH;?>
/sp111 (3).png" alt="">
            </a>

        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>
</body>
</html><?php }
}
