<?php
namespace AuBoisDesSylves\Controllers;

use AuBoisDesSylves\Controllers\BaseController;
use AuBoisDesSylves\Propel\Models as Models;

class AdminController extends BaseController{

    /*
    * Index of the admin-zone
    */
    public function users(){
      $users = Models\BsUsersQuery::create()->orderBySurname()->find();
      return $this->getApp()['twig']->render('admin/users.html.twig', array(
        'categories' => $this->getCategories(),
        'users' => $users
      ));
    }

    public function orders(){
      $orders = Models\BsOrdersQuery::create()
      ->orderById('desc')
      ->find();
      $orders->populateRelation('BsContents');

      return $this->getApp()['twig']->render('admin/orders.html.twig', array(
        'categories' => $this->getCategories(),
        'orders' => $orders
      ));
    }

    public function products(){
      $products = Models\BsProductsQuery::create()->orderById('desc')->find();
      return $this->getApp()['twig']->render('admin/products.html.twig', array(
        'categories' => $this->getCategories(),
        'products' => $products
      ));
    }

}
