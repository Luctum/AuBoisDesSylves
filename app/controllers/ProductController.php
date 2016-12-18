<?php
namespace AuBoisDesSylves\Controllers;

use AuBoisDesSylves\Utils\Security;
use AuBoisDesSylves\Controllers\BaseController;
//use AuBoisDesSylves\Propel\Models as Models;
use AuBoisDesSylves\Propel\Models\BsProductsQuery;

class ProductController extends BaseController{

    public function index(){

        $products = BsProductsQuery::create()->find();

      return $this->getApp()['twig']->render('products/products.html.twig', array(
        'categories' => $this->getCategories(),
        'products'=> $products));

    }

}
