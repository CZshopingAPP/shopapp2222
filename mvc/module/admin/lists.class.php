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
        $cid=$_POST["cid"];
        $stitle=$_POST["stitle"];
        $keywords=$_POST["keywords"];
        $scon=$_POST["scon"];
        $simage=$_POST["simage"];
        $db=new db("lists");
        $result=$db->insert("cid='{$cid}',stitle='{$stitle}',keywords='{$keywords}',scon='{$scon}',simage='{$simage}'");
        if($result>0){
            $this->jump("添加成功","index.php?m=admin&f=lists&a=add0");
        }
    }


    function add(){
        $db=new db("lists");

        $num=$db->select("select count(sid) as sid from lists");
        $page=new page();
        $page->pageNum=2;
        $page->total=$num[0]["sid"];
        $str=$page->show();
        $limit=$page->limit;
        $this->smarty->assign("pages",$str);

        if(isset($_GET["status"])){
            $where="and lists.status=".$_GET["status"];
        }else{
            $where="";
        }

        $sql="select lists.* ,category.cname,member.mname from lists,category,member where lists.cid=category.cid and lists.mid=member.mid ".$where." order by lists.stime desc ".$limit;
        $result=$db->select($sql);
        $this->smarty->assign("result",$result);
        $this->smarty->display("listsAdd.html");
    }

    function edit(){
        $sid=$_GET["sid"];
        $cid=$_GET["cid"];
        $db=new db("lists");
        $result=$db->where("sid={$sid}")->select();
        $this->smarty->assign("status",$result[0]["status"]);

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
        $status=$_POST["status"];


        $db=new db("lists");
        if($db->where("sid={$sid}")->update("status={$status}")>0){
            $this->jump("修改成功","index.php?m=admin&f=lists&a=add");
        }
    }



    function upload(){
        $obj=new upload();
        $obj->move();
    }
}