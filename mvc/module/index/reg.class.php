<?php
class reg  extends indexMain{
    function init(){
        $this->smarty->assign("login",$this->session->get("indexLogin"));
        $this->smarty->assign("mname",$this->session->get("mname"));
        $this->smarty->display("yj-reg.html");
    }
    
    
    
    
}
