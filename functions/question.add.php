<?php
	require_once('../includes/session.php');
	require_once('../dao/questionsDao.php');
	require_once('../dao/optionsDao.php');

	$status = '';

    //imprime para test
	//echo '[Num question: '.$_POST['numberquestion'].'] - [ Question: '.$_POST['question'].'] - [Detail Question: '.$_POST['detailquestion'].'] - [Type Question: '.$_POST['typequestion'].']</br>';
		
	$sql = "insert into questions (numquestion, question, detailquestion, type_id) VALUES ('".$_POST['numberquestion']."', '".$_POST['question']."', '".$_POST['detailquestion']."', '".$_POST['typequestion']."')";

	$status = saveQuestion($sql);

	//busca ultima question salva
	$lastQuestion = '';
	$resultLastQuestion = lastQuestion();

	while($question = mysqli_fetch_array($resultLastQuestion)){
        $lastQuestion = $question['id'];
    }

    //save options
	foreach ($_POST as $key => $value) {
		if(strpos($key, 'detailoption_') !== false){
			$detailoption = explode("_", $key);
			//echo '[Num option: '.$detailoption[1].'] - [Detail Option: '.$value.'] - [Id Question: '.$lastQuestion.']</br>';

			$sqloptions = "insert into options (`numoption`, `option`, `questions_id`) values ('".$detailoption[1]."', '".$value."', '".$lastQuestion."')";
			//$sqloptions = "insert into options (numoption, option, questions_id) VALUES ('".$detailoption[1]."', '".$value."', '".$lastQuestion."')";

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