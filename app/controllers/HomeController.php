<?php
namespace AuBoisDesSylves\Controllers;


class HomeController extends BaseController{

    public function index(){
        $buffer = 1;

        //Inject the view in the layout.
        return $this->injectLayout($buffer);
    }


}