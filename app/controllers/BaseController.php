<?php
namespace AuBoisDesSylves\Controllers;

use AuBoisDesSylves\Propel\Models\BsCategoriesQuery;
/* Functions used in every controllers */
class BaseController{

    protected $app;
    protected $categories;

    public function  __construct($app){
        $this->app = $app;
        $this->categories = BsCategoriesQuery::create()->find();
    }
/*
    //Add the content of "buffer" in the layout
    protected function injectLayout($buffer){
      //Récupère toutes les catégories
        ob_start();  //Buffer
        $content = $buffer;
        require 'app/views/layout.php';
        $view = ob_get_clean();
        return $view;
    }
*/
    protected function getApp() {
        return $this->app;
    }

    protected function getCategories() {
        return $this->categories;
    }

}
