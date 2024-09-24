<?php 
    require_once('../config/mysql.php');

    function listType(){
		$conn = conectar();
    	$sql = "select * from type";
		$result = mysqli_query($conn,$sql);
		
		//print test
		/*
		while($r = mysqli_fetch_array($result))
		{
			echo '<br>';
	        echo '<br>';
	        echo '<br>';
	        echo '<br>';
	        echo '<br>';
	        echo '<br>';
	        echo 'Teste - ';
		    print $r['id'] . " -- " . $r['name'];
		    echo '<br>';
		}
		/* end test */
		

		$conn->close();

		return $result;
	}

?>