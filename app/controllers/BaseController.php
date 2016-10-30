<?php
namespace AuBoisDesSylves\Controllers;

/* Functions used in every controllers */
class BaseController{

    public $app;
    public function  __construct($app){
        $this->app = $app;
    }

    /* Add the content of "buffer" in the layout */
    public function injectLayout($buffer){
        $categories = $this->app['dao.category']->findAll();
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