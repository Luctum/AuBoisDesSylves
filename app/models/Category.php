<?php 

namespace AuBoisDesSylves\Models;


class Category{

    //Name of the table in the database
    public $tableName;

	protected $id;
	protected $name;

    public function __construct(){
        $this->tableName="category";
    }

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
		return $this->id;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
		return $this->name;
	}
}