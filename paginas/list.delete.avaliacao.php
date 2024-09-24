<?php
	include_once('../template/header.php');
	
	//valida cargo para liberar menus
    require_once('../functions/validacargo.php');

    require_once('../dao/avaliacaoDao.php');
    $resultAvaliacao = listAvaliacaoFuncionarioAvaliador($_POST['func_select']);


?>
			 <section id="listfuncionarios" class="sections degrade" style="min-height: 80vh;">
	            <div class="container">
                    <div class="content" style="width: 90%;height: 95%;">
		                <div class="table-responsive" style="padding-top: 20px;">
							<table class="table table-bordered">
								<tbody>
									<tr class="text-center thead-dark">
								    	<th scope="row">Funcionario</th>
								    	<th scope="row">Funcionario que repondeu a avaliação</th>
								    	<th scope="row">Remover</th>

									</tr>
			                   		<?php
			                  			//loop funcionario
			                   			while($funcionario = mysqli_fetch_array($resultAvaliacao)){
									 		echo '<tr class="text-center">';
								    			echo '<th scope="row">'.$funcionario['funcionario'].'</th>';
								    			echo '<th scope="row">'.$funcionario['avaliador'].'</th>';
								    			//button remover
								    			echo '<th scope="row">';
									    			echo '<form action="../functions/avaliacao.remove.php" method="post" style="margin-top: 30px;">';
									                    echo '<div class="form-group">';						                    	
										                    echo '<input type="hidden" name="namefunc" value="'.$funcionario['funcionario'].'">';
										                    echo '<input type="hidden" name="idfunc" value="'.$funcionario['idfunc'].'">';
										                    echo '<input type="hidden" name="idavaliador" value="'.$funcionario['idavaliador'].'">';
										                    echo '<input type="hidden" name="nameavaliador" value="'.$funcionario['avaliador'].'">';
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