<?php
/* Smarty version 3.1.30, created on 2017-07-23 09:29:40
  from "E:\wampserve\wamp\www\shopapp2222\mvc\template\index\footer.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5974506456e2c9_65006069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbb9511df7e700acf78cdebaaa01a4e7d18f96d4' => 
    array (
      0 => 'E:\\wampserve\\wamp\\www\\shopapp2222\\mvc\\template\\index\\footer.html',
      1 => 1499917399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5974506456e2c9_65006069 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
    .swiper-pagination-bullet-active {
        opacity: 1;
        background: #fe158e;
    }

    footer{
        width:100%;
        height:1.1rem;
        background: #FFFFFF;
        margin-top: 0.5rem;
        position: fixed;
        bottom:0;
        z-index:2;
    }
    .foot{
        width:100%;
        height:100%;
        display: flex;
        justify-content: space-around;
    }
    .choose{
        width:0.5rem;
        height:0.05rem;
        border-radius: 0.2rem;
        background: #FF9308;
        position: absolute;
        bottom:0.1rem;
        left:0;
        right:0;
        margin:auto;
        display: none;
    }
    .tts{
        display: block;
    }
    .foot .btn {
        width: 0.94rem;
        height: 100%;
    }

    .foot .btn {
        width: 1rem;
        height: 100%;
    }

    .foot .btn {
        width: 0.94rem;
        height: 100%;
        /*border-radius: 0.2rem;*/
        position: relative;
        margin-top: 0;
    }

    .foot .btn .btu {
        width: 60%;
        height: 60%;
    }

    .foot .btn img {
        width: 48%;
        height: 48%;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
    }
</style>
<footer>
    <div class="foot">
        <div class="btn">
            <a href="index.php?m=index&f=index&a=index1">
                <img src="<?php echo IMG_PATH;?>
/zx2.png" alt="">
                <div class="choose tts"></div>
            </a>
        </div>
        <div class="btn">
            <a href="index.php?m=index&f=sousuo">
                <img src="<?php echo IMG_PATH;?>
/zx3.png" alt="">
                <div class="choose"></div>
            </a>
        </div>
        <div class="btn">
            <a href="#">
                <img src="<?php echo IMG_PATH;?>
/zx1.png" alt="">
                <div class="choose"></div>
            </a>
        </div>
        <div class="btn">
            <a href="#">
                <img src="<?php echo IMG_PATH;?>
/zx4.png" alt="">
                <div class="choose"></div>
            </a>
        </div>
        <div class="btn">
            <a href="index.php?m=index&f=member">
                <img src="<?php echo IMG_PATH;?>
/zx5.png" alt="">
                <div class="choose"></div>
            </a>
        </div>
    </div>
</footer>
</body>
</html><?php }
}
