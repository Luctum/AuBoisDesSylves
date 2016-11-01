<?php

namespace AuBoisDesSylves\Utils;

use AuBoisDesSylves\Models\User;

class Security{

    public static function isLogged(){
        return (!empty($_SESSION && $_SESSION['user'] instanceof User));
    }

    public static function isAdmin(){
        return (Security::isLogged() && $_SESSION['user']->getRank() == 0);
    }

}