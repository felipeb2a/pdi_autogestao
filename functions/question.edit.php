<?php
	require_once('../includes/session.php');
	require_once('../dao/questionsDao.php');
	require_once('../dao/optionsDao.php');

	$status = '';

    //imprime para test
	//echo '[id: '.$_POST['idquestion'].'] - [numquestion: '.$_POST['numquestion'].'] - [ question: '.$_POST['question'].'] - [detailquestion: '.$_POST['detailquestion'].'] - [type_id: '.$_POST['typequestion'].']</br>';
	
	//update question
	$sql = "update questions SET numquestion = '".$_POST['numquestion']."', question = '".$_POST['question']."', detailquestion = '".$_POST['detailquestion']."', type_id ='".$_POST['typequestion']."' where  id = '".$_POST['idquestion']."'";

	$status = saveQuestion($sql);

	//update options
	foreach ($_POST as $key => $value) {
		if(strpos($key, 'detailoption_') !== false){
			$detailoption = explode("_", $key);
			//echo '[Num option: '.$detailoption[1].'] - [Detail Option: '.$value.'] - [Id Question: '.$_POST['idquestion'].']</br>';

			$sqloptions = "update options SET `option` = '".$value."' where id = '".$detailoption[1]."'";

			$status = saveOption($sqloptions);
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