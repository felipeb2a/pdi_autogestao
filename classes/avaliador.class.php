<?php
	class Avaliador	{

		private $id;
		private $status;
		private $funcionario;
		private $funcionarioAvaliador;

		public function getId(){
	    	return $this->id;
		}
		public function setId($id){
	    	$this->id = $id;
		}
		public function getStatus(){
	    	return $this->status;
		}
		public function setStatus($status){
	    	$this->status = $status;
		}
		public function getFuncionario(){
	    	return $this->funcionario;
		}
		public function setFuncionario($funcionario){
	    	$this->funcionario = $funcionario;
		}
		public function getFuncionarioAvaliador(){
	    	return $this->funcionarioAvaliador;
		}
		public function setFuncionarioAvaliador($funcionarioAvaliador){
	    	$this->funcionarioAvaliador = $funcionarioAvaliador;
		}
	}
?>