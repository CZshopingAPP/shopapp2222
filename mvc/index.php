<?php

/*
 * 1. 单入口文件
 * 2. 模板引擎
 * 3. 控制器  c controller  路由  地址栏
 * 4. 相应的数据放到相应的视图里面
 * 5. 操作数据库->面向对象的思想  new db()
 *
 *
 * 计算机原理  010101010101  指令集->硬件cpu  机器语言
 *                            汇编语言
 *
 * 快速工作
 * 方便维护
 * 协同合作
 *
 * */
header("Content-type:text/html;charset=utf-8");
define("COMING","yes");

$server=$_SERVER;

define("ROOT_PATH",$server["DOCUMENT_ROOT"]);
define("APP_PATH",ROOT_PATH."/shopapp2222/mvc");
define("LIBS_PATH",APP_PATH."/libs");
define("MODULE_PATH",APP_PATH."/module");
define("TEMPLATE_PATH",APP_PATH."/template");

$prot=substr($server["SERVER_PROTOCOL"],0,strrpos($server["SERVER_PROTOCOL"],"/"));
$path=substr($server["SCRIPT_NAME"],0,strrpos($server["SCRIPT_NAME"],"/"));
define("URL_PATH",$prot."://".$server["HTTP_HOST"].$path);

define("CSS_PATH",$prot."://".$server["HTTP_HOST"].$path."/static/css");
define("IMG_PATH",$prot."://".$server["HTTP_HOST"].$path."/static/img");

define("JS_PATH",$prot."://".$server["HTTP_HOST"].$path."/static/js");
define("EDIT_PATH",$prot."://".$server["HTTP_HOST"].$path."/static/editor");

define("SELF_PATH",$prot."://".$server["HTTP_HOST"].$server["SCRIPT_NAME"]);


require_once LIBS_PATH."/functions.php"; //include 只适合文件路径    href/localhost 服务器路径
require_once LIBS_PATH."/route.class.php";
require_once LIBS_PATH."/db.class.php";
require_once LIBS_PATH."/smarty/Smarty.class.php";
require_once LIBS_PATH."/main.class.php";
require_once LIBS_PATH."/indexMain.class.php";

require_once LIBS_PATH."/code.class.php";
require_once LIBS_PATH."/session.class.php";
require_once LIBS_PATH."/tree.class.php";
require_once LIBS_PATH."/upload.class.php";

require_once LIBS_PATH."/page.class.php";


$rootObj=new route();
$rootObj->getInfo();