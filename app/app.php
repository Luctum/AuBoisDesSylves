<?php

use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;
// Allows errors to be more precises
ErrorHandler::register();
ExceptionHandler::register();

//ORM
$app->register(new Propel\Silex\PropelServiceProvider(), array(
    'propel.config_file' => __DIR__ . '/config/generated-conf/config.php'
));
//VIEW
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));
/*
// Register services.
$app['dao.category'] = function ($app){
    return new AuBoisDesSylves\Models\DAO\CategoryDAO($app['db']);
};

$app['dao.user'] =  function ($app){
    return new AuBoisDesSylves\Models\DAO\UserDAO($app['db']);
};

*/
