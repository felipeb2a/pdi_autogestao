<?php
	require_once('../includes/session.php');
	require_once('../dao/questionsDao.php');
	require_once('../dao/optionsDao.php');

	$status = '';

    //imprime para test
	//echo '[login: '.$_POST['login'].'] - [ nome: '.$_POST['nome'].'] - [cargo: '.$_POST['cargo'].'] - [tipo: '.$_POST['type'].']</br>';
	$sqlOptions = "delete from options where questions_id = '".$_POST['id']."'";

	$status = saveOption($sqlOptions);

	$sql = "delete from questions where id = '".$_POST['id']."'";

	$status = saveQuestion($sql);
	
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