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
    return $user->connectAction($request);
  }
  //return "non";
  return "yo";
})->bind('connectAction');


//connectAction, instant redirect to profile
$app->get('/user/logout', function () use ($app){
    $home = new UserController($app);
    return $home->logoutAction();
})->bind('logoutAction');
