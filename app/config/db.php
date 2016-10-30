<?php

//Mise en place des paramètres de base de données grâce à db.options (pour Doctrine)
$app["db.options"] = array(
    'driver'   => 'pdo_mysql',
    'charset'  => 'utf8',
    'host'     => 'localhost',
    'port'     => '3306',
    'dbname'   => 'au_bois_des_sylves',
    'user'     => 'root',
    'password' => '',
);

$app['debug'] = true;