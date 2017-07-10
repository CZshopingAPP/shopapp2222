<?php
/* Smarty version 3.1.30, created on 2017-06-30 12:31:18
  from "E:\wamp\www\PHP\mvc\template\index\member.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59562876a94800_81206031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3219229b0cfc47d661d06156d29c86d5075dccbe' => 
    array (
      0 => 'E:\\wamp\\www\\PHP\\mvc\\template\\index\\member.html',
      1 => 1498818677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_59562876a94800_81206031 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style>
    .left{
        width:20%;
        float: left;
    }
    .right{
        width:80%;
        float: right;
    }
    .photo{
        width: 100px;
        height:100px;
        border:1px solid #000;
        border-radius: 50%;
    }
    .nicheng{
        width: 100%;
        height: 30px;
    }
    .message{
        width: 100px;
        height:40px;
        background: rgba(0,0,0,.7);
        border-radius: 5px;
        position: fixed;
        top:0;
        left:0;
        bottom:0;
        right:0;
        margin:auto;
        color:#fff;
        text-align: center;
        line-height: 40px;
        display: none;
    }
</style>
<?php echo '<script'; ?>
>
    $(function () {
        $(".nicheng").click(function () {
            $(this).attr("contenteditable","true").focus();
            $(".nicheng").blur(function () {
                var mid=$(".right").attr("mid");
                var filed=$(this).attr("attr");
                var val=$(this).html();

                $.ajax({
                    url: "index.php?m=index&f=member&a=edit",
                    type:"post",
                    data:{
                        mid:mid,
                        filed:filed,
                        val:val
                    },
                    success:function (e) {
                        $(".message").html(e).css("display","block");
                        setTimeout(function () {
                            $(".message").css("display","none");
                        },2000)
                    }
                });
            })
        })
    })
<?php echo '</script'; ?>
>
<div class="left">
    <a href="">个人信息</a><br>
    <a href="">发布的文章</a><br>
    <a href="">我的留言</a><br>
    <a href="">我的回复</a>

</div>
<div class="right" mid="<?php echo $_smarty_tpl->tpl_vars['mid']->value;?>
">
    <table class="table table-hover">
        <tr>
            <td>
                <div class="photo"></div>
            </td>
        </tr>
        <tr>
            <td>昵称</td>
            <td>
                <div class="nicheng" attr="nicheng">
                    <?php echo $_smarty_tpl->tpl_vars['nicheng']->value;?>

                </div>
            </td>
        </tr>
        <tr>
            <td>用户名</td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['mname']->value;?>

            </td>
        </tr>
        <tr>
            <td>修改密码</td>
            <td>
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            </td>
        </tr>
        <tr>
            <td>邮箱</td>
            <td>
                <input type="email" class="nicheng" attr="email">
            </td>
        </tr>
        <tr>
            <td>性别</td>
            <td>
                女: <input type="radio" name="sex">
                男: <input type="radio">
                保密: <input type="radio">
            </td>
        </tr>
    </table>
</div>
<div class="message"></div>
</body>
</html><?php }
}
