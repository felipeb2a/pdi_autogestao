<?php
	require_once('../includes/session.php');
	require_once('../dao/avaliadorDao.php');
	require_once('../dao/avaliacaoDao.php');

	$status = '';

    //imprime para test
	//echo '[login: '.$_POST['login'].'] - [ nome: '.$_POST['nome'].'] - [cargo: '.$_POST['cargo'].'] - [tipo: '.$_POST['type'].']</br>';
	
	$sql = "delete from avaliador where funcionario_id = '".$_POST['idfunc']."' and funcionario_id_avaliador = '".$_POST['idavaliador']."'";


	$status = saveAvaliador($sql);

	//deletar avaliacao
	$sql = "select * from avaliacao where funcionario_id = '".$_POST['idfunc']."'";

	$verificador = verificaAvaliacaoParaRemover($sql);

	if($verificador == true){
		if($_POST['idfunc'] == $_POST['idavaliador']){

			$sql = "delete from avaliacao where funcionario_id = '".$_POST['idfunc']."'";
			//$sql = "delete from avaliacao where funcionario_id = '".$_POST['idfunc']."' and funcionario_id_avaliador = '".$_POST['idavaliador']."'";

			$status = removerAvaliacao($sql);

		} else{
			$sql = "delete from avaliacao where funcionario_id = '".$_POST['idfunc']."'";

			$status = removerAvaliacao($sql);

		}
	} else{
		$sql = null;
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