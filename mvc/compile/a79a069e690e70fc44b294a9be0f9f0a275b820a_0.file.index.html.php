<?php
/* Smarty version 3.1.30, created on 2017-06-27 04:57:36
  from "E:\wamp\www\PHP\mvc\template\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5951c9a080d0e9_37498225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a79a069e690e70fc44b294a9be0f9f0a275b820a' => 
    array (
      0 => 'E:\\wamp\\www\\PHP\\mvc\\template\\index.html',
      1 => 1498531108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5951c9a080d0e9_37498225 (Smarty_Internal_Template $_smarty_tpl) {
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
/bootstrap-3.1.1.min.css">
    <style>
        form {
            width: 300px;
            height: 260px;
            position: fixed;
            left:0;
            top:0;
            right:0;
            bottom:0;
            margin:auto;
            /*border:1px solid #ccc;*/
            text-align: left;
        }
    </style>
</head>
<body>
<form>
    <h3>欢迎登陆</h3>
    <div class="form-group">
        <label name="username">用户名</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="username">
    </div>
    <div class="form-group">
        <label name="pass">密码</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <label name="code">验证码</label>
        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="code">
        <img src="<?php echo IMG_PATH;?>
/code.jpg" alt=""  height="50">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
</form>
</body>
</html><?php }
}
