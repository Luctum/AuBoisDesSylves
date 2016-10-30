<?php
use AuBoisDesSylves\Models;
use AuBoisDesSylves\Controllers\HomeController;

//Home routes
$app->get('/', function () use ($app){
        $home = new HomeController($app);
        return $home->index();
});

$app->get('/connect', function () use ($app){
    $home = new HomeController($app);
    return $home->index();
});
