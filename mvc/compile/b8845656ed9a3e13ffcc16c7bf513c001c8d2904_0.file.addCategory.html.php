<?php
/* Smarty version 3.1.30, created on 2017-07-11 08:32:26
  from "E:\wamp\www\shopapp2222\mvc\template\admin\addCategory.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596470fa73ef77_28214397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8845656ed9a3e13ffcc16c7bf513c001c8d2904' => 
    array (
      0 => 'E:\\wamp\\www\\shopapp2222\\mvc\\template\\admin\\addCategory.html',
      1 => 1499754745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596470fa73ef77_28214397 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加分类</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap-3.1.1.min.css">
    <style>
        form{
            overflow: hidden;
        }
    </style>
</head>
<body>
<form class="form-horizontal" method="post" action="index.php?m=admin&f=category&a=addCon">
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label" name="rid">所属分类</label>
        <div class="col-sm-10">
            <select name="pid" id="" class="form-control">
                <option value="0">
                    --一级分类--
                </option>
                <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">分类名称</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="username" name="cname">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">添加分类</button>
        </div>
    </div>
</form>
</body>
</html><?php }
}
