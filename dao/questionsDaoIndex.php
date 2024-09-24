<?php 
	require_once('includes/session.php');
    require_once('config/mysql.php');

    function listQuestionsLider(){
		$conn = conectar();
    	$sql = "select * from questions where type_id = 1";
		$result = mysqli_query($conn,$sql);
		
		$conn->close();

		return $result;
	}

	function listQuestionsLiderado(){
		$conn = conectar();
    	$sql = "select * from questions where type_id = 2";
		$result = mysqli_query($conn,$sql);

		$conn->close();

		return $result;
	}

?>