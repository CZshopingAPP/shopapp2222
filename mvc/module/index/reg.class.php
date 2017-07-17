<?php
class reg  extends indexMain{
    function init(){
        $this->smarty->assign("login",$this->session->get("indexLogin"));
        $this->smarty->assign("mname",$this->session->get("mname"));
        $this->smarty->display("yj-reg.html");
    }
    function reg1(){

        $mname=$_POST["mname"];

        if(empty($mname)){
            echo "用户不能为空";
            exit;
        }
        $db=new db("member");
        $result=$db->where("mname='{$mname}'")->select();
        if(count($result)>0){
            echo "用户名存在";
            exit;
        }

        $mpass=$_POST["mpass"];
        if(empty($mpass)){
            echo "密码不能为空";
            exit;
        }
        $mpass1=$_POST["mpass1"];
        if(empty($mpass)){
            echo "确认密码不能为空";
            exit;
        }

        if($mpass!=$mpass1){
            echo "两次密码不一致";
            exit;
        }

        $mpass=md5($mpass);

        if($db->insert("mname='{$mname}',mpass='{$mpass}'")){
            echo "ok";
            exit;
        }


    }


}
