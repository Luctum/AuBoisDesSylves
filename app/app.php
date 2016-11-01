<?php

use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;
// Allows errors to be more precises
ErrorHandler::register();
ExceptionHandler::register();

// Register service providers.
$app->register(new Silex\Provider\DoctrineServiceProvider());

// Register services.
$app['dao.category'] = function ($app){
    return new AuBoisDesSylves\Models\DAO\CategoryDAO($app['db']);
};

$app['dao.user'] =  function ($app){
    return new AuBoisDesSylves\Models\DAO\UserDAO($app['db']);
};

