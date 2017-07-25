<?php
class login extends indexMain{
    function init(){
        if (($this->session->get("indexLogin"))) {
            $this->jump("已登录", "index.php?m=index&f=index&a=index1");
        }
        $this->smarty->display("yj-login.html");
    }

    function willLogin0(){

        $mname=$_POST["mname"];
        if(empty($mname)){
            echo "用户不能为空";
            exit;
        }

        echo "用户名或密码有误";

    }
    function willLogin(){

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
                    $this->session->set("photo",$v["photo"]);
                    $this->session->set("nicheng",$v["nicheng"]);
                    echo "ok";
                    $this->smarty->display("index.html");

                }
            }
        }



    }

    function logout(){
        $this->session->clear();
       $this->smarty->display("yj-index.html");
    }






}