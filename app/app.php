<?php

use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;
use Silex\Provider\FormServiceProvider;

// Allows errors to be more precises
ErrorHandler::register();
ExceptionHandler::register();

$app['debug'] = true;

//Session
$app->register(new Silex\Provider\SessionServiceProvider());

//Form
$app->register(new FormServiceProvider());

//ORM
$app->register(new Propel\Silex\PropelServiceProvider(), array(
    'propel.config_file' => __DIR__ . '/config/generated-conf/config.php'
));

//VIEW
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

$app['twig']->addGlobal('app', $app);
