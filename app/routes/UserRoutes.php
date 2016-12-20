<?php
/* USER ROUTE*/
//profile of one user
$app->get('/user/profile', function () use ($app){
    $user = new UserController($app);
    return $user->profile();
})->bind('profile');

//connectAction, instant redirect to profile, if javascript doesn't work... otherwise using connect/ajax below
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
  return $app->redirect($app['url_generator']->generate('homepage'));
})->bind('connectAction');

//For ajax request only...
$app->match('/user/connect/ajax', function (Request $request) use ($app){
  //Return 1 if user exists and have same logins... else 0.
  if($request->isMethod('post')){
    $user = new UserController($app);
    return $user->connectAction($request);
  }

});

//New user
$app->match('/user/add', function(Request $request) use ($app){

  //Return 1 if user exists and have same logins... else 0.
  if($request->isMethod('post')){
    $user = new UserController($app);
    return $user->connectAction($request);
  }

})->bind('userAddAction');

//Logout
$app->get('/user/logout', function () use ($app){
    $home = new UserController($app);
    return $home->logoutAction();
})->bind('logoutAction');
