<?php

require_once'libs/smarty-3.1.39/libs/Smarty.class.php';

class classView {

    private $smarty;
    
    function __construct(){
        $this->smarty = new Smarty();
    }

    function ShowBevidas($bevidas){
        
        $this->smarty->assign('bevidas', $bevidas);
        $this->smarty->display('templates\bevidas.tpl');
    }

    function showInvited($bevidas){
        $this->smarty->assign('bevidas', $bevidas);
        $this->smarty->display('templates\bebidasInvited.tpl');
    }
}
