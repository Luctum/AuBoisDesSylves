<?php
namespace AuBoisDesSylves\Controllers;

use AuBoisDesSylves\Utils\Security;
use AuBoisDesSylves\Controllers\BaseController;
use AuBoisDesSylves\Propel\Models as Models;
use AuBoisDesSylves\Propel\Models\BsCategoriesQuery;

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
        //return $this->injectLayout($buffer);
    }

    public function test(){
      return $this->getApp()['twig']->render('test.html.twig', array(
        'categories' => $this->getCategories(),
      ));

    }
}
