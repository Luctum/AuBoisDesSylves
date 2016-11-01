<?php
namespace AuBoisDesSylves\Controllers;
use AuBoisDesSylves\Utils\Security;
use AuBoisDesSylves\Models\User;

class HomeController extends BaseController{

    public function index(){

        ob_start();
        if(Security::isLogged()){
            require "app/views/home/indexCo.php";
        }else{
            require "app/views/home/index.php";
        }

        $buffer = ob_get_clean();

        //Inject the view in the layout.
        return $this->injectLayout($buffer);
    }

}