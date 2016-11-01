<?php 

namespace AuBoisDesSylves\Models;


class Category{

    //Name of the table in the database
	protected $id;
	protected $name;

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