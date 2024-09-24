<?php
    include_once('../template/header.php');
    include_once('../dao/typeDao.php');
    include_once('../dao/funcionarioDao.php');
    $resulType = listType();
    $resulGestor = listFuncionariosGestor();
?>
    <section id="editfuncionario" class="sections degrade">
        <div class="container">
            <div class="content" style="width: 85%;height: 95%;">
                <form action="../functions/funcionario.edit.php" method="post" style="margin-top: 30px;">
                    <div class="form-group text-center h2">
                        <label class="text-center text-dark">Editar Funcionário</label>
                    </div>
                    
                    <div class="form-group">
                        <?php
                            echo '<input type="hidden" name="id" value="'.$_POST['funcid'].'">';
                        ?>
                    </div>
                    <div class="form-group">
                        <label class="text-center text-dark">Login</label>
                        <?php
                            echo '<input class="form-control" required="true" name="login" value="'.$_POST['login'].'">';
                        ?>
                    </div>
                    <div class="form-group">
                        <label class="text-center text-dark">Nome e Sobrenome</label>
                        <?php
                            echo '<input class="form-control" required="true" name="nome" value="'.$_POST['funcname'].'">';
                        ?>
                    </div>
                    <div class="form-group">
                        <label class="text-center text-dark">Cargo</label>
                        <?php
                            echo '<input class="form-control" required="true" name="cargo" value="'.$_POST['cargo'].'">';
                        ?>
                    </div>

                   <div class="form-group">                 
                        <label for="inputTipo">Tipo</label>
                        <select class="form-control" name="type">
                            <?php
                                echo '<option selected value="'.$_POST['typeid'].'">'.$_POST['typename'].'</option>';
                                while($type = mysqli_fetch_array($resulType)){
                                    echo '<option value="'.$type['id'].'">'.$type['name'].'</option>';
                                }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">                 
                        <label for="inputTipo">Gestor</label>
                        <select class="form-control" name="gestor">
                            <?php
                                echo '<option selected value="'.$_POST['idgestor'].'">'.$_POST['namegestor'].'</option>';
                                while($gestor = mysqli_fetch_array($resulGestor)){
                                    echo '<option value="'.$gestor['id'].'">'.$gestor['name'].'</option>';
                                }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">                 
                        <label for="inputStatus">Status</label>
                        <select class="form-control" name="status">
                            <?php
                                if($_POST['status'] == 0){
                                    echo '<option selected value="0">Ativo</option>';                          
                                    echo '<option value="1">Desativado</option>'; 
                                }else{
                                    echo '<option value="0">Ativo</option>';                          
                                    echo '<option selected value="1">Desativado</option>';                           
                                }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
<?php
    include_once('../template/footer.php');
?>