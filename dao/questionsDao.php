<?php 
	require_once('../includes/session.php');
    require_once('../config/mysql.php');

    function listQuestionsLider(){
		$conn = conectar();
    	$sql = "select * from questions where type_id = 1";
		$result = mysqli_query($conn,$sql);
		
		//print test
		/*while($r = mysqli_fetch_array($result))
		{
		    print $r['numquestion'] . " -- " . $r['question'];
		}*/

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

	function listQuestionsType($type_id){
		$conn = conectar();
    	$sql = "select q.id as idquestion, q.numquestion, q.question, q.detailquestion, t.id as idtype, t.name as nametype from questions q inner join type t on t.id = q.type_id where type_id = '$type_id'";
		$result = mysqli_query($conn,$sql);

		$conn->close();

		return $result;
	}

	function lastQuestion(){
		$conn = conectar();
    	$sql = "select * from questions order by id desc limit 1";
		$result = mysqli_query($conn,$sql);

		$conn->close();

		return $result;
	}

	function saveQuestion($sql){
		$conn = conectar();
		$status;

		if ($conn->query($sql) === TRUE) {
			//echo "New record created successfully";
			$status = '<div class="col-md-8 feature-box"><i class="icon-like icon"></i>';
			$status .= '<h3 class="text-success">Formulário enviado com sucesso!</h3>';
			$status .= '</div>';
		} else {
			//echo "Error: " . $sql . "<br>" . $conn->error;
			$status = '<div class="col-md-8 feature-box"><i class="icon-dislike icon text-danger"></i>';
			$status .= '<h3 class="text-danger">**Formulário não enviado** >>> Erro:  {'.$conn->error.'}<<<</h3>';
			$status .= '</div>';

			include_once('../paginas/page-status.php'); //inclui pagina de status envio form
        	//die('Erro inesperado!');
		}

		$conn->close();

		return $status;
	}

?>