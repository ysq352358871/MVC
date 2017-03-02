<?php
class smart{
    function __construct(){
        $this->smarty=new smarty();
        $this->smarty->setCompileDir("compile");
        $this->smarty->setTemplateDir("template");
    }
}
