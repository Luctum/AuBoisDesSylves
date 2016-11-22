<?php
namespace AuBoisDesSylves\Controllers;

use AuBoisDesSylves\Propel\Models\BsCategoriesQuery;
/* Functions used in every controllers */
class BaseController{

    public $app;
    public function  __construct($app){
        $this->app = $app;
    }

    /* Add the content of "buffer" in the layout */
    protected function injectLayout($buffer){
      //Récupère toutes les catégories
        $categories = BsCategoriesQuery::create()->find();
        ob_start();  //Buffer
        $content = $buffer;
        require 'app/views/layout.php';
        $view = ob_get_clean();
        return $view;
    }

    protected function getApp() {
        return $this->app;
    }

}
