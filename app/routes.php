<?php
use AuBoisDesSylves\Models;
use AuBoisDesSylves\controllers\HomeController;

//Home routes
$app->get('/', function () use ($app){
        $home = new HomeController($app);
        return $home->index();
});

$app->get('/test', function () use ($app){
        $home = new HomeController($app);
        return $home->test();
});
