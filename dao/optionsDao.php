<?php 
	require_once('../includes/session.php');
    require_once('../config/mysql.php');

    function listOptions($question_id){
    	$conn = conectar();
    	$sql = "select * from options where questions_id = '$question_id' order by numoption";
		$result = mysqli_query($conn,$sql);
		
		//print test
		/*while($r = mysqli_fetch_array($result))
		{
		    print $r['numquestion'] . " -- " . $r['question'];
		}*/

		$conn->close();

		return $result;
	}

	function quantOptionPorType($type_id){
    	$conn = conectar();
    	$sql = "select count(o.id) as count_o from options o inner join questions q on o.questions_id = q.id where q.type_id = '$type_id'";
		$result = mysqli_query($conn,$sql);

		$conn->close();

		return $result;
	}

	function saveOption($sql){
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