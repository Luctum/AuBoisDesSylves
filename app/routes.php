<?php
use AuBoisDesSylves\controllers\HomeController;
use AuBoisDesSylves\controllers\UserController;
use AuBoisDesSylves\controllers\AdminController;
use AuBoisDesSylves\controllers\ProductController;
use AuBoisDesSylves\Propel\Models as Models;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

/*
$app->error(function (\Exception $e) use ($app){
        $home = new HomeController($app);
        return $home->error();
});*/

/* HOME ROUTE*************************************************************************************/
//homepage
$app->get('/', function () use ($app){
        $home = new HomeController($app);
        return $home->index();
})->bind('homepage');

//homepage with error
$app->get('/error/{message}', function ($message) use ($app){
        $home = new HomeController($app);
        return $home->index($message);
})->bind('homepageError');

/* USER ROUTE*************************************************************************************/
//profile of one user
$app->get('/user/profile', function () use ($app){
    $user = new UserController($app);
    return $user->profile();
})->bind('profile');

/**
* Connecting a user
**/
//connectAction, instant redirect to profile, if javascript doesn't work... otherwise using connect/ajax below
$app->match('/user/connect', function (Request $request) use ($app){
  if($request->isMethod('post')){
    $user = new UserController($app);
    if($user->connectAction($request)){
      return $app->redirect($app['url_generator']->generate('profile'));
    }else{
      return $app->redirect($app['url_generator']->generate('homepage', array('message' => 'Erreur : Identifiants incorrects')));
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
  return $app->redirect($app['url_generator']->generate('homepage'));
});


/**
* Creating a user
**/
$app->match('/user/signup', function (Request $request) use ($app){
  if($request->isMethod('post')){
    $user = new UserController($app);
    $response = $user->signupAction($request);

    switch($response){
      case 0:
        $error = "Erreur : Une erreur est survenue lors de votre inscription";
        break;
      case 1:
        $error = "Vous êtres inscrits, veuillez vous connecter !";
        break;
      case -1:
        $error = "Erreur : Cette adresse mail est déjà utilisée, veuillez en utiliser une autre...";
        break;
    }
    return $app->redirect($app['url_generator']->generate('homepageError', array('message'=>$error)));
  }
  return $app->redirect($app['url_generator']->generate('homepage'));

})->bind('signupAction');


$app->match('/user/edit', function(Request $request) use ($app){
  if($request->isMethod('post')){
    $user = new UserController($app);
    return $user->editAction($request);
  }
  return $app->redirect($app['url_generator']->generate('homepage'));
})->bind('editUserAction');


//logout
$app->get('/user/logout', function () use ($app){
    $user = new UserController($app);
    return $user->logoutAction();
})->bind('logoutAction');

/* ADMIN ROUTE **************************************/
$app->get('/admin/users', function () use ($app){
    $admin = new AdminController($app);
    return $admin->users();
})->bind('adminUsers');

$app->get('/admin/products', function () use ($app){
    $admin = new AdminController($app);
    return $admin->products();
})->bind('adminProducts');

//Get the infos for one product (for ajax form completion for example)
$app->get('/admin/products/one/{id}', function($id) use ($app){
  $admin = new AdminController($app);
  return $admin->productGetOne($id);
});

//Delete a product
/*
$app->match('/admin/products/delete', function(Request $request) use ($app){

  if($request->isMethod('post') && $app['session']->get('user')->getRank() == 0){
    $product = Models\BsProductsQuery::create()->filterById($request->get('idDelete'))->findOne();
    $product->delete();
    return $app->redirect($app['url_generator']->generate('adminProducts'));
  }
  return $app->redirect($app['url_generator']->generate('homepage'));
})->bind('deleteProductAction');*/

$app->match('/admin/products/update', function(Request $request) use ($app){
  if($request->isMethod('post') && $app['session']->get('user')->getRank() == 0){
    //check if user is admin
      $product = new AdminController($app);
      $response = $product->productsCreateAction($request);
      //Erreur
      return $app->redirect($app['url_generator']->generate('adminProducts'));
  }
  return $app->redirect($app['url_generator']->generate('homepage'));
  //Si ID est set alors on récupère le produit avec le même id et on edit, sinon on créer un nouveau.
})->bind('editProductAction');

$app->get('/admin/orders', function () use ($app){
    $admin = new AdminController($app);
    return $admin->orders();
})->bind('adminOrders');


/*PRODUCTS ROUTE*/
//display products
$app->get('/products', function () use ($app){
    $product = new ProductController($app);
    return $product->index();
})->bind('products');

$app->get('/products/{categorie}', function ($categorie) use ($app) {
    $home = new ProductController($app);
    return $home->product($categorie);
})->bind('product');
