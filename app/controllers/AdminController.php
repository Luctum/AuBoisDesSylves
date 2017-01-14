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

    public function orderEditState($id){
      $order = Models\BsOrdersQuery::create()->filterById($id)->findOne();
      switch($order->getIdState()){
        case 1 :
            $order->setIdState(2);
          break;
        case 2 :
            $order->setIdState(1);
          break;
      }
      $order->save();
    }

    public function orderGetOne($id){
      $order = Models\BsOrdersQuery::create()
      ->filterById($id)
      ->find()->populateRelation('BsContents')->toJson();
      return $order;
    }

    public function productGetOne($id){
      return Models\BsProductsQuery::create()->filterById($id)->findOne()->toJson();
    }



    public function productsCreateAction($post){

      $name = $post->get('name');
      $icon = $post->get('icon');
      $description = $post->get('description');
      $id_category = $post->get('category');
      $availability = $post->get('availability');
      $price = $post->get('price');

      if($name != null && $price != null && $description != null && $availability != null && ($id_category != null && $id_category != 0 ) ){
        //If already exists, update the object from the database else, create a new one
        if($post->get('id') != null && $post->get('id') != ""){
          $product = Models\BsProductsQuery::create()->filterById($post->get('id'))->findOne();
        }else{
          $product = new Models\BsProducts();
        }

        $product->setName($name);
        $product->setDescription($description);
        $product->setIdCategory($id_category);
        $product->setAvailability($availability);
        $product->setPrice($price);

        if($icon != null){
          $product->setIcon($icon);
        }else{
          $product->setIcon($this->getApp()['url_generator']->generate('homepage').'public/img/cerf.svg');
        }

        $product->save();
        return "1";
      }
      return "0";
    }
}
