<?php
/* Smarty version 3.1.30, created on 2017-06-28 10:35:08
  from "E:\wamp\www\PHP\mvc\template\admin\addRole.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59536a3cd1f404_01092543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b5b0a8973ad48f1baaf0c362b3c4de02a009ee7' => 
    array (
      0 => 'E:\\wamp\\www\\PHP\\mvc\\template\\admin\\addRole.html',
      1 => 1498638907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59536a3cd1f404_01092543 (Smarty_Internal_Template $_smarty_tpl) {
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
</head>
<body>
<form class="form-horizontal" method="post" action="index.php?m=admin&f=role&a=addCon">
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">角色名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="rname" name="rname">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">添加角色</button>
        </div>
    </div>
</form>
</body>
</html><?php }
}
