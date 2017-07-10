<?php
class index extends indexMain {
    function init(){
        $this->smarty->assign("login",$this->session->get("indexLogin"));
        $this->smarty->assign("mname",$this->session->get("mname"));
        $this->smarty->display("index.html");
    }
    function code(){
        $obj=new code();
        $obj->codeUrl="demo.ttf";
        $obj->width=120;
        $obj->height=30;
        $obj->output();
        $this->session->set("code",$obj->current);
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
}
