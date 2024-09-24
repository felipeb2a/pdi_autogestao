<?php
	class Options	{

		private $id;
		private $numOption
		private $option
		private $question

		public function getId(){
	    	return $this->id;
		}
		public function setId($id){
	    	$this->id = $id;
		}
		public function getNumOption(){
	    	return $this->numOption;
		}
		public function setNumOption($numOption){
	    	$this->numOption = $numOption;
		}
		public function getOption(){
	    	return $this->option;
		}
		public function setOption($option){
	    	$this->option = $option;
		}
		public function getQuestion(){
	    	return $this->question;
		}
		public function setQuestion($question){
	    	$this->question = $question;
		}
	}
?>