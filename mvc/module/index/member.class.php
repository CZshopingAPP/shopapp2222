<?php
class member extends indexMain{
    function init(){
        $this->smarty->assign("login",$this->session->get("indexLogin"));
        $this->smarty->assign("mname",$this->session->get("mname"));
        $this->smarty->assign("mid",$this->session->get("mid"));
        $this->smarty->assign("nicheng",$this->session->get("nicheng"));
        $this->smarty->assign("photo",$this->session->get("photo"));
        $this->smarty->display("yj-member.html");
    }
    function edit(){
        $mid=P("mid");
        $field=P("filed");
        $val=P("val");
        $db=new db("member");
        if($db->where("mid={$mid}")->update("$field='{$val}'")>0){
            echo "更新成功";
            $this->session->set("nicheng",$val);
        }else{
            echo "更新失败";
        }
    }
}