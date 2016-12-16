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
      return $this->getApp()['twig']->render('user/profile.html.twig', array(
        'categories' => $this->getCategories(),
      ));
    }

}
