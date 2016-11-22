<?php
namespace AuBoisDesSylves\Controllers;

use AuBoisDesSylves\Utils\Security;
use AuBoisDesSylves\Controllers\BaseController;
use AuBoisDesSylves\Propel\Models as Models;

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

    public function test(){

      ob_start();

      $user = Models\BSUsersQuery::create()->findPk(1);
      echo $user->getSurname();

      foreach($user->getOrderss() as $order){
        echo $order->getId();
      }

      $buffer = ob_get_clean();

      return $buffer;
    }
}
