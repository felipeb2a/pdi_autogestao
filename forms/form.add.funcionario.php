<?php
    include_once('../template/header.php');
    include_once('../dao/typeDao.php');
    include_once('../dao/funcionarioDao.php');
    $resulType = listType();
    $resulGestor = listFuncionariosGestor();

?>
    <section id="addfuncionario" class="sections degrade">
        <div class="container">
            <div class="content" style="width: 85%;height: 95%;">
                <form action="../functions/funcionario.add.php" method="post" style="margin-top: 30px;">
                    <div class="form-group text-center h2">
                        <label class="text-center text-dark">Adicionar Funcionário</label>
                    </div>
                
                    <div class="form-group">
                        <label class="text-center text-dark">Login</label>
                        <input class="form-control" required="true" name="login">
                    </div>
                    <div class="form-group">
                        <label class="text-center text-dark">Senha</label>
                        <input class="form-control" type="password" required="true" name="password">
                    </div>
                    <div class="form-group">
                        <label class="text-center text-dark">Nome e Sobrenome</label>
                        <input class="form-control" required="true" name="nome">
                    </div>
                    <div class="form-group">
                        <label class="text-center text-dark">Cargo</label>
                        <input class="form-control" required="true" name="cargo">
                    </div>

                   <div class="form-group">                 
                        <label for="inputTipo">Tipo</label>
                        <select class="form-control" name="type">
                            <?php
                                while($type = mysqli_fetch_array($resulType)){
                                    echo '<option value="'.$type['id'].'">'.$type['name'].'</option>';
                                }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">                 
                        <label for="inputGestor">Gestor</label>
                        <select class="form-control" name="gestor">
                            <?php
                                while($gestor = mysqli_fetch_array($resulGestor)){
                                    echo '<option value="'.$gestor['id'].'">'.$gestor['name'].'</option>';
                                }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">                 
                        <label for="inputStatus">Status</label>
                        <select class="form-control" name="status">
                            <option value="0">Ativo</option>                            
                            <option value="1">Desativado</option>                            
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