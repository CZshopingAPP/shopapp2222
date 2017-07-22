<?php
/* Smarty version 3.1.30, created on 2017-07-22 14:53:42
  from "E:\wampserve\wamp\www\shopapp2222\mvc\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59734ad68ce6e5_50856215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0294a8a079550ae12f65a1c3a42011ef926bb00' => 
    array (
      0 => 'E:\\wampserve\\wamp\\www\\shopapp2222\\mvc\\template\\index\\index.html',
      1 => 1500727967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.html' => 1,
  ),
),false)) {
function content_59734ad68ce6e5_50856215 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta charset="UTF-8">
    <title>首页</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/swiper.min.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <style>
        .swiper-pagination-bullet-active {
            opacity: 1;
            background: #fe158e;
        }
        .di{
            width: 100%;
            height: 1.1rem;
            background: #fff;
            position: fixed;
            bottom: 0;
        }
        .di ul{
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: space-around;
        }
        .di ul  li{
            width: 0.49rem;
            height: 0.49rem;
            margin-top: 0.3rem;
            cursor: pointer;
        }
        .di ul a:nth-child(3) li{
            width: 0.93rem;
            height: 0.93rem;
            margin-top: 0.08rem;
        }
        .di ul li p{
            display: block;
            width: 100%;
            height: 0.1rem;
            background: url(<?php echo IMG_PATH;?>
/zx6_03.png);
            background-position: center;
            background-size: 100%;
            background-repeat: no-repeat;
            margin-top: 0.05rem;
            display: none;
        }
        .di .active{
            display: block;
        }
        .tu{
            width: 100%;
            height:100%;
            float: left;
        }

    </style>
</head>
<body>
<header>
    <div class="hjy-sao"></div>
    <div class="hjy-head">
        <img src="<?php echo IMG_PATH;?>
/03.png" alt="">
    </div>
    <div class="hjy-ms"></div>
    <div class="hjy-i">
        <input type="text" class="hjy-in" placeholder="Search ur Cloth....">
        <img src="<?php echo IMG_PATH;?>
/dian.png" alt="" class="t2">
        <img src="<?php echo IMG_PATH;?>
/po.png" alt="" class="t">
        <img src="<?php echo IMG_PATH;?>
/huatong.png" alt="" class="t1">
    </div>
    <div class="hjy-banner swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo IMG_PATH;?>
/banner.png" alt="">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo IMG_PATH;?>
/banner1.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo IMG_PATH;?>
/banner2.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo IMG_PATH;?>
/banner3.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo IMG_PATH;?>
/banner4.jpg" alt="">
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="hjy-title">
        <div class="top">
            <div class="tleft">
                <span>ATRIBUTE&nbsp&nbsp&nbspTOXXI</span>
                <i>拍照试衣选择最合适的...</i>
            </div>
            <div class="tright">
                <i>25335</i>
                <img src="<?php echo IMG_PATH;?>
/15.png" alt="">
            </div>
            <div class="bottom">
                <div class="bleft">
                    <img src="<?php echo IMG_PATH;?>
/banner.png" alt="">
                    <span>JIM.GREEN</span>
                    <em>纽约设计大师</em>
                </div>
                <div class="bright">
                    <img src="<?php echo IMG_PATH;?>
/19.png" alt="">
                    <span>1:10</span>
                </div>
                <div class="b1">
                    <img src="<?php echo IMG_PATH;?>
/22.png" alt="">
                    <span>11540</span>
                </div>
            </div>
        </div>
    </div>
    <div class="hjy-title1"></div>
</header>
<div class="content">
    <div class="content1">
        <div class="kong"></div>
        <div class="hjy-con">
            <ul>
                <li>
                    <a href="index.php?m=index&f=luntan">
                        <img src="<?php echo IMG_PATH;?>
/luntan.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="index.php?m=index&f=sousuo">
                        <img src="<?php echo IMG_PATH;?>
/zhibo.png" alt="">
                    </a>
                </li>
                <li>
                    <img src="<?php echo IMG_PATH;?>
/qianbao.png" alt="">
                </li>
                <li>
                    <a href="index.php?m=index&f=member">
                        <img src="<?php echo IMG_PATH;?>
/geren.png" alt="">
                    </a>
                </li>
            </ul>
        </div>
        <div class="con">
            <ul>
                <li>
                    <span>论坛</span>
                    <i>FOROM</i>
                </li>
                <li>
                    <span>搜索</span>
                    <i>SEARCH</i>
                </li>
                <li>
                    <span>签到</span>
                    <i>SIGNED</i>
                </li>
                <li>
                    <span>中心</span>
                    <i>CENTER</i>
                </li>
            </ul>
        </div>
        <div class="hjy-title2">
            <div class="title2">
                <span class="ti1">BESTELLRES</span>
                <img src="<?php echo IMG_PATH;?>
/t.png" alt="">
                <span class="ti2">爱时尚</span>
                <span class="di"></span>
                <span class="ti3">爱尚品</span>
            </div>
        </div>
        <div class="sp">
            <div class="s1"></div>
            <div class="s2">
                <span class="st">NEW ARRIVAL</span>
                <span class="st1">专属</span>
                <span class="st2">X</span>
                <span class="st3">定制</span>
            </div>
            <div class="s3">
                <div class="shp">
                    <img src="<?php echo IMG_PATH;?>
/sp.png" alt="">
                </div>
                <div class="shp1">
                    <div class="shp-1">
                        <span>拍照要选择最合适的...</span>
                    </div>
                    <div class="shp-2">
                        <div class="dj">
                            <img src="<?php echo IMG_PATH;?>
/xx.png" alt="">
                            <img src="<?php echo IMG_PATH;?>
/xx.png" alt="">
                            <img src="<?php echo IMG_PATH;?>
/xx.png" alt="">
                            <img src="<?php echo IMG_PATH;?>
/xx.png" alt="">
                        </div>
                        <div class="gz">
                                <span>
                                    <img src="<?php echo IMG_PATH;?>
/xing.png" alt="">
                                </span>
                        </div>
                    </div>
                </div>
                <div class="shp2">
                    <div class="shp2-1">
                        <div class="tx">
                            <img src="<?php echo IMG_PATH;?>
/sp11.png" alt="">
                        </div>
                    </div>
                    <div class="shp2-2">
                        <span class="sp-2">JIM.GIMGREEN</span>
                        <span class="sp-3">纽约</span>
                        <span class="sp-4">设计大师</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="sp">
            <div class="s1"></div>
            <div class="s2">
                <span class="st">NEW ARRIVAL</span>
                <span class="st1">专属</span>
                <span class="st2">X</span>
                <span class="st3">定制</span>
            </div>
            <div class="s3">
                <div class="shp">
                    <img src="<?php echo IMG_PATH;?>
/sp.png" alt="">
                </div>
                <div class="shp1">
                    <div class="shp-1">
                        <span>拍照要选择最合适的...</span>
                    </div>
                    <div class="shp-2">
                        <div class="dj">
                            <img src="<?php echo IMG_PATH;?>
/xx.png" alt="">
                            <img src="<?php echo IMG_PATH;?>
/xx.png" alt="">
                            <img src="<?php echo IMG_PATH;?>
/xx.png" alt="">
                            <img src="<?php echo IMG_PATH;?>
/xx.png" alt="">
                        </div>
                        <div class="gz">
                                <span>
                                    <img src="<?php echo IMG_PATH;?>
/xing.png" alt="">
                                </span>
                        </div>
                    </div>
                </div>
                <div class="shp2">
                    <div class="shp2-1">
                        <div class="tx">
                            <img src="<?php echo IMG_PATH;?>
/sp11.png" alt="">
                        </div>
                    </div>
                    <div class="shp2-2">
                        <span class="sp-2">JIM.GIMGREEN</span>
                        <span class="sp-3">纽约</span>
                        <span class="sp-4">设计大师</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="sp">
            <div class="s1"></div>
            <div class="s2">
                <span class="st">NEW ARRIVAL</span>
                <span class="st1">专属</span>
                <span class="st2">X</span>
                <span class="st3">定制</span>
            </div>
            <div class="s3">
                <div class="shp">
                    <img src="<?php echo IMG_PATH;?>
/sp.png" alt="">
                </div>
                <div class="shp1">
                    <div class="shp-1">
                        <span>拍照要选择最合适的...</span>
                    </div>
                    <div class="shp-2">
                        <div class="dj">
                            <img src="<?php echo IMG_PATH;?>
/xx.png" alt="">
                            <img src="<?php echo IMG_PATH;?>
/xx.png" alt="">
                            <img src="<?php echo IMG_PATH;?>
/xx.png" alt="">
                            <img src="<?php echo IMG_PATH;?>
/xx.png" alt="">
                        </div>
                        <div class="gz">
                                <span>
                                    <img src="<?php echo IMG_PATH;?>
/xing.png" alt="">
                                </span>
                        </div>
                    </div>
                </div>
                <div class="shp2">
                    <div class="shp2-1">
                        <div class="tx">
                            <img src="<?php echo IMG_PATH;?>
/sp11.png" alt="">
                        </div>
                    </div>
                    <div class="shp2-2">
                        <span class="sp-2">JIM.GIMGREEN</span>
                        <span class="sp-3">纽约</span>
                        <span class="sp-4">设计大师</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="sp">
            <div class="s1"></div>
            <div class="s2">
                <span class="st">NEW ARRIVAL</span>
                <span class="st1">专属</span>
                <span class="st2">X</span>
                <span class="st3">定制</span>
            </div>
            <div class="s3">
                <div class="shp">
                    <img src="<?php echo IMG_PATH;?>
/sp.png" alt="">
                </div>
                <div class="shp1">
                    <div class="shp-1">
                        <span>拍照要选择最合适的...</span>
                    </div>
                    <div class="shp-2">
                        <div class="dj">
                            <img src="<?php echo IMG_PATH;?>
/xx.png" alt="">
                            <img src="<?php echo IMG_PATH;?>
/xx.png" alt="">
                            <img src="<?php echo IMG_PATH;?>
/xx.png" alt="">
                            <img src="<?php echo IMG_PATH;?>
/xx.png" alt="">
                        </div>
                        <div class="gz">
                                <span>
                                    <img src="<?php echo IMG_PATH;?>
/xing.png" alt="">
                                </span>
                        </div>
                    </div>
                </div>
                <div class="shp2">
                    <div class="shp2-1">
                        <div class="tx">
                            <img src="<?php echo IMG_PATH;?>
/sp11.png" alt="">
                        </div>
                    </div>
                    <div class="shp2-2">
                        <span class="sp-2">JIM.GIMGREEN</span>
                        <span class="sp-3">纽约</span>
                        <span class="sp-4">设计大师</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="gd">
        <img src="<?php echo IMG_PATH;?>
/ZI.png" alt="">
    </div>
    <div class="love">
        <div class="ltitle">
            <img src="<?php echo IMG_PATH;?>
/love.png" alt="">
        </div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <div class="lo">
            <div class="lo-l">
                <a href="index.php?m=index&f=detils&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['simage'];?>
" alt="" name="simage">
                </a>
            </div>
            <div class="lo-r">
                <img src="<?php echo IMG_PATH;?>
/hot.png" alt="" class="hot">
                <div class="love1">
                    <span name="stitle"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</span>
                </div>
                <div class="love2">
                    <span class="lt" name="yutitle"><?php echo $_smarty_tpl->tpl_vars['v']->value["yutitle"];?>
</span>
                    <div class="sc">
                        <img src="<?php echo IMG_PATH;?>
/xing1.png" alt="">
                        <span>已收藏</span>
                    </div>
                    <div class="man">
                        <img src="<?php echo IMG_PATH;?>
/ren.png" alt="">
                        <span>12546</span>
                    </div>
                    <div class="zt">已购买</div>
                </div>
                <div class="love3">
                    <img src="<?php echo IMG_PATH;?>
/xx.png" alt="">
                    <img src="<?php echo IMG_PATH;?>
/xx.png" alt="">
                    <img src="<?php echo IMG_PATH;?>
/xx.png" alt="">
                    <img src="<?php echo IMG_PATH;?>
/xx.png" alt="">
                    <span name="pingfen"><?php echo $_smarty_tpl->tpl_vars['v']->value["pingfen"];?>
分</span>
                    <em name="price"><?php echo $_smarty_tpl->tpl_vars['v']->value["price"];?>
 RMB</em>
                </div>
            </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    </div>
    <div class="k"></div>
    <div class="di">
        <ul>
            <a href="index.php?m=index&f=index&a=index1"><li>
                <img src="<?php echo IMG_PATH;?>
/zx2.png" alt="" class="tu"/>
                <p  class="active"></p>
            </li>
            </a>
            <a href="#"><li>
                <img src="<?php echo IMG_PATH;?>
/zx3.png" alt="" class="tu"/>
                <p></p>
            </li>
            </a>
            <a href="#"><li>
                <img src="<?php echo IMG_PATH;?>
/zx1.png" alt="" class="tu"/>
                <p></p>
            </li>
            </a>
            <a href="#"><li>
                <img src="<?php echo IMG_PATH;?>
/zx4.png" alt="" class="tu"/>
                <p></p>
            </li>
            </a>
            <a href="index.php?m=index&f=member"><li>
                <img src="<?php echo IMG_PATH;?>
/zx5.png" alt="" class="tu"/>
                <p></p>
            </li>
            </a>
        </ul>
    </div>
</div>

<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery-1.11.3.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/swiper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(function () {
        var mySwiper = new Swiper('.swiper-container', {
            autoplay: 2000,//可选选项，自动滑动
            loop: true,//可选选项，开启循环
            pagination: '.swiper-pagination',
            paginationClickable: true,
            autoplayDisableOnInteraction: false,
            mousewheelControl: true
        });
    })
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var btn = $(".btn");
    var choose = $(".choose");
    btn.click(function () {
        var index = btn.index(this);
        choose.filter(".tts").removeClass("tts").end().eq(index).addClass("tts");
    })
<?php echo '</script'; ?>
>
<!--<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
--><?php }
}
