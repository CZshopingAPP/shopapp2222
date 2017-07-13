<?php
/* Smarty version 3.1.30, created on 2017-07-13 05:37:19
  from "E:\wamp\www\shopapp2222\mvc\template\admin\addcon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5966eaef6984b4_25512915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e07ba762024a66759c2223c50869ce25fb97966' => 
    array (
      0 => 'E:\\wamp\\www\\shopapp2222\\mvc\\template\\admin\\addcon.html',
      1 => 1499916859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5966eaef6984b4_25512915 (Smarty_Internal_Template $_smarty_tpl) {
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
        textarea{
            border-radius: 0.6rem;
        }
    </style>
</head>
<body>
<form action="index.php?m=admin&f=lists&a=add1" method="post" class="">

    <div class="form-group">
        <select name="cid"  class="form-control">
            <option value="0">
                --一级分类--
            </option>
            <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

        </select>
    </div>


    <div class="form-group">
        <label >标题</label>
        <input type="text" class="form-control"  name="stitle" >
    </div>
    <div class="form-group">
        <label >关键词</label>
        <input type="text"  class="form-control" name="keywords" >
    </div>

    <div class="form-group">
        <label style="display: block;">内容详情</label>
        <textarea name="scon" id="" cols="72" rows="10"></textarea>
    </div>
    <div class="form-group uploadbox">

        <label for="">图片</label>

        <div class="uploadBox">
            <img class="" src="" alt="">
            <input type="hidden" name="simage" class="simage">
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
    obj.up("index.php?m=admin&f=lists&a=upload",function (data) {
        document.querySelector(".simage").value=data;
    });
<?php echo '</script'; ?>
>
</html><?php }
}
