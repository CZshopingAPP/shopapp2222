<?php
/* Smarty version 3.1.30, created on 2017-07-11 02:58:06
  from "E:\wampserve\wamp\www\shopapp2222\mvc\template\admin\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5964229e35c160_73162777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d175300c78577c7b44949b4e5565572fadea7a6' => 
    array (
      0 => 'E:\\wampserve\\wamp\\www\\shopapp2222\\mvc\\template\\admin\\index.html',
      1 => 1499734685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5964229e35c160_73162777 (Smarty_Internal_Template $_smarty_tpl) {
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
        body,html{
            width: 100%;height: 100%;
            background: url("<?php echo CSS_PATH;?>
/xzz1.png");
            background-repeat: no-repeat;
            background-size: 100%;
            background-position: center;
        }
        form{
            width:300px;
            height:380px;
            position: fixed;
            left:0;top:0;right:0;
            bottom: 0;margin:auto;
            border-radius: 5px;
            border:1px solid #ccc;
            box-shadow: 0 0 5px #222;
            padding: 10px;
            background: #fff;
        }
        form h3{
            text-align: center;
        }
        canvas{
            position: absolute;
            left:0;top:0;
        }
        div{
            position: relative;
        }
        .message{
            padding: 5px;
            color: lime;
        }
    </style>
    <?php echo '<script'; ?>
>
        window.onload=function(){
            var canvas=document.getElementsByTagName("canvas")[0];
            var cobj=canvas.getContext("2d");
            var one=document.querySelector(".c");
            var two=document.querySelector(".zhuti");
            var message=document.querySelector(".message");
            /*1.  将两个图形绘制到画布当中
             a.  定义验证区间
             */
            var width=224;
            var height=70;
            var sourceW=(height/1130)*1698;
            var sourceX=canvas.getAttribute("position");
            canvas.width=width;
            canvas.height=height;
            cobj.drawImage(one,0,0,1125,352,0,0,width,height);
            cobj.globalCompositeOperation="destination-in";
            cobj.drawImage(two,0,0,1698,1130,sourceX,0,sourceW,height);
            cobj.shadowColor="rgba(0,0,0,0)";
            cobj.shadowOffsetX=0;
            cobj.shadowOffsetY=0;
            cobj.shadowBlur=0;
            var data=cobj.getImageData(sourceX,0,sourceW,height);
            console.log(data);
            cobj.clearRect(0,0,width,height);
            cobj.globalCompositeOperation="source-over";
            cobj.drawImage(one,0,0,1125,352,0,0,width,height);
            cobj.globalAlpha=0.6;
            cobj.drawImage(two,0,0,1698,1130,sourceX,0,sourceW,height);
            var canvas2=document.createElement("canvas");
            canvas2.width=sourceW;
            canvas2.height=height;
            var cobj2=canvas2.getContext("2d");
            var box=document.querySelector(".box");
            box.appendChild(canvas2);
            cobj2.putImageData(data,0,0);
            var mask=document.createElement("div");
            mask.style.cssText="width:"+width+"px;height:"+height+"px;position:absolute;left:0;top:0;";
            box.appendChild(mask);
            mask.onmousedown=function(){
                var left;
                mask.onmousemove=function(e){
                    var movex=e.offsetX;
                    var movey=e.offsetY;
                    left=movex-canvas2.width/2;
                    if(left<0){
                        left=0;
                    }
                    if(left>width-sourceW){
                        left>width-sourceW;
                    }
                    canvas2.style.left=(left)+"px";
                }
                mask.onmouseup=function(){
                    if(left>sourceX-2&&left<sourceX+2){
                        canvas2.style.left=sourceX+"px";
                        var ajax=new XMLHttpRequest();
                        ajax.onload=function(){
                            if(ajax.response=="ok"){
                                message.innerHTML="成功";
                            }else{
                                message.innerHTML="失败";
                            }
                        }
                        ajax.open("post","index.php?m=admin&f=login&a=checkcode");
                        ajax.setRequestHeader("CONTENT-TYPE", "application/x-www-form-urlencoded");
                        ajax.send("position="+sourceX)
                    }else{
                        canvas2.style.left=0;
                    }
                    mask.onmousemove=null;
                    mask.onmouseup=null;
                }
            }
        }
    <?php echo '</script'; ?>
>
</head>
<body>
<form action="index.php?m=admin&f=login&a=check" method="post">
    <h3>欢迎登陆</h3>
    <div class="form-group">
        <label for="exampleInputEmail1">用户名</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="username" name="user">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">密码</label>
        <input type="password" class="form-control" placeholder="Password" name="pass">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">请拖拽</label>

        <img src="<?php echo IMG_PATH;?>
/c.jpg" alt="" hidden class="c">
        <img src="<?php echo IMG_PATH;?>
/zhuti.png" alt="" hidden class="zhuti">


        <div class="box" style="position: relative;width:224px;height:70px;">
            <canvas position="<?php echo $_smarty_tpl->tpl_vars['position']->value;?>
">

            </canvas>
        </div>
        <div class="message"></div>
        <!--<img src="<?php echo SELF_PATH;?>
?m=admin&f=login&a=code" alt="" onclick="this.src=this.src+'&code='+Math.random()" style="cursor: pointer">-->

        <button type="submit" class="btn btn-default">登陆</button>
    </div>



</form>

</body>
</html><?php }
}