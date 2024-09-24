<?php 

	require_once('config/mysql.php');

	function listAvaliacaoParaResponderFuncionario($funcionario_id_avaliador){
    	$conn = conectar();
    	//$sql = "select * from avaliador a inner join funcionario f on f.id = a.funcionario_id WHERE funcionario_id_avaliador = '$funcionario_id_avaliador';";
    	$sql = "select a.id as 'id_a', a.status, a.funcionario_id, a.funcionario_id_avaliador, f.id as 'id_f', f.login, f.name, f.cargo, f.type_id from avaliador a inner join funcionario f on f.id = a.funcionario_id where funcionario_id_avaliador = '$funcionario_id_avaliador'";
		$result = mysqli_query($conn,$sql);
		
		//print test
		/*while($r = mysqli_fetch_array($result))
		{
		    print $r['numquestion'] . " -- " . $r['question'];
		}*/

		$conn->close();

		return $result;
	}

?>