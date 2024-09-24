<?php
    include_once('../template/header.php');
    include_once('../dao/typeDao.php');
    include_once('../dao/questionsDao.php');
    include_once('../dao/optionsDao.php');

    $resulType = listType();

?>
    <section id="editquestion" class="sections degrade">
        <div class="container">
            <div class="content" style="width: 85%;height: 95%;">

                <form action="../functions/question.edit.php" method="post" style="margin-top: 30px;">
                    <div class="form-group text-center h2">
                        <label class="text-center text-dark">Pergunta</label>
                    </div>

                    <div class="form-group">
                        <?php
                            echo '<input type="hidden" name="idquestion" value="'.$_POST['idquestion'].'">';
                        ?>
                    </div>
                
                    <div class="form-group">
                        <label class="text-center text-dark">Número da Pergunta</label>
                        <?php
                            echo '<input class="form-control" required="true" name="numquestion" value="'.$_POST['numquestion'].'">';
                        ?>
                    </div>

                    <div class="form-group">
                        <label class="text-center text-dark">Competência</label>
                        <?php
                            echo '<input class="form-control text-uppercase" required="true" placeholder="NOME COMPETÊNCIA" name="question" value="'.$_POST['question'].'">';
                        ?>
                    </div>

                    <div class="form-group">
                        <label class="text-center text-dark">Descrição Competência</label>
                        <?php
                            echo '<textarea class="form-control" required="true" placeholder="Breve descrição da competência" name="detailquestion">'.$_POST['detailquestion'].'</textarea>';
                        ?>
                    </div>

                    <div class="form-group">                 
                        <label for="inputTipo">Tipo Pergunta</label>
                        <select class="form-control" name="typequestion">
                            <?php
                                echo '<option selected value="'.$_POST['typeid'].'">'.$_POST['typename'].'</option>';
                                while($type = mysqli_fetch_array($resulType)){
                                    echo '<option value="'.$type['id'].'">'.$type['name'].'</option>';
                                }
                            ?>
                        </select>
                    </div>

                    <div class="form-group text-center h2">
                        <label class="text-center text-dark">Opções</label>
                    </div>

                    <?php
                        $resulltOptions = listOptions($_POST['idquestion']);
                        $count = 1;
                        while($option = mysqli_fetch_array($resulltOptions)){
                            echo '<div class="form-group">';
                                echo '<label class="text-center text-dark">Opção - '.$count.'</label>';
                                echo '<input type="hidden" name="option_'.$count.'" value="'.$option['id'].'">';
                                echo '<textarea class="form-control" required="true" placeholder="Descrição da opção" name="detailoption_'.$option['id'].'">'.$option['option'].'</textarea>';
                            echo '</div>';
                            $count++;
                        }
                    ?>

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