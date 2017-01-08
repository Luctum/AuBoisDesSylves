<?php
namespace AuBoisDesSylves\Controllers;

use AuBoisDesSylves\Utils\Security;
use AuBoisDesSylves\Controllers\BaseController;
use AuBoisDesSylves\Propel\Models as Models;


class ProductController extends BaseController
{

    public function index()
    {
        $product = Models\BsProductsQuery::create()->find();
        return $this->getApp()['twig']->render('product/products.html.twig', array('products' => $product,  'categories' => $this->getCategories()));

    }

    public function product($categorie)
    {
        $product = Models\BsProductsQuery::create()->filterByIdCategory($categorie)->find();
        return $this->getApp()['twig']->render('product/products.html.twig', array( 'products' => $product,
                                                                                    'categories' => $this->getCategories()));

    }

    public function search($keyword)
    {
        $product = Models\BsProductsQuery::create()->filterByName($keyword)->find();
        return $this->getApp()['twig']->render('product/products.html.twig', array('products' => $product,  'categories' => $this->getCategories()));

    }
}
