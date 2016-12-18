<?php
use AuBoisDesSylves\Models;
use AuBoisDesSylves\controllers\HomeController;
use AuBoisDesSylves\controllers as Controllers;

//Home routes
$app->get('/', function () use ($app){
        $home = new HomeController($app);
        return $home->index();
})->bind('homepage');

$app->get('/product', function () use ($app){
    $product = new Controllers\ProductController($app);
    return $product->index();

});
