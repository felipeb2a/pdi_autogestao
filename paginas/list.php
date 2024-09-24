<?php
	include_once('../template/header.php');
	
	//valida cargo para liberar menus
    require_once('../functions/validacargo.php');
	
    //include questions
    require_once('../dao/questionsDao.php');
    $resultQuestion;

    //include options
    require_once('../dao/optionsDao.php');

    //include avaliacao
    require_once('../dao/avaliacaoDao.php');

    //include validacoes para a lista e download do relatorio
    require_once('../functions/validalistavaliacao.php');

?>
			 <section id="list" class="sections degrade" style="">
	            <div class="container">
                    <div class="content" style="width: 90%;height: 95%;">
		                <div class="table-responsive" style="padding-top: 20px;">
							<table class="table table-bordered">
							    <thead>
								    <tr>
								    	<!--<th scope="col" colspan="6"><a href="../functions/exportAvalicao.php" class="btn btn-success col-12">Download Excel</a></th>-->

								    	<form action="../functions/export.avalicao.php" method="post" style="margin-top: 30px;">
						                    <div class="form-group text-center h2">
						                        <label class="text-center text-dark">Lista</label>
						                    </div>
						                    <div class="form-group">
						                    	<?php
							                    	echo '<input class="form-control" type="hidden" name="funcionario" value="'.$funcionario.'">';
							                    	echo '<input class="form-control" type="hidden" name="type" value="'.$type.'">';
							                    	echo '<input class="form-control" type="hidden" name="name" value="'.$name.'">';
							                    	echo '<input class="form-control" type="hidden" name="quant_notas" value="'.$quant_notas.'">';
							                    ?>
						                    </div>
						                    <!-- enviar -->
					                        <div class="form-group">
					                            <button class="btn btn-success" type="submit">Download Excel</button>
					                        </div>
					                  	</form>
								    </tr>
								</thead>
								<tbody>
			                   		<?php
			                   			$somaTotalGeral = 0;
			                   			$count_questions = 0;
			                  			//loop questions
			                   			while($questions = mysqli_fetch_array($resultQuestion)){
			                   				$count_questions++;
									 		echo '<tr class="text-center thead-dark">';
								    			echo '<th scope="row" colspan="12">'.$questions['numquestion']. ' - ' .$questions['question'].'</th>';
									    	echo '</tr>';
									    	//notas
									    	echo '<tr class="text-center">';
										    	echo '<th scope="col">#</th>';
										    	for($i=1;$i<=$quant_notas;$i++){
										    		echo '<th scope="col">Nota '.$i.'</th>';
										    	}
										    	echo '<th scope="col">Soma</th>';
									    	echo '</tr>';

								    		//set e busca option por id da questao
                                            $resultOption = listOptions($questions['id']);

                                            $somaTotalCompetencia = 0;

                                            //loop options
                                            $count_options = 0;
								    		while($options = mysqli_fetch_array($resultOption)){
                                            	$count_options++;	
								    			echo '<tr class="text-left">';
									    			echo '<td>'.$options['numoption']. ' - '.$options['option'].'</td>';

													//set e busca avaliacao por id do funcionario
												    $resultAvaliacao = listAvaliacaoFuncionario($_POST['func_select'], $options['id']);
												    $somaOptions = 0;
									    			//loop avaliacao
								    				while($avaliacao = mysqli_fetch_array($resultAvaliacao)){
								    					echo '<td>'.$avaliacao['value']. '</td>';
								    					$somaOptions += $avaliacao['value'];
								    				}
								    				$somaTotalCompetencia += $somaOptions;
								    				$somaTotalGeral += $somaOptions;
								    				echo '<td>'.$somaOptions. '</td>';
									    		echo '</tr>';
								    		}
								    		echo '<tr class="text-center text-primary thead-light">';
								    			$mediaTotalCompetencia = $somaTotalCompetencia/$count_options;
								    			echo '<th scope="row" colspan="12"> NOTA TOTAL: '.$somaTotalCompetencia.' / MÉDIA: '.round($mediaTotalCompetencia).'</th>';

								    			/* aviso das notas informadas
								    			$competencia = "";
								    			if($somaTotalCompetencia <= 8){
								    				$competencia = "Necessidade de ajuste";
								    			}else if($somaTotalCompetencia > 8 && $somaTotalCompetencia <= 16){
								    				$competencia = "Abaixo do esperado";
								    			}else if($somaTotalCompetencia > 16 && $somaTotalCompetencia <= 24){
								    				$competencia = "Dentro do esperado";
								    			}else{
								    				$competencia = "Exemplo nesta competência";
								    			}
								    			
								    			echo '<th scope="row" colspan="4">'.$competencia.'</th>';
								    			*/
									    	echo '</tr>';
									    }
									    echo '<tr class="text-center text-primary thead-dark">';
									    	$mediaTotalGeral = $somaTotalGeral / $count_questions;
								    		echo '<th scope="row" colspan="12"> NOTA TOTAL GERAL: '.$somaTotalGeral.' / MÉDIA GERAL: '.round($mediaTotalGeral).'</th>';
									    echo '</tr>';
									?>
								</tbody>
							</table>
						</div>
		        	</div>
		        </div>
	         </section>
<?php
	include_once('../template/footer.php');
?>