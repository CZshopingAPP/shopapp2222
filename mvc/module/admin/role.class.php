<?php
class role extends main {
    function add(){
        $this->smarty->display("addRole.html");
    }

    function addCon(){
        $rname=$_POST["rname"];
        $db=new db("role");
        if($db->insert("rname='{$rname}'")>0){
            $this->jump("添加成功","index.php?m=admin&f=role&a=add");
        }
    }

    function show(){
        $this->db=new db("role");
        $result=$this->db->select();
        $this->smarty->assign("result",$result);
        $this->smarty->display("showrole.html");
    }
    function del(){

    }
    function edit(){

    }

}