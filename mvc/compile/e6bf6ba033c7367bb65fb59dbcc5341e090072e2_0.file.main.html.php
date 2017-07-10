<?php
/* Smarty version 3.1.30, created on 2017-06-30 09:22:06
  from "E:\wamp\www\PHP\mvc\template\admin\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5955fc1e206058_99993332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6bf6ba033c7367bb65fb59dbcc5341e090072e2' => 
    array (
      0 => 'E:\\wamp\\www\\PHP\\mvc\\template\\admin\\main.html',
      1 => 1498806508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5955fc1e206058_99993332 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport"
content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.min.js"><?php echo '</script'; ?>
>
<style>
    html,body{
        width: 100%;
        height: 100%;
    }
    body {
        padding: 0;
        margin: 0;
        overflow: hidden;
        /*background-image: url("../static/img/bg1.jpg");*/
        background-size: cover;
        background-repeat: no-repeat;
    }
    header{
        width: 100%;
        height: 15%;
        border-bottom: 2px solid #000;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 30px;
    }
    .box   {
        width: 100%;
        height: 80%;
    }
    .box .left{
        width: 13%;
        height: 100%;
        float: left;
        border-right: 2px solid #000;
        box-sizing: border-box;
    }
    .box .right{
        float: right;
        width: 87%;
        height: 100%;
    }
    iframe{
        width: 100%;
        height:100%;
    }
    a{
        color: #3d3cff;
    }
</style>
<?php echo '<script'; ?>
>
    $(function () {
        $("li a").click(function () {
            $(this).nextAll("ul").toggle();
        })
        function getNowDate() {
            var date = new Date();
            var sign1 = "-";
            var year = date.getFullYear() // 年
            var month = date.getMonth() + 1; // 月
            var day  = date.getDate(); // 日
            var weekArr = [ '星期日','星期一', '星期二', '星期三', '星期四', '星期五', '星期六'];
            var week = weekArr[date.getDay()];
            // 给一位数数据前面加 “0”
            if (month >= 1 && month <= 9) {
                month = "0" + month;
            }
            if (day >= 0 && day <= 9) {
                day = "0" + day;
            }
            var currentdate = year + sign1 + month + sign1 + day + " " + week;
            return currentdate;
        }
        $(".time").html(getNowDate());
    })
<?php echo '</script'; ?>
>
</head>
<body>
<header>
    <div style="position: absolute;left: 10px;top:6px;font-size: 16px;">日期: <span class="time" style="color: red;"></span></div>
    <span style="position: absolute;right: 100px;top:-6px;"><a href="" target="_blank" style="text-decoration: none;color: #000;font-size: 20px;">「<span style="font-size:16px;color: red">主页</span>」</a></span>
    <strong>欢迎 <span style="font-size:28px;color: red"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</span> 进入新闻管理系统</strong>

    <span style="position: absolute;right: 10px;top:-6px;"><a href="index.php?m=admin&f=login&a=logout" style="text-decoration: none;color: #000;font-size: 20px;">「<span style="font-size:16px;color: red">安全退出</span>」</a></span>
</header>
<div class="box">
    <div class="left">

        <ul>
            <?php if ($_smarty_tpl->tpl_vars['rid']->value == 1) {?>
            <li>
                <a href="javascript:;">用户管理</a>
                <ul>
                    <li class="leftselect">
                        <a href="index.php?m=admin&f=user&a=add" target="baidu">添加用户</a>
                    </li>
                    <li>
                        <a href="showCategory.php" target="baidu">查看用户</a>
                    </li>
                </ul>
            </li>
            <?php }?>
            <li>
                <a href="javascript:;">会员管理</a>
                <ul>
                    <li>
                        <a href="addCon.php" target="baidu">添加会员</a>
                    </li>
                    <li>
                        <a href="showCon.php" target="baidu">查看会员</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;">角色管理</a>
                <ul>
                    <li>
                        <a href="index.php?m=admin&f=role&a=add" target="baidu">添加角色</a>
                    </li>
                    <li>
                        <a href="index.php?m=admin&f=role&a=show" target="baidu">查看角色</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;">分类管理</a>
                <ul>
                    <li>
                        <a href="index.php?m=admin&f=category&a=add" target="baidu">添加分类</a>
                    </li>
                    <li>
                        <a href="index.php?m=admin&f=role&a=show" target="baidu">查看分类</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;">内容管理</a>
                <ul>
                    <li>
                        <a href="index.php?m=admin&f=lists&a=add" target="baidu">添加内容</a>
                    </li>
                    <li>
                        <a href="index.php?m=admin&f=lists&a=add" target="baidu">查看内容</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;">推荐位管理</a>
                <ul>
                    <li>
                        <a href="index.php?m=admin&f=position&a=add" target="baidu">添加位置</a>
                    </li>
                    <li>
                        <a href="index.php?m=admin&f=role&a=show" target="baidu">查看位置</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="right">
        <iframe src="index.php?m=admin&f=welcome&a=wel" frameborder="0" name="baidu"></iframe>
    </div>
</div>
</body>
</html><?php }
}
