<?php

namespace AuBoisDesSylves\Models\DAO;

use Doctrine\DBAL\Connection;

/* TODO : WIP CLASSE GENERIQUE QUI REMPLACE TOUS LES DAO */

class BaseDAO{

    /* Database connexion from Doctrine DBAL*/
    private $db;

    public function __construct(Connection $db) {
        $this->db = $db;
    }

    protected function getDb() {
        return $this->db;
    }

   //Return all the fields from the database
    /*
    public function findAll($table){
        $query = "SELECT * FROM " . "$table";
        $result = $this->db->fetchAll($query);

        $object = array();
    }

    //Return an element of the table passed in parameter
    public function find($table,$columnName,$args){

    }

    //Delete the object passed in parameter from the database
    public function delete($object){

    }

    //Edit the object passed in parameter from the database
    public function edit($object){

    }

    //Save the new object from the database
    public function save($object){

    }

    //Transform the content of an array to a new Object.
    public function bindObject(){
    }
    */
}