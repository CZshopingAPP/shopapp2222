<?php
class user extends main{
    function __construct(){
        parent::__construct();
        $this->db=new db("user");
    }
    function add(){
        if($this->session->get("rid")!=1){
            $this->jump("没有权限","index.php?m=admin&f=login&a=main");
            exit;
        }
        $this->db->table="role";
        $result=$this->db->select();
        $this->smarty->assign("roles",$result);
        $this->smarty->display("addUser.html");
    }
    function addCon(){
        if($this->session->get("rid")!=1){
            $this->jump("没有权限","index.php?m=admin&f=login&a=main");
            exit;
        }
        $uname=$_POST["uname"];
        $upass=md5($_POST["upass"]);
        $rid=$_POST["rid"];
        $nichen=$_POST["nichen"];
        $result=$this->db->where("uname='{$uname}'")->select();
        if(count($result)>0){
            $this->jump("用户名存在","index.php?m=admin&f=user&a=add");
            exit;
        }
        if($this->db->insert("uname='{$uname}',upass='{$upass}',rid='{$rid}',nichen='{$nichen}'")>0){
            $this->jump("添加成功","index.php?m=admin&f=user&a=add");
        }
    }
    function show(){
        $this->db=new db("member");
        $result=$this->db->select();
        $this->smarty->assign("result",$result);
        $this->smarty->display("showUser.html");
    }
    function del(){
        $mid=$_GET["mid"];
        $this->db=new db("member");
        $result=$this->db->where($mid)->del();
        if($result>0){
            $this->jump("删除成功","index.php?m=admin&f=user&a=show");
        }
    }
    function edit(){
        $mid=$_GET["mid"];
        $db=new db("member");
        $result=$db->where("mid={$mid}")->select();
        $this->smarty->assign("mname",$result[0]["mname"]);
        $this->smarty->assign("nicheng",$result[0]["nicheng"]);
        $this->smarty->assign("mrole",$result[0]["mrole"]);
        $this->smarty->display("editUser.html");
    }
    function editCon(){
        $mid=$_POST["mid"];
        $nicheng=$_POST["nicheng"];
        $mrole=$_POST["mrole"];
        $db=new db("member");
        if($info=$db->where("mid={$mid}")->update("nicheng='{$nicheng}',mrole='{$mrole}'")>0){
            $this->jump("修改成功","index.php?m=admin&f=user&a=show");
        }
       /* if($info>0){
            echo "ok";
        }*/
    }
}