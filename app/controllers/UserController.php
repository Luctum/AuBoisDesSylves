<?php
namespace AuBoisDesSylves\Controllers;

use AuBoisDesSylves\Utils\Security;
use AuBoisDesSylves\Controllers\BaseController;
use AuBoisDesSylves\Propel\Models as Models;

class UserController extends BaseController{
    /**
    * Connecting à user via a form.
    **/
    public function connectAction($post){
      $login = $post->get('login');
      $password = $post->get('password');
      //Pick the user in the DB with the mail passed in the form.
      $user = Models\BsUsersQuery::create()->filterByMail($login)->findOne();
      if($user != null){
        //If the password is correct...
        $passwordVerify = $user->getPassword();
        if(password_verify($password, $user->getPassword())){
          //We put the user in the session.
          $this->getApp()['session']->set('user', $user);
          return 1;
        }
      }
      //If something is wrong return 0
      return 0;
    }

    /**
    * Logout a user
    **/
    public function logoutAction(){
      //redirect to home controller
      $this->getApp()['session']->remove('user');
      return $this->getApp()->redirect($this->getApp()['url_generator']->generate('homepage'));
    }

    /**
    * Shows the profile of a user.
    **/
    public function profile(){
      if(null !== $this->getApp()['session']->get('user')){
        //Pick 3 lasts orders ...
        $orders = Models\BsOrdersQuery::create()
        //Filter with user id
        ->filterByIdUser($this->getApp()['session']->get('user')->getId())
        ->orderByDateCreated('desc')
        ->find();
        //For each orders add its content (all products ordered)
        $orders->populateRelation('BsContents');

        return $this->getApp()['twig']->render('user/profile.html.twig', array(
          'categories' => $this->getCategories(),
          'orders' => $orders
        ));
      }
      return $this->getApp()->redirect($this->getApp()['url_generator']->generate('homepage'));
    }

    public function basket(){
        if(null !== $this->getApp()['session']->get('user')){
          if(!empty($_COOKIE[$this->getApp()['session']->get('user')->getId()."basket"])){
            $basketString = $_COOKIE[$this->getApp()['session']->get('user')->getId()."basket"];
            $basket = explode("," , $basketString);
            foreach(array_filter($basket) as $b){
              $basketArray[] = Models\BsProductsQuery::create()->findOneById($b);
            }
          }else {
            $basketArray = null;
          }

          if(null !== $this->getApp()['session']->get('user')){
            return $this->getApp()['twig']->render('user/basket.html.twig', array(
              'categories' => $this->getCategories(),
              'basket' => $basketArray
            ));
          }
        }
          return $this->getApp()->redirect($this->getApp()['url_generator']->generate('homepage'));
    }

    public function basketClean(){
      if(null !== $this->getApp()['session']->get('user')){
        setcookie("basket", '', time()-1000);
        return $this->getApp()->redirect($this->getApp()['url_generator']->generate('basket'));
      }
      return $this->getApp()->redirect($this->getApp()['url_generator']->generate('homepage'));

    }

    public function basketPay(){
      if(null !== $this->getApp()['session']->get('user')){
        if(!empty($_COOKIE[$this->getApp()['session']->get('user')->getId()."basket"])){
          $basketString = $_COOKIE[$this->getApp()['session']->get('user')->getId()."basket"];
          $basket = explode("," , $basketString);
          $basket = array_filter($basket);
        }

        $order = new Models\BsOrders();
        $order->setIdUser($this->getApp()['session']->get('user')->getId());
        foreach($basket as $b){
          if($b != 0 && $b != null){
            $content = new Models\BsContents();
            $content->setQuantity(1);
            $content->setIdProduct($b);
            $order->addBsContents($content);
          }

        }
        $order->save();
      }
      return $this->getApp()->redirect($this->getApp()['url_generator']->generate('homepage'));
    }

    /* Edit an User */
    public function editAction($post){

      if(null !== $this->getApp()['session']->get('user')){
        $user = $this->getApp()['session']->get('user');
        if(null !== $post->get('name')){$user->setName($post->get('name'));}
        if(null !== $post->get('surname')){$user->setSurname($post->get('surname'));}
        if(null !== $post->get('mail')){$user->setMail($post->get('mail'));}
        if(null !== $post->get('address')){$user->setAddress($post->get('address'));}
        if(null !== $post->get('city')){$user->setCity($post->get('city'));}
        if(null !== $post->get('pc')){$user->setPostalCode($post->get('pc'));}

        //If the user wants to change the password, check the old password and the new one.
        if(null !== $post->get('wantToEdit') && $post->get('wantToEdit') == 1){
          $password = $post->get('oldPassword');
          $newPassword = $post->get('newPassword1');

          if(password_verify($password, $user->getPassword()) && $newPassword == $post->get('newPassword2')){
            $user->setPassword(password_hash($newPassword, PASSWORD_DEFAULT));
          }
        }
        //Save the changes made on the user above
        $user->save();
      }
      return $this->getApp()->redirect($this->getApp()['url_generator']->generate('profile'));
    }

/*
* Signup an user
* return -1 if mail alrady exists, 1 if this is ok, 0 otherwise.
*/
    public function signupAction($post){

      if($post !== null){
        $surname = $post->get('surname');
        $name = $post->get('name');
        $mail = $post->get('email');
        $password = $post->get('pwd');
        $password2 = $post->get('repwd');
        $address = $post->get('address');
        $pc = $post->get('pc');
        $city = $post->get('city');
        $allFields = array(
          'surname'=> $surname,
          'name'=> $name,
          'mail'=> $mail,
          'password'=> $password,
          'password2'=> $password2,
          'address'=> $address,
          'pc'=> $pc,
          'city'=> $city
        );

        //Check if all fields are not empty
        foreach($allFields as $field){
          if($field == "" || $field == NULL){
            return 0;
          }
        }

        $userCheck = Models\BsUsersQuery::create()->filterByMail($mail)->findOne();
        //Check if mail already exists
        if($userCheck != null){
          return -1;
        }

        if($password != $password2){
          return 0;
        }

        //If Everything is fine, create the new user.
        $user = new Models\BsUsers();
        $user->setName($name);
        $user->setSurname($surname);
        $user->setMail($mail);
        $user->setPassword(password_hash($password, PASSWORD_DEFAULT));
        $user->setAddress($address);
        $user->setPostalCode($pc);
        $user->setCity($city);
        $user->save();

        //If the user is created in the database return 1.
        $userCheck = Models\BsUsersQuery::create()->filterByMail($mail)->findOne();
        if($userCheck != null){
          return 1;
        }

      }

      return 0;
    }

}
