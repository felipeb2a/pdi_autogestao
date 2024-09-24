<?php
	require_once('../includes/session.php');
	require_once('../dao/funcionarioDao.php');

	$status = '';

	// The unencrypted password to be hashed 
	$unencrypted_password = $_POST['password']; 
	  
	// The hash of the password can be saved in the database
	$hash = password_hash($unencrypted_password, PASSWORD_DEFAULT); 

    //imprime para test
	//echo '[login: '.$_POST['login'].'] - [ nome: '.$_POST['nome'].'] - [cargo: '.$_POST['cargo'].'] - [tipo: '.$_POST['type'].']</br>';
		
	$sql = "insert into funcionario (login, password, name, cargo, status, gestor_id, type_id) VALUES ('".$_POST['login']."','".$hash."', '".$_POST['nome']."', '".$_POST['cargo']."', '".$_POST['status']."', '".$_POST['gestor']."', '".$_POST['type']."')";

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