<?php
	require_once('../includes/session.php');
	require_once('../dao/funcionarioDao.php');

	$status = '';

    //imprime para test
	//echo '[login: '.$_POST['login'].'] - [ nome: '.$_POST['nome'].'] - [cargo: '.$_POST['cargo'].'] - [tipo: '.$_POST['type'].']</br>';
	
	$sql = "delete from funcionario where id = '".$_POST['id']."'";


	$status = saveFuncionario($sql);
	
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