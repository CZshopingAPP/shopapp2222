<?php
class position extends main{
    function add(){
        $this->smarty->display("addPos.html");
    }
    function addCon(){
        $posname=$_POST["posname"];
        $db=new db("position");
        if($db->insert("posname='{$posname}'")>0){
            $this->jump("添加成功","index.php?m=admin&f=position&a=add");
        }
    }
    function show(){
        $this->db=new db("position");
        $result=$this->db->select();
        $this->smarty->assign("result",$result);
        $this->smarty->display("showpos.html");
    }
    function del(){
        $this->db=new db("position");
        $posid=$_GET["posid"];
        $result=$this->db->where("posid='{$posid}'")->del();
        if($result>0){
            $this->jump("删除成功","index.php?m=admin&f=position&a=show");
        }
    }
    function edit(){
        $posid=$_GET["posid"];
        $db=new db("position");
        $result=$db->where("posid={$posid}")->select();
        $this->smarty->assign("posid",$result[0]["posid"]);
        $this->smarty->assign("posname",$result[0]["posname"]);
        $this->smarty->display("editposition.html");
    }
    function editCon(){
        $posid=$_POST["posid"];
        $posname=$_POST["posname"];
        $this->db=new db("position");
        $info=$this->db->where("posid='{$posid}'")->update("posname='{$posname}'");
        if($info>0){
            $this->jump("修改成功","index.php?m=admin&f=position&a=show&posid=$posid");
        }

    }
}