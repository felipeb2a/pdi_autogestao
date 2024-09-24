<?php
	class Funcionario	{

		private $id;
		private $name;
		private $cargo;
		private $type;

		public function getId(){
	    	return $this->id;
		}
		public function setId($id){
	    	$this->id = $id;
		}
		public function getName(){
	    	return $this->name;
		}
		public function setName($name){
	    	$this->name = $name;
		}
		public function getCargo(){
	    	return $this->cargo;
		}
		public function setCargo($cargo){
	    	$this->cargo = $cargo;
		}
		public function getType(){
	    	return $this->type;
		}
		public function setType($type){
	    	$this->type = $type;
		}
	}
?>