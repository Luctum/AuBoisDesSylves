<?php
use AuBoisDesSylves\Models;
use AuBoisDesSylves\controllers\HomeController;
use AuBoisDesSylves\controllers\UserController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

/* HOME ROUTE*/
//homepage
$app->get('/', function () use ($app){
        $home = new HomeController($app);
        return $home->index();
})->bind('homepage');


/* USER ROUTE*/
//profile of one user
$app->get('/user/profile', function () use ($app){
    $user = new UserController($app);
    return $user->profile();
})->bind('profile');

//connectAction, instant redirect to profile
$app->match('/user/connect', function (Request $request) use ($app){
  if($request->isMethod('post')){
    $user = new UserController($app);
    if($user->connectAction($request)){
      return $app->redirect($app['url_generator']->generate('profile'));
    } else{
      return $app->redirect($app['url_generator']->generate('homepage'));
    }
  }
  //If request is not post, redirect to homepage
  return $this->getApp()->redirect($this->getApp()['url_generator']->generate('homepage'));
})->bind('connectAction');

$app->match('/user/connect/ajax', function (Request $request) use ($app){
  //Return 1 if user exists and have same logins... else 0.
  if($request->isMethod('post')){
    $user = new UserController($app);
    return $user->connectAction($request);
  }

})->bind('connectAjax');


//connectAction, instant redirect to profile
$app->get('/user/logout', function () use ($app){
    $home = new UserController($app);
    return $home->logoutAction();
})->bind('logoutAction');
