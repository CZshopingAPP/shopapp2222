<?php
/* Smarty version 3.1.30, created on 2017-07-11 12:40:33
  from "E:\wampserve\wamp\www\shopapp2222\mvc\template\admin\addcon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5964ab21392bc8_56024027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '616ec2fb4c559d47ca0f582f7602bb51d2c5d25e' => 
    array (
      0 => 'E:\\wampserve\\wamp\\www\\shopapp2222\\mvc\\template\\admin\\addcon.html',
      1 => 1499769630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5964ab21392bc8_56024027 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/upload.js"><?php echo '</script'; ?>
>
    <style>
        .form-control{
            width: 50%;
        }
    </style>
</head>
<body>
<form action="" method="post" class="">

    <div class="form-group">
        <label >所属话题</label>
        <input type="text" name="cid" value=""  class="form-control">
    </div>

    <div class="form-group">
        <label >标题</label>
        <input type="text" class="form-control"  name="stitle" value="">
    </div>
    <div class="form-group">
        <label >关键词</label>
        <input type="text"  class="form-control" name="keywords" value="">
    </div>
    <div class="form-group">
        <label >作者</label>
        <input type="text"   class="form-control" name="mname" value="">
    </div>
    <div class="form-group">
        <textarea name="scon" id="" cols="50" rows="10"></textarea>
    </div>
    <div class="form-group uploadbox">

        <label for="">图片</label>

        <div class="uploadBox">
            <img class="simage" src="" alt="">
        </div>

    </div>



    <input type="hidden" name="sid" value="">

    <input type="submit" class="gai" value="提交">
</form>
</body>
<?php echo '<script'; ?>
>

    var obj=new upload();
    obj.createView({
        parent:document.querySelector(".uploadBox")
    })
    obj.up("index.php?m=admin&f=category&a=upload",function (data) {
        document.querySelector(".simage").value=data;
    });
<?php echo '</script'; ?>
>
</html><?php }
}
