<?php
	class Avaliacao	{

		private $id;
		private $value;
		private $option;
		private $funcionario;

		public function getId(){
	    	return $this->id;
		}
		public function setId($id){
	    	$this->id = $id;
		}
		public function getValue(){
	    	return $this->value;
		}
		public function setValue($value){
	    	$this->value = $value;
		}
		public function getOption(){
	    	return $this->option;
		}
		public function setOption($option){
	    	$this->option = $option;
		}
		public function getFuncionario(){
	    	return $this->funcionario;
		}
		public function setFuncionario($funcionario){
	    	$this->funcionario = $funcionario;
		}
	}
?>