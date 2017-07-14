<?php
class index extends indexMain {
    function init(){
        $this->smarty->assign("login",$this->session->get("indexLogin"));
        $this->smarty->assign("mname",$this->session->get("mname"));
        $this->smarty->display("shanping.html");
    }
    function code(){
        $obj=new code();
        $obj->codeUrl="demo.ttf";
        $obj->width=120;
        $obj->height=30;
        $obj->output();
        $this->session->set("code",$obj->current);
    }
    function login1(){
        $this->smarty->display("yj-index.html");
    }

    function index1(){
        $db=new db("lists");
        $result=$db->select();
        $this->smarty->assign("result",$result);
        $this->smarty->display("index.html");
    }



}
