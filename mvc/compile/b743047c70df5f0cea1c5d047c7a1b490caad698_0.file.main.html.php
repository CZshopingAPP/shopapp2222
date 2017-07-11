<?php
/* Smarty version 3.1.30, created on 2017-07-11 06:01:00
  from "E:\wampserve\wamp\www\shopapp2222\mvc\template\admin\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59644d7c9ac3c0_07781827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b743047c70df5f0cea1c5d047c7a1b490caad698' => 
    array (
      0 => 'E:\\wampserve\\wamp\\www\\shopapp2222\\mvc\\template\\admin\\main.html',
      1 => 1499745615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59644d7c9ac3c0_07781827 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
    <style>
        html, body {
            width: 100%;
            height: 100%;
            overflow: hidden;
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
        }

        .yiji a {
            display: block;
            color: #fff;
        }
        .yiji ul li a {
            width: 100%;
            color: #929292;
            padding: 10px 0;
            font-size: 14px;
        }

        .yiji ul li .xian {
            width: 100%;
            height: 1px;
            background-color: #e5e5e5;
        }
        .yiji:nth-child(1){
            background: #ff243a;
        }
        .active1{
            background: red;
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
                var day = date.getDate(); // 日
                var weekArr = ['星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'];
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
            $(".yiji ul li").click(function () {
                $index=$()
                $(this).filter().removeClass()
            })
        })
    <?php echo '</script'; ?>
>
</head>
<body>

<!--<div class="box">
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
        <a href="index.php?m=admin&f=login&a=logout" class="logout">安全退出</a>
        <a href="index.php?m=index&f=index&a=index1" class="sy">首页</a>
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
                <?php if ($_smarty_tpl->tpl_vars['rid']->value == 1) {?>
                <li class="yiji">
                    <a href="javascript:">
                        <span class="jiazu">用户</span>管理
                        <span class="jiazu">Useruser</span>&nbsp;management
                    </a>
                    <ul>
                        <li>
                            <a href="index.php?m=admin&f=user&a=add" target="baidu">添加用户 Add user</a>
                        </li>
                        <div class="xian"></div>
                        <li>
                            <a href="showCategory.php" target="baidu">查看用户 View user</a>
                        </li>
                    </ul>
                </li>
                <?php }?>

                <li class="yiji">
                    <a href="javascript:">
                        <span class="jiazu">会员</span>管理
                        <span class="jiazu">Member</span>&nbsp;management
                    </a>
                    <ul>
                        <li>
                            <a href="addCon.php" target="baidu">添加会员 Add member</a>
                        </li>
                        <li>
                            <a href="showCon.php" target="baidu">查看会员 View member</a>
                        </li>
                    </ul>
                </li>

                <li class="yiji">
                    <a href="javascript:">
                        <span class="jiazu">角色</span>管理
                        <span class="jiazu">Rolerole</span>&nbsp;management
                    </a>
                    <ul>
                        <li>
                            <a href="index.php?m=admin&f=role&a=add" target="baidu">添加角色 Add role</a>
                        </li>
                        <li>
                            <a href="index.php?m=admin&f=role&a=show" target="baidu">查看角色 View role</a>
                        </li>
                    </ul>
                </li>

                <li class="yiji">
                    <a href="javascript:">
                        <span class="jiazu">分类</span>管理
                        <span class="jiazu">Classified</span>&nbsp;management
                    </a>
                    <ul>
                        <li>
                            <a href="index.php?m=admin&f=category&a=add" target="baidu">添加分类 Add classified</a>
                        </li>
                        <li>
                            <a href="index.php?m=admin&f=role&a=show" target="baidu">查看分类 View classified</a>
                        </li>
                    </ul>
                </li>

                <li class="yiji">
                    <a href="javascript:">
                        <span class="jiazu">内容</span>管理
                        <span class="jiazu">Content</span>&nbsp;management
                    </a>
                    <ul>
                        <li>
                            <a href="index.php?m=admin&f=lists&a=add" target="baidu">添加内容 Add content</a>
                        </li>
                        <li>
                            <a href="index.php?m=admin&f=lists&a=add" target="baidu">查看内容 View content</a>
                        </li>
                    </ul>
                </li>

                <li class="yiji">
                    <a href="javascript:">
                        <span class="jiazu">推荐位</span>管理
                        <span class="jiazu">Position</span>&nbsp;management
                    </a>
                    <ul>
                        <li>
                            <a href="index.php?m=admin&f=position&a=add" target="baidu">添加位置 Add position</a>
                        </li>
                        <li>
                            <a href="index.php?m=admin&f=role&a=show" target="baidu">查看位置 View position</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="right">
        <iframe src="index.php?m=admin&f=welcome&a=wel" frameborder="0" name="baidu"></iframe>
    </div>
</div>
</body>
</html><?php }
}