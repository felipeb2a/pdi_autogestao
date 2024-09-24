<?php 

	require_once('../config/mysql.php');
	require_once('avaliadorDao.php');

	function saveAvaliacao($sql, $idStatusAvaliacao){
		$conn = conectar();
		$status;

		if ($conn->query($sql) === TRUE) {
			//echo "New record created successfully";
			$status = '<div class="col-md-8 feature-box"><i class="icon-like icon"></i>';
			$status .= '<h3 class="text-success">Formulário enviado com sucesso!</h3>';
			$status .= '</div>';

			$sqlStatus = "update avaliador SET status = '1' where (id = '$idStatusAvaliacao')";
			updateStatusAvaliacaoRespondidaPeloAvaliador($sqlStatus);

		} else {
			//echo "Error: " . $sql . "<br>" . $conn->error;
			$status = '<div class="col-md-8 feature-box"><i class="icon-dislike icon text-danger"></i>';
			$status .= '<h3 class="text-danger">**Formulário não enviado** >>> Erro:  {'.$conn->error.'}<<<</h3>';
			$status .= '</div>';
		}

		$conn->close();

		return $status;
	}

	function listAvaliacaoFuncionario($funcionario_id, $options_id){
    	$conn = conectar();
    	$sql = "select * from avaliacao a inner join funcionario f on f.id = a.funcionario_id inner join options o on o.id = a.options_id where funcionario_id = '$funcionario_id' AND options_id = '$options_id'";
		$result = mysqli_query($conn,$sql);
		
		//print test
		/*while($r = mysqli_fetch_array($result))
		{
		    print $r['numquestion'] . " -- " . $r['question'];
		}*/

		$conn->close();

		return $result;
	}

	function listAvaliacaoFuncionarioAvaliador($idfunc){
		$conn = conectar();
    	$sql = "select f.id as 'idfunc', f.login as 'funcionario', fa.id as 'idavaliador', fa.login as 'avaliador' from avaliacao a inner join funcionario f on f.id = a.funcionario_id inner join funcionario fa on fa.id = a.funcionario_id_avaliador where f.id = '$idfunc' group by fa.login order by fa.id";
		$result = mysqli_query($conn,$sql);

		$conn->close();

		return $result;
	}

	function validaAvaliacao($funcionario_id){
    	$conn = conectar();
    	$sql = "select count(a.id) as count_a, f.type_id, f.name from avaliacao a inner join funcionario f on f.id = a.funcionario_id inner join options o on o.id = a.options_id where funcionario_id = '$funcionario_id'";
		$result = mysqli_query($conn,$sql);

		$conn->close();

		return $result;
	}

	function verificaAvaliacaoParaRemover($sql){
		$conn = conectar();
		$status;

		$result = mysqli_query($conn,$sql);
		
		if (!empty($result)) {
			$status = true;

		} else {
			$status = false;
		}

		$conn->close();

		return $status;
	}

	function removerAvaliacao($sql){
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
		}

		$conn->close();

		return $status;
	}

?>