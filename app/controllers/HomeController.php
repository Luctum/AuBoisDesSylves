<?php
namespace AuBoisDesSylves\Controllers;

use AuBoisDesSylves\Utils\Security;
use AuBoisDesSylves\Controllers\BaseController;
use AuBoisDesSylves\Propel\Models as Models;

class HomeController extends BaseController{

  /*
  * Index of the website.
  */
    public function index($message = null){
      return $this->getApp()['twig']->render('layout.html.twig', array(
        'categories' => $this->getCategories(),
        'message' => $message
      ));

    }

}
