<?php
namespace AuBoisDesSylves\Controllers;

use AuBoisDesSylves\Utils\Security;
use AuBoisDesSylves\Controllers\BaseController;
use AuBoisDesSylves\Propel\Models as Models;
use AuBoisDesSylves\Propel\Models\BsCategoriesQuery;

class HomeController extends BaseController{

    public function index(){

      return $this->getApp()['twig']->render('layout.html.twig', array(
        'categories' => $this->getCategories(),
      ));

    }

    public function test(){
      return $this->getApp()['twig']->render('test.html.twig', array(
        'categories' => $this->getCategories(),
      ));

    }
}
