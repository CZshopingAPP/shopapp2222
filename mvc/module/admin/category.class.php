<?php
class category extends main{
    function add(){
        $db=new db("");
        $tree=new tree();
        $tree->getTree(0,0,"-",$db->db,"category");
        $this->smarty->assign("str",$tree->str);
        $this->smarty->display("addCategory.html");
    }
    function addCon(){
        $pid=$_POST["pid"];
        $cname=$_POST["cname"];
        $db=new db("category");
        if($db->insert("pid={$pid},cname='{$cname}'")){
            $this->jump("添加成功","index.php?m=admin&f=category&a=add");
        }
    }
    function show(){
        $this->db=new db("category");
        $result=$this->db->select();
        $this->smarty->assign("result",$result);
        $this->smarty->display("showcategory.html");
    }
    function del(){
        $this->db=new db("category");
        $cid=$_GET["cid"];
        $result=$this->db->where("cid='{$cid}'")->del();
        if($result>0){
            $this->jump("删除成功","index.php?m=admin&f=category&a=show");
        }
    }
    function edit(){
        $cid=$_GET["cid"];
        $db=new db("category");
        $result=$db->where("cid={$cid}")->select();
        $this->smarty->assign("cid",$result[0]["cid"]);
        $this->smarty->assign("cname",$result[0]["cname"]);
        $this->smarty->display("editcategory.html");
    }
    function editCon(){
        $cid=$_POST["cid"];
        $cname=$_POST["cname"];
        $this->db=new db("category");
        $info=$this->db->where("cid='{$cid}'")->update("cname='{$cname}'");
        if($info>0){
            $this->jump("修改成功","index.php?m=admin&f=category&a=show&cid=$cid");
        }

    }

}