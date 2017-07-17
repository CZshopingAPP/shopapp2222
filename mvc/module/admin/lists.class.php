<?php
class lists extends main{
    function add0(){
        $db1=new db("position");
        $result=$db1->select();
        $this->smarty->assign("posid",$result[0]["posid"]);
        $this->smarty->assign("posname",$result[0]["posname"]);
        $this->smarty->assign("result",$result);

        $db=new db("category");
        $tree=new tree();
        $tree->getTree(0,0,"-",$db->db,"category");
        $this->smarty->assign("str",$tree->str);
        $this->smarty->display("addcon.html");
    }
    function add1(){
       // $sid=$_POST["sid"];
        $cid=$_POST["cid"];
        $posid=$_POST["posid"];
        $stitle=$_POST["stitle"];
        $yutitle=$_POST["yutitle"];
        $price=$_POST["price"];
        $pingfen=$_POST["pingfen"];
        $keywords=$_POST["keywords"];
        $scon=$_POST["scon"];
        $simage=$_POST["simage"];
        $simages=implode(",",$_POST["simages"]);
        $db=new db("lists");
        $result=$db->insert("cid='{$cid}',stitle='{$stitle}',keywords='{$keywords}',scon='{$scon}',simage='{$simage}',pingfen='{$pingfen}',yutitle='{$yutitle}',price='{$price}',posid='{$posid}',simages='{$simages}'");
        if($result>0){
            //$this->smarty->assign("sid",$sid);
            $this->smarty->assign("cid",$cid);
            $this->smarty->assign("posid",$posid);
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
        $this->smarty->assign("posid",$result[0]["posid"]);
        $this->smarty->assign("stitle",$result[0]["stitle"]);
        $this->smarty->assign("keywords",$result[0]["keywords"]);
        $this->smarty->assign("scon",$result[0]["scon"]);
        $this->smarty->assign("simage",$result[0]["simage"]);

      /*  $db1=new db("category");
        $info=$db1->where("cid={cid}")->select();
        $this->smarty->assign("info",$info);
        $this->smarty->assign("cname",$info[0]["cname"]);*/

        $this->smarty->assign("result",$result);
       $this->smarty->display("xzzlistsAdd.html");
    }



    function edit(){
        $db1=new db("category");
        $tree=new tree();
        $tree->getTree(0,0,"-",$db1->db,"category");
        $this->smarty->assign("str",$tree->str);

        $sid=$_GET["sid"];
        $cid=$_GET["cid"];
        $posid=$_GET["posid"];
       // $posid=implode(",",$_GET["posid"]);
        $db=new db("lists");
        $result=$db->where("sid={$sid}")->select();
        $this->smarty->assign("yutitle",$result[0]["yutitle"]);

        $this->smarty->assign("stitle",$result[0]["stitle"]);
        $this->smarty->assign("keywords",$result[0]["keywords"]);
        $this->smarty->assign("scon",$result[0]["scon"]);
        $this->smarty->assign("simage",$result[0]["simage"]);
        $this->smarty->assign("posid",$posid);
        $this->smarty->assign("sid",$sid);
        $this->smarty->assign("simages",$result[0]["simages"]);

        $db=new db("category");
        $info=$db->where("cid={$cid}")->select();
        $this->smarty->assign("info",$info);
        $this->smarty->assign("cname",$info[0]["cname"]);

        $db2=new db("position");
        $result2=$db2->select();
        $this->smarty->assign("posid",$result[0]["posid"]);
        $this->smarty->assign("posname",$result2[0]["posname"]);
        $this->smarty->assign("result2",$result2);

        $this->smarty->display("editLists.html");

    }

    function editStatus(){
        $sid=$_POST["sid"];
        $cid=$_POST["cid"];
        $stitle=$_POST["stitle"];
        $yutitle=$_POST["yutitle"];
        $keywords=$_POST["keywords"];
        $scon=$_POST["scon"];
        $posid=$_POST["posid"];


        $db=new db("lists");
        if($db->where("sid={$sid}")->update("stitle='{$stitle}',yutitle='{$yutitle}',keywords='{$keywords}',scon='{$scon}',posid='{$posid}',cid='{$cid}'")>0){
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

        $obj1=new upload();
        $obj1->move();
    }
}