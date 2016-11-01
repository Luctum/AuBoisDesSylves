<?php

namespace AuBoisDesSylves\Models\DAO;


use Doctrine\DBAL\Connection;
use AuBoisDesSylves\Models\User;

class  UserDAO extends BaseDAO{


    public function findAll() {
        $query = "SELECT * FROM bs_users";
        $result = $this->getDb()->fetchAll($query);

        //all elements from the array are converted to a user object
        $categories = array();
        foreach ($result as $row) {
            $articleId = $row['id'];
            $users[$articleId] = $this->build($row);
        }
        return $users;
    }

    //Transform an the array to a Category
    private function build(array $row) {
        $user = new User();
        $user->setId($row['id']);
        $user->setAdress($row['adress']);
        $user->setCity($row['city']);
        $user->setMail($row['mail']);
        $user->setName($row['name']);
        $user->setPassword($row['password']);
        $user->setPostalCode($row['postal_code']);
        $user->setRank($row['rank']);
        $user->setSurname($row['surname']);
        $user->setSuspensionDate($row['suspensionDate']);
        return $user;
    }

}