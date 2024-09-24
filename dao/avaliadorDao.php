<?php 

	require_once('../config/mysql.php');

	function saveAvaliador($sql){
		$conn = conectar();
		$status;

		if ($conn->query($sql) === TRUE) {
			//echo "New record created successfully";
			$status = '<div class="col-md-8 feature-box"><i class="icon-like icon"></i>';
			$status .= '<h3 class="text-success">Avaliador salvo com sucesso!</h3>';
			$status .= '</div>';

		} else {
			//echo "Error: " . $sql . "<br>" . $conn->error;
			$status = '<div class="col-md-8 feature-box"><i class="icon-dislike icon text-danger"></i>';
			$status .= '<h3 class="text-danger">**Avaliador não salvo** >>> Erro:  {'.$conn->error.'}<<<</h3>';
			$status .= '</div>';
		}

		$conn->close();

		return $status;
	}

	function updateStatusAvaliacaoRespondidaPeloAvaliador($sql){
		$conn = conectar();
		$status;

		if ($conn->query($sql) === TRUE) {
			//echo "New record created successfully";
			$status = '<div class="col-md-8 feature-box"><i class="icon-like icon"></i>';
			$status .= '<h3 class="text-success">Status atualizado com sucesso!</h3>';
			$status .= '</div>';

		} else {
			//echo "Error: " . $sql . "<br>" . $conn->error;
			$status = '<div class="col-md-8 feature-box"><i class="icon-dislike icon text-danger"></i>';
			$status .= '<h3 class="text-danger">**Erro ao atualizar status** >>> Erro:  {'.$conn->error.'}<<<</h3>';
			$status .= '</div>';

			include_once('../paginas/page-status.php'); //inclui pagina de status envio form
			die('Erro ao atualizar status!');
		}

		$conn->close();

		return $status;
	}

	function listAvaliador($idfunc){
		$conn = conectar();
    	$sql = "select f.id as 'idfunc', f.login as 'funcionario', fa.id AS 'idavaliador', fa.login as 'avaliador' from avaliador a inner join funcionario f on f.id = a.funcionario_id inner join funcionario fa on fa.id = a.funcionario_id_avaliador WHERE fa.id = '$idfunc' order by fa.id";
		$result = mysqli_query($conn,$sql);

		$conn->close();

		return $result;
	}

?>