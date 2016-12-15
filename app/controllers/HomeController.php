<?php
namespace AuBoisDesSylves\Controllers;

use AuBoisDesSylves\Utils\Security;
use AuBoisDesSylves\Controllers\BaseController;
use AuBoisDesSylves\Propel\Models as Models;

class HomeController extends BaseController{

  /*
  * Index of the website.
  */
    public function index(){
      $product = Models\BsProductsQuery::create()->find();
      return $this->getApp()['twig']->render('layout.html.twig', array(
        'categories' => $this->getCategories(),
      ));

    }

}
