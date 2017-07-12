<?php
class message extends indexMain
{
    function init()
    {
        $this->smarty->assign("login", $this->session->get("indexLogin"));
        $this->smarty->assign("mname", $this->session->get("mname"));
        $this->smarty->display("mess.html");
    }
    function liuyan(){
        $this->smarty->display("liuyan.html");
    }
}