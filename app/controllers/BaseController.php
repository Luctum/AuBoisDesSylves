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

    protected function getApp() {
        return $this->app;
    }

    protected function getCategories() {
        return $this->categories;
    }

}
