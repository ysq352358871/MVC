<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/1
 * Time: 14:57
 */
class index extends smarty {
    function init(){
        $smarty=new Smarty();
        $smarty->setCompileDir("compile");
        $smarty->setTemplateDir("template");
        $db=new db("student");
        $result=$db->select();
        $smarty->assign('result',$result);
        $smarty->display("index/index.html");
    }
}