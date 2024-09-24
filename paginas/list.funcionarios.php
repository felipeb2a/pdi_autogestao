<?php
	include_once('../template/header.php');
	
	//valida cargo para liberar menus
    require_once('../functions/validacargo.php');

    require_once('../dao/funcionarioDao.php');
    $resultFuncionario = listFuncionariosType();

?>
			 <section id="listfuncionarios" class="sections degrade" style="">
	            <div class="container">
                    <div class="content" style="width: 90%;height: 95%;">
		                <div class="table-responsive" style="padding-top: 20px;">
							<table class="table table-bordered">
								<tbody>
									<tr class="text-center thead-dark">
								    	<th scope="row">Login</th>
								    	<th scope="row">Nome Sobrenome</th>
								    	<th scope="row">Cargo</th>
								    	<th scope="row">Tipo</th>
								    	<th scope="row">Status</th>
								    	<th scope="row">Editar</th>
								    	<th scope="row">Alterar Senha</th>
								    	<th scope="row">Remover</th>
									</tr>
			                   		<?php
			                  			//loop funcionario
			                   			while($funcionario = mysqli_fetch_array($resultFuncionario)){
									 		echo '<tr class="text-center">';
								    			echo '<th scope="row">'.$funcionario['login'].'</th>';
								    			echo '<th scope="row">'.$funcionario['namefunc'].'</th>';
								    			echo '<th scope="row">'.$funcionario['cargo'].'</th>';
								    			echo '<th scope="row">'.$funcionario['nametype'].'</th>';
								    			//verifica e seta status
								    			$statusFunc = '';
								    			if($funcionario['status'] == 0){
								    				$statusFunc = 'ATIVO';
								    			}else{
								    				$statusFunc = 'DESATIVADO';								    				
								    			}
								    			echo '<th scope="row">'.$statusFunc.'</th>';
								    			//button editar
								    			echo '<th scope="row">';
									    			echo '<form action="../forms/form.edit.funcionario.php" method="post" style="margin-top: 30px;">';
									                    echo '<div class="form-group">';						                    	
										                    echo '<input type="hidden" name="funcid" value="'.$funcionario['idfunc'].'">';
										                    echo '<input type="hidden" name="login" value="'.$funcionario['login'].'">';
										                    echo '<input type="hidden" name="funcname" value="'.$funcionario['namefunc'].'">';
										                    echo '<input type="hidden" name="cargo" value="'.$funcionario['cargo'].'">';
										                    echo '<input type="hidden" name="typeid" value="'.$funcionario['idtype'].'">';
										                    echo '<input type="hidden" name="typename" value="'.$funcionario['nametype'].'">';
										                    echo '<input type="hidden" name="idgestor" value="'.$funcionario['idgestor'].'">';
										                    echo '<input type="hidden" name="namegestor" value="'.$funcionario['namegestor'].'">';
										                    echo '<input type="hidden" name="status" value="'.$funcionario['status'].'">';
									                    echo '</div>';
									                    //<!-- enviar -->
								                        echo '<div class="form-group">';
								                            echo '<button class="btn btn-success" type="submit">Editar</button>';
								                        echo '</div>';
								                  	echo '</form>';
								    			echo '</th>';
								    			//button alterar senha
								    			echo '<th scope="row">';
									    			echo '<form action="../forms/form.edit.funcionario.passwd.php" method="post" style="margin-top: 30px;">';
									                    echo '<div class="form-group">';						                    	
										                    echo '<input type="hidden" name="funcid" value="'.$funcionario['idfunc'].'">';
										                    echo '<input type="hidden" name="funcname" value="'.$funcionario['namefunc'].'">';
									                    echo '</div>';
									                    //<!-- enviar -->
								                        echo '<div class="form-group">';
								                            echo '<button class="btn btn-warning" type="submit">Alterar Senha</button>';
								                        echo '</div>';
								                  	echo '</form>';
								    			echo '</th>';
									    		//button remover
								    			echo '<th scope="row">';
									    			echo '<form action="../functions/funcionario.remove.php" method="post" style="margin-top: 30px;">';
									                    echo '<div class="form-group">';						                    	
										                    echo '<input type="hidden" name="id" value="'.$funcionario['idfunc'].'">';
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