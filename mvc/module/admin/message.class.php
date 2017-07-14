<?php
class message extends main{
    function show(){
        $db=new db("message");
        $result=$db->where("mid='{mid}'")->select();
        $this->smarty->assign("rid",$result[0]["rid"]);
        $this->smarty->assign("mcon",$result[0]["mcon"]);
        $this->smarty->display("showmessage.html");
    }

    function add(){
        $db=new db("message");
        $mcon=$_POST["mcon"];
        $sid=$_POST["sid"];
        $result=$db->where("mid='{mid}'")->insert("mcon='{$mcon}'");
        $this->smarty->display("mess.html.html");
    }
    function edit(){

    }


}