<?php
	require_once('../includes/session.php');
	require_once('../dao/avaliacaoDao.php');

	$status;
	
	foreach ($_POST as $key => $value) {
		if(strpos($key, 'option_') !== false){
			$option = explode("_", $key);
			$optionId = $option[1];
			
			//verifica se o avaliador e outra pessoa e seta os pesos das respostas
			if($_SESSION['id'] == $_POST['funcionario']){
                $value = $value * 1;
            }else{
                $value = $value * 2;
            }

            //imprime para test
			//echo '[value: '.$value. '] - [ id '. $option[0].': '. $option[1]. '] - [ id funcionario: '.$_POST['funcionario']. ']</br>';
		
			$sql = "insert into avaliacao (value, options_id, funcionario_id, funcionario_id_avaliador) VALUES (".$value.", ".$option[1].", ".$_POST['funcionario'].", ".$_SESSION['id'].")";

			$idStatusAvaliacao = $_POST['status'];
			$status = saveAvaliacao($sql, $idStatusAvaliacao);
		}
	}
	
	include_once('../paginas/page-status.php'); //inclui pagina de status envio form
	/*
	//fechando a sessao
	//Inicia sessao
	session_start();

	//Apagando todos os dados de uma sessão:
	session_unset();

	//Destruindo a sessão:
	session_destroy();
	*/
?>