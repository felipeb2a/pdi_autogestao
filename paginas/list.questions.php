<?php
	include_once('../template/header.php');
	
	//valida cargo para liberar menus
    require_once('../functions/validacargo.php');

    require_once('../dao/questionsDao.php');
    $resultQuestion = listQuestionsType($_POST['type_select']);

?>
			 <section id="listquestions" class="sections degrade" style="">
	            <div class="container">
                    <div class="content" style="width: 90%;height: 95%;">
		                <div class="table-responsive" style="padding-top: 20px;">
							<table class="table table-bordered">
								<tbody>
									<tr class="text-center thead-dark">
								    	<th scope="row">Num Pergunta</th>
								    	<th scope="row">Pergunta</th>
								    	<th scope="row">Tipo</th>
								    	<th scope="row">Editar</th>
								    	<th scope="row">Remover</th>
									</tr>
			                   		<?php
			                  			//loop funcionario
			                   			while($question = mysqli_fetch_array($resultQuestion)){
									 		echo '<tr class="text-center">';
								    			echo '<th scope="row">'.$question['numquestion'].'</th>';
								    			echo '<th scope="row">'.$question['question'].'</th>';
								    			echo '<th scope="row">'.$question['nametype'].'</th>';
								    			//button editar
								    			echo '<th scope="row">';
									    			echo '<form action="../forms/form.edit.question.php" method="post" style="margin-top: 30px;">';
									                    echo '<div class="form-group">';						                    	
										                    echo '<input type="hidden" name="idquestion" value="'.$question['idquestion'].'">';
										                    echo '<input type="hidden" name="numquestion" value="'.$question['numquestion'].'">';
										                    echo '<input type="hidden" name="question" value="'.$question['question'].'">';
										                    echo '<input type="hidden" name="detailquestion" value="'.$question['detailquestion'].'">';
										                    echo '<input type="hidden" name="typeid" value="'.$question['idtype'].'">';
										                    echo '<input type="hidden" name="typename" value="'.$question['nametype'].'">';
									                    echo '</div>';
									                    //<!-- enviar -->
								                        echo '<div class="form-group">';
								                            echo '<button class="btn btn-success" type="submit">Editar</button>';
								                        echo '</div>';
								                  	echo '</form>';
								    			echo '</th>';
									    		//button remover
								    			echo '<th scope="row">';
									    			echo '<form action="../functions/question.remove.php" method="post" style="margin-top: 30px;">';
									                    echo '<div class="form-group">';						                    	
										                    echo '<input type="hidden" name="id" value="'.$question['idquestion'].'">';
									                    echo '</div>';
									                    //<!-- enviar -->
								                        echo '<div class="form-group">';
								                            echo '<button class="btn btn-danger" type="submit">Remover</button>';
								                        echo '</div>';
								                  	echo '</form>';
								    			echo '</th>';
									    	echo '</tr>';
									    }
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