<?php
	class Questions	{

		private $id;
		private $numQuestion;
		private $question;
		private $detailQuestion;
		private $type;

		public function getId(){
	    	return $this->id;
		}
		public function setId($id){
	    	$this->id = $id;
		}
		public function getNumQuestion(){
	    	return $this->numQuestion;
		}
		public function setNumQuestion($numQuestion){
	    	$this->numQuestion = $numQuestion;
		}
		public function getQuestion(){
	    	return $this->question;
		}
		public function setQuestion($question){
	    	$this->question = $question;
		}
		public function getDetailQuestion(){
	    	return $this->detailQuestion;
		}
		public function setDetailQuestion($detailQuestion){
	    	$this->detailQuestion = $detailQuestion;
		}
		public function getType(){
	    	return $this->type;
		}
		public function setType($type){
	    	$this->type = $type;
		}
	}
?>