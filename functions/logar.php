<?php
	require_once('../includes/session.php');
	require_once('../dao/funcionarioDao.php');
	/* LDAP */
	/*
	include_once('../config/ldap.php');

	$logar = connectLDAP($_POST['login'], $_POST['password']);

	if($logar == true){
		//salva session id
		$_SESSION['session_id'] = session_id();

		//salvando usuario na sessao
		$_SESSION['user'] = $_POST['login'];

		$resultFuncionario = findFuncionariosName($_POST['login']);

		while($funcionario = mysqli_fetch_array($resultFuncionario)){
			//salvando usuario na sessao
			$_SESSION['cargo'] = $funcionario['cargo'];

			//salvando usuario id
			$_SESSION['id'] = $funcionario['id'];
		}

		//redireciona para a página
		header('location:../index.php');
	}else{
		//Apagando todos os dados de uma sessão:
		session_unset();
		//Destruindo a sessão:
		session_destroy();	
		//redireciona para a página
		header('location:../paginas/login.php');
	}
	
	/* end */

	/* MySql */
	$user = login($_POST['login']);
	$hash = '';

	//loop user
	while($u = mysqli_fetch_array($user)){
		$hash = $u['password'];
		$cargo = $u['cargo'];
		$id = $u['id'];
	}
	
	// Verify the hash code against the unencrypted password entered 
  	$verify = password_verify($_POST['password'], $hash); 
  
  	// Print the result depending if they match 
  	if ($verify) {
    	//salva session id
		$_SESSION['session_id'] = session_id();

		//salvando usuario na sessao
		$_SESSION['user'] = $_POST['login'];

		//salvando usuario na sessao
		$_SESSION['cargo'] = $cargo;

		//salvando usuario id
		$_SESSION['id'] = $id;

		//redireciona para a página
		header('location:../index.php');
	}
 
  	else { 
      	//Apagando todos os dados de uma sessão:
		session_unset();
		//Destruindo a sessão:
		session_destroy();	
		//redireciona para a página
		header('location:../paginas/login.php');
    } 

	/* end */
?>