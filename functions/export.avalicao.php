<?php
	
	require_once('../dao/questionsDao.php');

    if($_POST['type'] == 1){
        $resultQuestion = listQuestionsLider();
    }else{
        $resultQuestion = listQuestionsLiderado();
    }

    require_once('../dao/optionsDao.php');
    require_once('../dao/avaliacaoDao.php');

    $delimiter = ";";
    $filename = $_POST['name'] . "-" . date('d-m-Y') . ".csv";
    
    //create a file pointer
    $f = fopen('php://memory', 'w');
    
    //set headers to download file rather than displayed
    header('Content-Encoding: UTF-8');
    header('Content-type: text/csv; charset=UTF-8');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    echo "\xEF\xBB\xBF"; // UTF-8 BOM

    $somaTotalGeral = 0;
    $count_questions = 0;
    //loop questions
	while($questions = mysqli_fetch_array($resultQuestion)){
        $count_questions++;
		$fieldsQuestion =  array($questions['numquestion']. ' - ' .$questions['question']);
		fputcsv($f, $fieldsQuestion, $delimiter);

        $quant_notas = $_POST['quant_notas'];
        $fieldsNotas = [];
        for($i=1;$i<=$quant_notas;$i++){
            $fieldsNotas = array('#', 'Nota '.$i, 'Soma');
        }
        fputcsv($f, $fieldsNotas, $delimiter);


        //set e busca option por id da questao
        $resultOption = listOptions($questions['id']);

        $somaTotalCompetencia = 0;

        //loop options
        $optionsValues = [];
        $count_options = 0;
        while($options = mysqli_fetch_array($resultOption)){
            $count_options++;
            $optionsValues = array($options['numoption']. ' - '.$options['option']);

            //set e busca avaliacao por id do funcionario
            $resultAvaliacao = listAvaliacaoFuncionario($_POST['funcionario'], $options['id']);
            $somaOptions = 0;
            //loop avaliacao
            while($avaliacao = mysqli_fetch_array($resultAvaliacao)){
                array_push($optionsValues, $avaliacao['value']);
                $somaOptions += $avaliacao['value']; //total option
            }
            $somaTotalCompetencia += $somaOptions; //total competencia
            $somaTotalGeral += $somaOptions; //total geral
            
            array_push($optionsValues, strval($somaOptions));

            fputcsv($f, $optionsValues, $delimiter);
        }
        //total por competencia
        $arraySomaCompetencia = array('TOTAL POR COMPETÊNCIA', $somaTotalCompetencia);
        fputcsv($f, $arraySomaCompetencia, $delimiter);
     
        //media geral
        $mediaTotalCompetencia = $somaTotalCompetencia / $count_options;
        $arrayMediaCompetencia = array('MÉDIA COMPETÊNCIA', round($mediaTotalCompetencia));
        fputcsv($f, $arrayMediaCompetencia, $delimiter);
	}
    //total geral
    $arraySomaGeral = array('TOTAL GERAL', $somaTotalGeral);
    fputcsv($f, $arraySomaGeral, $delimiter);
    //media geral
    $mediaTotalGeral = $somaTotalGeral / $count_questions;
    $arrayMediaGeral = array('MÉDIA GERAL', round($mediaTotalGeral));
    fputcsv($f, $arrayMediaGeral, $delimiter);

    //move back to beginning of file
    fseek($f, 0);
    
    //output all remaining data on a file pointer
    fpassthru($f);

exit;
?>