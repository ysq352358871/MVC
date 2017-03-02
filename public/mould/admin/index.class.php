<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/1
 * Time: 14:57
 */
class index extends smart{
    function init(){
        include "template/admin/index.html";
    }
    function login(){
        $this->smarty->display("admin/login.html");
    }
}