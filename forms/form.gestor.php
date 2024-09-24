<?php
    include_once('../template/header.php');
    //verifica id vazio
    if($_POST['funcionario'] == null){
        header('location:../index.php');
        die('Você não tem permissão para acessar essa página!');
    }
    if($_POST['status'] == null){
        header('location:../index.php');
        die('Você não tem permissão para acessar essa página!');
    }
?>
            <?php
                include_once('../template/form.lider.header.php');
            ?>

            <!-- name-func avaliado -->
            <div class="form-group">
                <?php
                    echo '<input class="form-control" type="hidden" name="funcionario" value="'.$_POST['funcionario'].'">';
                    echo '<input class="form-control" type="hidden" name="status" value="'.$_POST['status'].'">';
                ?>
            </div>

            <?php
                include_once('../template/form.lider.footer.php');
            ?>
                      
        </section>
<?php
    include_once('../template/footer.php');
?>