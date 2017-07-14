<?php
class detils  extends indexMain{
    function init(){
        $this->smarty->assign("login",$this->session->get("indexLogin"));
        $this->smarty->assign("mname",$this->session->get("mname"));
        $db=new db("lists");
        $result=$db->where("sid='{sid}'")->select();
        $this->smarty->assign("result",$result);
        $this->smarty->display("detils.html");
    }


}
