<?php
/* Smarty version 3.1.30, created on 2017-07-11 08:35:54
  from "E:\wamp\www\shopapp2222\mvc\template\admin\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596471ca8872f3_27410787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75a892378cae027f2c8dbc844d79efe7a104baf2' => 
    array (
      0 => 'E:\\wamp\\www\\shopapp2222\\mvc\\template\\admin\\main.html',
      1 => 1499754952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596471ca8872f3_27410787 (Smarty_Internal_Template $_smarty_tpl) {
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
/base.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.min.js"><?php echo '</script'; ?>
>
    <style>
        html, body {
            width: 100%;
            height: 100%;
        }

        .header {
            width: 100%;
            height: 54px;
            background: #000;
        }

        .time {
            color: #fff;
            text-align: right;
            margin-right: 43px;
            font-size: 16px;
        }

        .neir a {
            display: block;
            float: right;
            width: 88px;
            height: 21px;
            border-radius: 5px;
            font-size: 14px;
            text-align: center;
            color: #fff;
        }

        .neir {
            margin: 6px 0 0 0;
        }

        .logout {
            background: #46b3ff;
            margin-right: 198px;
        }

        .sy {
            background: #ff243a;
            margin-right: 30px;
        }

        .nav {
            width: 100%;
            background: #fff;
            height: 120px;
            text-align: center;
            line-height: 120px;
            color: #46b3ff;
            font-size: 48px;
        }

        .content {
            width: 100%;
            height: 73%;
        }

        .content .left {
            width: 20%;
            float: left;
            height: 100%;
        }

        .content .right {
            width: 80%;
            height: 100%;
            float: right;
            box-sizing: border-box;
            border-left: 2px solid #dededf;
        }

        iframe {
            width: 99%;
            height: 99%;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .midleft {
            width: 80%;
            height: 100%;
            border: 2px solid #eeeeee;
            margin-left: 15%;
        }

        .left-a {
            width: 200px;
            height: 78px;
            border: 1px solid #ccc;
            margin: 8px;
        }

        .shang {
            width: 100%;
            height: 40%;
        }

        .xia {
            width: 100%;
            height: 60%;
        }

        .shang span {
            display: block;
            float: left;
        }

        .shang .shu {
            width: 3px;
            height: 8px;
            background: #000;
            margin: 15px 5px 0 30px;
        }

        .shang .ziti {
            margin-top: 8px;
            color: #747474;
            font-size: 14px;
        }

        .xia span {
            display: block;
            float: left;
        }

        .xia .shu1 {
            width: 3px;
            height: 35px;
            background: #000;
            margin: 5px 5px 0 30px;
        }

        .xia span:nth-child(2) {
            color: #000;
            font-size: 16px;
        }

        .xia span:nth-child(3) {
            color: #949494;
            font-size: 16px;
        }

        .xia span:nth-child(4) {
            margin-left: 20px;
            color: #949494;
            font-size: 30px;
            line-height: 10px;
        }

        .yiji {
            width: 100%;
            background: #5eb5f2;
            font-size: 16px;
            text-align: center;
        }

        .yiji ul {
            background: #fff;
            padding:10px 0;
        }

        .yiji a {
            display: block;
            color: #fff;
        }
        .yiji ul li a {
            width: 90%;
            height:30px;
            color: #929292;
            padding:0 10px;
            font-size: 14px;
            margin:0 auto;
            margin-top: 5px;
            line-height:30px;
        }

        .yiji ul li .xian {
            width: 100%;
            height: 1px;
            background-color: #e5e5e5;
        }
        .tts{
            background: #FF243A;
            box-shadow: 0 10px 20px 6px rgba(0, 0, 0, 0.1);
            transform: translateY(-5px);
        }

    </style>
    <!--<style>
        html,body{
            width: 100%;
            height: 100%;
        }
        body {
            padding: 0;
            margin: 0;
            overflow: hidden;
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
    </style>-->
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
                var day = date.getDate(); // 日
                var weekArr = ['星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'];
                var shijian=date.getTime();
                var week = weekArr[date.getDay()];
                // 给一位数数据前面加 “0”
                if (month >= 1 && month <= 9) {
                    month = "0" + month;
                }
                if (day >= 0 && day <= 9) {
                    day = "0" + day;
                }
                var currentdate = year + sign1 + month + sign1 + day + " " + week+shijian;
                return currentdate;
            }

            $(".time").html(getNowDate());
        })
    <?php echo '</script'; ?>
>
</head>
<body>

<!--<header>
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
</div>-->

<div class="header">
    <div class="time"></div>
    <div class="neir">
        <a href="" class="logout">安全退出</a>
        <a href="" class="sy">首页</a>
    </div>
</div>
<div class="nav">
    欢迎<span>ADMIN</span>光临后台管理系统
</div>
<div class="content">
    <div class="left">
        <div class="midleft">
            <div class="left-a">
                <div class="shang">
                    <span class="shu"></span>
                    <span class="ziti">管理系统</span>
                </div>
                <div class="xia">
                    <span class="shu1"></span>
                    <span>Management</span>
                    <span>SYSTEM</span>
                    <span>...</span>
                </div>
            </div>
            <ul>
                <li class="yiji">
                    <a href="javascript:">
                        <span class="jiazu">分类</span>管理
                        <span class="jiazu">Classified</span>&nbsp;management
                    </a>
                    <ul class="choose">
                        <li><a href="index.php?m=admin&f=category&a=add" target="iframe">添加分类 Add categories</a></li>
                        <li>
                            <div class="xian"></div>
                        </li>
                        <li><a href="index.php?" target="iframe">查看分类 View categories</a></li>
                    </ul>
                </li>

                <li class="yiji">
                    <a href="javascript:">
                        <span class="jiazu">内容</span>管理
                        <span class="jiazu">Content</span>&nbsp;management</a>
                    <ul class="choose">
                        <li><a href="index.php?m=admin&f=category&a=addCon" target="iframe">添加内容 Add content</a></li>
                        <li><a href="addCon.php" target="iframe">查看内容 View content</a></li>
                    </ul>
                </li>
                <li class="yiji">
                    <a href="javascript:">
                        <span class="jiazu">位置</span>管理
                        <span class="jiazu">Position</span>&nbsp;management</a>
                    <ul class="choose">
                        <li><a href="addpos.php" target="iframe">添加位置 Add position</a></li>
                        <li><a href="chaKanpos.php" target="iframe">查看位置 View position</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="right">
        <iframe src="index.php?m=admin&f=welcome&a=wel" frameborder="0" name="iframe"></iframe>
    </div>
</div>
<?php echo '<script'; ?>
>
    var lis=$(".choose li a");
    lis.hover(function () {
        var index=lis.index(this);
        lis.eq(index).addClass("tts");
    }, function () {
        var index=lis.index(this);
        lis.eq(index).removeClass("tts");
    });
<?php echo '</script'; ?>
>
</body>
</html><?php }
}