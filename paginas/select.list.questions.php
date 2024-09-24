<?php
	include_once('../template/header.php');

	//valida cargo para liberar menus
    require_once('../functions/validacargo.php');
?>

<?php
    require_once('../dao/typeDao.php');
    $resultType = listType();
?>
			 <section id="" class="degrade" style="">
			 	<div class="container container2">
	            <div class="container container3">
                    <div class="content content2" style="width: 90%;height: 95%;">
							<form action="list.questions.php" method="post" style="margin-top: 30px;">
	                            <div class="form-group text-center h2">
	                                <label class="text-center text-dark">Lista de perguntas</label>
	                            </div>
	                                <div class="form-group">
	                                    <label for="inputOption">Selecione</label>
	                                </div>
	                                <div class="form-group">
	                                    <select class="form-control" name="type_select">
	                                        <div class="form-group">
						                        <?php
						                            while($type = mysqli_fetch_array($resultType)){
						                                echo '<option value="'.$type['id'].'">'.$type['name'].'</option>';
					                                }
					                            ?>
				                            </div>
                                		</select>
	                                </div>
                                <!-- enviar -->
	                            <div class="form-group">
	                                <button class="btn btn-primary" type="submit">Abrir</button>
	                            </div>
                            </form>
		        	</div>
		        </div>
		    </div>
	         </section>
<?php
	include_once('../template/footer.php');
?>