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
    function luntan(){
        $this->smarty->display("luntan.html");
    }
    function sousuo(){
        $this->smarty->display("sousuo.html");
    }
    function detils(){
        $this->smarty->display("detils.html");
    }
    function index1(){
        $this->smarty->display("index.html");
    }
    function member(){
        $this->smarty->display("yj-member.html");
    }
    function reg1(){
        $this->smarty->display("yj-reg.html");
    }
}
