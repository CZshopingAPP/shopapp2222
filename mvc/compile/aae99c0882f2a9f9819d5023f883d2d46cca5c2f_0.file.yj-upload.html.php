<?php
/* Smarty version 3.1.30, created on 2017-07-24 03:07:41
  from "E:\wampserve\wamp\www\shopapp2222\mvc\template\index\yj-upload.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5975485de57098_55490027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aae99c0882f2a9f9819d5023f883d2d46cca5c2f' => 
    array (
      0 => 'E:\\wampserve\\wamp\\www\\shopapp2222\\mvc\\template\\index\\yj-upload.html',
      1 => 1500797479,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5975485de57098_55490027 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>上传头像</title>
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/yj-upload.css">
	<?php echo '<script'; ?>
 src="js/upload11.js"><?php echo '</script'; ?>
>
</head>
<body>
<h2>上传头像</h2>
<div class="box">
	<div class="uploadBox" name="upload">

     </div>
 </div>
</body>
<?php echo '<script'; ?>
>
	 var obj = new upload();
        obj.size = 1024 * 1024*10;
        obj.selectBtnStyle.background = "red";
       
        obj.createView({
            parent: document.querySelector(".uploadBox")
        });
        obj.up("filecon.php",function (data){
            console.log(data);
            document.querySelector(".img").value=data;
        });
<?php echo '</script'; ?>
>
</html><?php }
}
