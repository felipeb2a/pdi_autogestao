<?php
	include_once('../template/header.php');

	//valida cargo para liberar menus
    require_once('../functions/validacargo.php');
    
    require_once('../dao/funcionarioDao.php');
?>
			 <section id="addavaliador" class="sections degrade" style="">
	            <div class="container">
                    <div class="content" style="width: 90%;min-height: 80vh;">
							<form action="../functions/setavaliador.php" method="post" style="margin-top: 30px;">
	                            <div class="form-group text-center h2">
	                                <label class="text-center text-dark">Definir Avaliador Por Funcionário</label>
	                            </div>

	                                <div class="card bg-light">
		                                <div class="card-header text-center">
		                                    <h6 class="card-title text-uppercase font-weight-bold">Selecione o Avaliador</h6>
		                                    <h7 class="card-title font-weight-light">Responderá as avaliações dos funcionários selecionados logo abaixo.</h7>                                
		                                </div>

		                                <div class="card-body">
		                                    <div class="form-group">
		                                        <select class="form-control" name="avaliador_select">
			                                        <div class="form-group">
								                        <?php
								                        	$resultFuncionario = listFuncionarios();
								                            while($funcionario = mysqli_fetch_array($resultFuncionario)){
								                                echo '<option value="'.$funcionario['id'].'">'.$funcionario['name'].'</option>';
							                                }
							                            ?>
						                            </div>
		                                		</select>
		                                    </div>
		                                </div>
		                            </div>

									<div class="card bg-light">
		                                <div class="card-header text-center">
		                                    <h6 class="card-title text-uppercase font-weight-bold">Selecione os colaboradores</h6>
		                                    <h7 class="card-title font-weight-light">Todos selecionados nesta área serão avaliados pelo avaliador seleciona acima.</h7>                                
		                                </div>

		                                <div class="card-body">
		                                    <div class="form-group">
		                                    	<div class="row">
												<?php
													$resultFuncionario = listFuncionarios();
								                    while($funcionario = mysqli_fetch_array($resultFuncionario)){
								                    	
								                         echo '<div class="col-6">';
								                         echo '<div class="form-check form-check-inline">';
															 echo '<input class="form-check-input" type="checkbox" id="inlineCheckbox'.$funcionario['id'].'" name="option_'.$funcionario['id'].'" value="'.$funcionario['id'].'">';
															 echo '<label class="form-check-label" for="inlineCheckbox'.$funcionario['id'].'">'.$funcionario['name'].'</label>';
														 echo '</div> ';
														 echo '</div> ';
							                        }
							                    ?>
		                                    	</div>
		                                    </div>
		                                </div>
		                            </div>

                                <!-- enviar -->
	                            <div class="form-group">
	                                <button class="btn btn-primary" type="submit">Salvar</button>
	                            </div>
                            </form>
		        	</div>
		        </div>
	         </section>
<?php
	include_once('../template/footer.php');
?>