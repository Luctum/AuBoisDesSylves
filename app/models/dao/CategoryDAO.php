<?php

namespace AuBoisDesSylves\Models\DAO;


use Doctrine\DBAL\Connection;
use AuBoisDesSylves\Models\Category;

class  CategoryDAO extends BaseDAO{


    public function findAll() {
        $query = "SELECT * FROM bs_categories";
        $result = $this->getDb()->fetchAll($query);

        //all elements from the array are converted to a category object
        $categories = array();
        foreach ($result as $row) {
            $articleId = $row['id'];
            $categories[$articleId] = $this->build($row);
        }
        return $categories;
    }

    //Transform an the array to a Category
    private function build(array $row) {
        $category = new Category();
        $category->setId($row['id']);
        $category->setName($row['name']);
        return $category;
    }

}