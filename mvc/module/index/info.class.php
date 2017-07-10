<?php
class info extends indexMain{
    function init(){
        $this->smarty->assign("login",$this->session->get("indexLogin"));
        $this->smarty->assign("mname",$this->session->get("mname"));

        $db=new db("position");
        $result=$db->select();

        $tree=new tree();
        $tree->getTree(0,0,"-",$db->db,"category");
        $this->smarty->assign("str",$tree->str);
        $this->smarty->assign("position",$result);
        $this->smarty->display("info.html");
    }
    function  add(){
        if(!$this->session->get("indexLogin")){
            echo "nologin";
        }else{
            echo "ok";
        }
    }

    function code(){
        $obj=new code();
        $obj->codeUrl="demo.ttf";
        $obj->output();
        $this->session->set("code",$obj->current);
    }

    function upload(){
        $obj=new upload();
        $obj->move();
    }

    function addCon(){
        $stitle=P("stitle");
        $scon=P("scon");
        $simage=P("simage");
        $mid=$this->session->get("mid");
        $cid=P("cid");
        $status=0;

        $posid=empty(P("posid"))?"":implode(";",P("posid"));
        $keywords=P("keywords");

        $db=new db("lists");
        $sql="stitle='{$stitle}',scon='{$scon}',simage='{$simage}',mid='{$mid}',cid='{$cid}',status='{$status}',posid='{$posid}',keywords='{$keywords}'";

        if($db->insert($sql)>0){
            $this->jump("插入成功","index.php?m=index&f=info");
        }
    }

}