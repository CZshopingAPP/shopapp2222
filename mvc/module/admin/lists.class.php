<?php
class lists extends main{
    function add0(){
        $db=new db("category");
        $tree=new tree();
        $tree->getTree(0,0,"-",$db->db,"category");
        $this->smarty->assign("str",$tree->str);
        $this->smarty->display("addcon.html");


    }
    function add1(){
        $sid=$_POST["sid"];
        $cid=$_POST["cid"];
        $stitle=$_POST["stitle"];
        $yutitle=$_POST["yutitle"];
        $price=$_POST["price"];
        $pingfen=$_POST["pingfen"];
        $keywords=$_POST["keywords"];
        $scon=$_POST["scon"];
        $simage=$_POST["simage"];
        $db=new db("lists");
        $result=$db->insert("cid='{$cid}',stitle='{$stitle}',keywords='{$keywords}',scon='{$scon}',simage='{$simage}',sid='{$sid}',pingfen='{$pingfen}',yutitle='{$yutitle}',price='{$price}'");
        if($result>0){
            $this->smarty->assign("sid",$sid);
            $this->smarty->assign("cid",$cid);
            $this->jump("添加成功","index.php?m=admin&f=lists&a=add0");
        }
    }
    function add(){
        //$sid=$_POST["sid"];
        //$cid=$_POST["cid"];
        $db=new db("lists");
        //$result=$db->where("sid={sid}")->select();
        $result=$db->where("cid=cid")->select();
        $this->smarty->assign("sid",$result[0]["sid"]);
        $this->smarty->assign("cid",$result[0]["cid"]);
        $this->smarty->assign("yutitle",$result[0]["yutitle"]);
        $this->smarty->assign("stitle",$result[0]["stitle"]);
        $this->smarty->assign("keywords",$result[0]["keywords"]);
        $this->smarty->assign("scon",$result[0]["scon"]);
        $this->smarty->assign("simage",$result[0]["simage"]);

        $this->smarty->assign("result",$result);
       $this->smarty->display("xzzlistsAdd.html");
    }



    function edit(){
        $sid=$_GET["sid"];
        $cid=$_GET["cid"];
        $db=new db("lists");
        $result=$db->where("sid={$sid}")->select();
        $this->smarty->assign("yutitle",$result[0]["yutitle"]);

        $this->smarty->assign("stitle",$result[0]["stitle"]);
        $this->smarty->assign("keywords",$result[0]["keywords"]);
        $this->smarty->assign("scon",$result[0]["scon"]);
        $this->smarty->assign("simage",$result[0]["simage"]);

        $this->smarty->assign("sid",$sid);


        $db=new db("category");
        $info=$db->where("cid={$cid}")->select();
        $this->smarty->assign("info",$info);
        $this->smarty->assign("cname",$info[0]["cname"]);


        $this->smarty->display("editLists.html");

    }

    function editStatus(){
        $sid=$_POST["sid"];
        $stitle=$_POST["stitle"];
        $yutitle=$_POST["yutitle"];
        $keywords=$_POST["keywords"];
        $scon=$_POST["scon"];

        $db=new db("lists");
        if($db->where("sid={$sid}")->update("stitle='{$stitle}',yutitle='{$yutitle}',keywords='{$keywords}',scon='{$scon}'")>0){
            $this->jump("修改成功","index.php?m=admin&f=lists&a=add");
        }
    }
    function del(){
        $this->db=new db("lists");
        $sid=$_GET["sid"];
        $result=$this->db->where("sid='{$sid}'")->del();
        if($result>0){
            $this->jump("删除成功","index.php?m=admin&f=lists&a=add");
        }
    }


    function upload(){
        $obj=new upload();
        $obj->move();
    }
}