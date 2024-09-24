<?php
	require_once('../includes/session.php');
	require_once('../dao/funcionarioDao.php');

	$status = '';

    //imprime para test
	//echo '[login: '.$_POST['login'].'] - [ nome: '.$_POST['nome'].'] - [cargo: '.$_POST['cargo'].']  - [status: '.$_POST['status'].'] - [gestor: '.$_POST['gestor'].'] - [tipo: '.$_POST['type'].']</br>';
	
	$sql = "update funcionario SET login = '".$_POST['login']."', name = '".$_POST['nome']."', cargo = '".$_POST['cargo']."', status = '".$_POST['status']."', gestor_id ='".$_POST['gestor']."', type_id ='".$_POST['type']."' where  id = '".$_POST['id']."'";


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