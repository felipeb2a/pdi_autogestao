<?php
    //valida quantidade de notas que será inserida na lista e no relatorio por funcionario
    $resultAvaliacao = validaAvaliacao($_POST['func_select']);
    $funcionario = $_POST['func_select'];
    $type = '';
    $name = '';
    $quant_avaliacoes_respondidas = 0;
    $quant_notas = 0;
    $quant_options = 0;

    while($avaliacao = mysqli_fetch_array($resultAvaliacao)){

        //verifica se já foi respondido alguma auto avaliacao
        if(!($avaliacao['count_a'] > 0)){
            $status = '<div class="col-md-8 feature-box"><i class="icon-dislike icon text-danger"></i>';
            $status .= '<h3 class="text-danger">**Ainda não foram respondidas todas as avaliações desse colaborador**<<<</h3>';
            $status .= '</div>';

            include_once('../paginas/page-status.php');
            die();
        }

        //set avaliacoes respondidas
        $quant_avaliacoes_respondidas = $avaliacao['count_a'];

        //set variaveis para download excel
        $type = $avaliacao['type_id'];
        $name = $avaliacao['name'];

        //verifica tipo e set as questoes
        if($avaliacao['type_id'] == 1){
            $resultQuestion = listQuestionsLider();
        }
        if($avaliacao['type_id'] == 2){
            $resultQuestion = listQuestionsLiderado();
        }
    }

    //set quant option para dividir com a quantidade de avaliacoes
    $resultOption = quantOptionPorType($type);
    while($option = mysqli_fetch_array($resultOption)){
        $quant_options = $option['count_o'];
    }

    //define quantidade notas
    $quant_notas = $quant_avaliacoes_respondidas / $quant_options;

?>