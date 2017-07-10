<?php
class login extends main{
    function init()
    {
        if (($this->session->get("userlogin"))) {
            $this->jump("已登录", "index.php?m=admin&f=login&a=main");
        }
        $num=mt_rand(50,100);
        $this->session->set("position",$num);
        $this->smarty->assign("position",$num);
        $this->smarty->display("index.html");
    }

    function code(){
        $obj=new code();
        $obj->codeUrl="demo.ttf";
        $obj->output();
        $this->session->set("code",$obj->current);
    }
    function check()
    {
        //先看验证码
        /*if (strtolower($_POST["code"]) != $this->session->get("code")) {
            $this->jump("验证码错误", "index.php?m=admin&f=login");
        }*/
        if($this->session->get("codeok")!="ok"){
            echo "<script>alert('验证码有误');location.href='index.php?m=admin&f=login'</script>";
            exit();
        }

        //用户名密码
        $uname = $_POST["user"];
        $upass = $_POST["pass"];
        $dbobj = new db("user");
        $result = $dbobj->select();

        foreach ($result as $v) {
            if ($v["uname"] == $uname) {
                if ($v["upass"] == md5($upass)) {
                    $this->session->set("login", "yes");
                    $this->session->set("logined", "yes");
                    $this->session->set("name",$uname);
                    $this->session->set("nichen", $v["nichen"]);
                    $this->session->set("rid", $v["rid"]);
                    $this->jump("登录成功", "index.php?m=admin&f=login&a=main");
                    exit();
                }
            }
        }
        $this->jump("登录失败", "index.php?m=admin&f=login");

    }
    function main()
    {
        $this->smarty->assign("rid",$this->session->get("rid"));
        $this->smarty->assign("name",$this->session->get("name"));

        if (!($this->session->get("login"))) {
            $this->jump("未登录", "index.php?m=admin&f=login");
        }
        $this->smarty->display("main.html");
    }

    function checkcode(){
        $position=$_POST["position"];
        if($position==$_SESSION["position"]){
            $this->session->set("codeok","ok");
            echo "ok";
        }else{
            echo "no";
        }
    }

    function logout()
    {
        $this->session->clear();
        $this->jump("已退出登录", "index.php?m=admin&f=login");
    }
}