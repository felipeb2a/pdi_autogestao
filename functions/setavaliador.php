<?php

	require_once('../dao/avaliadorDao.php');

	$status;
	
	foreach ($_POST as $key => $value) {

		if(strpos($key, 'option_') !== false){
			//set status como não respondida
			$statusAvaliacao = 0;

			$option = explode("_", $key);
			$optionId = $option[1];
			//echo '[value: '.$value. '] - [ id colaborador '. $option[0].': '. $option[1]. '] - [ id avaliador: '.$_POST['avaliador_select']. ']</br>';
		
			$sql = "insert into avaliador (status, funcionario_id, funcionario_id_avaliador) VALUES (".$statusAvaliacao.", ".$option[1].", ".$_POST['avaliador_select'].")";

			$status = saveAvaliador($sql);
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