<?php
class login extends indexMain{
    function init(){
        $this->smarty->display("yj-login.html");
    }
 /*   function reg(){
        if($_POST["code"]!==$this->session->get("code")){
            echo "验证码错误";
            exit;
        }

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


    }*/

    function willLogin(){
       /* $code=$_POST["code"];
        if($_POST["code"]!==$this->session->get("code")){
            echo "验证码错误";
            exit;
        }*/
        $mname=$_POST["mname"];
        if(empty($mname)){
            echo "用户不能为空";
            exit;
        }
        $mpass=$_POST["mpass"];
        if(empty($mpass)){
            echo "密码不能为空";
            exit;
        }
        $db=new db("member");
        $result=$db->select();

        foreach ($result as $v){
            if($v["mname"]==$mname){
                if($v["mpass"]==md5($mpass)){
                    $this->session->set("indexLogin","yes");
                    $this->session->set("mname",$v["mname"]);
                    $this->session->set("mid",$v["mid"]);
                    $this->session->set("nicheng",$v["nicheng"]);
                   $this->jump("登陆成功","index.php?m=index&f=index&a=index1");
                }
            }
        }

        echo "用户名或密码有误";

    }

    function logout(){
        $this->session->clear();
        echo "ok";
    }






}