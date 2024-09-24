<?php 
    require_once('../config/mysql.php');

	function login($login){
    	$conn = conectar();
    	$sql = "select * from funcionario where login = '$login'";

		$result = mysqli_query($conn,$sql);
		
		$conn->close();

		return $result;
	}

	function listFuncionarios(){
    	$conn = conectar();
    	$sql = "select * from funcionario where status = '0' order by name";
		$result = mysqli_query($conn,$sql);
		
		$conn->close();

		return $result;
	}

	function listTodosFuncionarios(){
    	$conn = conectar();
    	$sql = "select * from funcionario order by name";
		$result = mysqli_query($conn,$sql);
		
		$conn->close();

		return $result;
	}

	function listFuncionariosType(){
    	$conn = conectar();
    	$sql = "select f.id as idfunc, f.login, f.name as namefunc, f.cargo, f.status, t.name as nametype, t.id as idtype, fg.name as namegestor, fg.id as idgestor from funcionario f inner join type t ON t.id = f.type_id inner join funcionario fg ON f.gestor_id = fg.id order by f.name;";
		$result = mysqli_query($conn,$sql);
		
		$conn->close();

		return $result;
	}


	function listFuncionariosGestor(){
    	$conn = conectar();
    	$sql = "select * from funcionario where type_id = '1' order by name";
		$result = mysqli_query($conn,$sql);
		
		$conn->close();

		return $result;
	}

	function findFuncionariosName($login){
    	$conn = conectar();
    	$sql = "select * from funcionario where login = '$login'";
		$result = mysqli_query($conn,$sql);
		
		$conn->close();

		return $result;
	}

	function saveFuncionario($sql){
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