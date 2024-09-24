<?php
    include_once('../template/header.php');
    include_once('../dao/funcionarioDao.php');
?>
    <section id="editfuncionario" class="sections degrade">
        <div class="container">
            <div class="content" style="width: 85%;height: 95%;">
                <form action="../functions/funcionario.edit.passwd.php" method="post" style="margin-top: 30px;">
                    <div class="form-group text-center h2">
                        <label class="text-center text-dark">Editar Funcionário</label>
                    </div>
                    
                    <div class="form-group">
                        <?php
                            echo '<input type="hidden" name="id" value="'.$_POST['funcid'].'">';
                        ?>
                    </div>
                    
                    <div class="form-group">
                        <label class="text-center text-dark">Nome e Sobrenome</label>
                        <?php
                            echo '<input class="form-control" required="true" name="nome" value="'.$_POST['funcname'].'"> readonly';
                        ?>
                    </div>
                    
                    <div class="form-group">
                        <label class="text-center text-dark">Senha</label>
                        <input class="form-control" type="password" required="true" name="password">
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