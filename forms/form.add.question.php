<?php
    include_once('../template/header.php');
    include_once('../dao/typeDao.php');
    $resulType = listType();

?>
    <section id="addquestions" class="sections degrade">
        <div class="container">
            <div class="content" style="width: 85%;height: 95%;">

                <!-- contador dynamic form fields -->
                <input type="hidden" name="count" value="1" />

                <form action="../functions/question.add.php" method="post" style="margin-top: 30px;">
                    <div class="form-group text-center h2">
                        <label class="text-center text-dark">Pergunta</label>
                    </div>
                
                    <div class="form-group">
                        <label class="text-center text-dark">Número da Pergunta</label>
                        <input class="form-control" required="true" name="numberquestion">
                    </div>

                    <div class="form-group">
                        <label class="text-center text-dark">Competência</label>
                        <input class="form-control text-uppercase" required="true" placeholder="NOME COMPETÊNCIA" name="question">
                    </div>

                    <div class="form-group">
                        <label class="text-center text-dark">Descrição Competência</label>
                        <textarea class="form-control" required="true" placeholder="Breve descrição da competência" name="detailquestion"></textarea>
                    </div>

                    <div class="form-group">                 
                        <label for="inputTipo">Tipo Pergunta</label>
                        <select class="form-control" name="typequestion">
                            <?php
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
                        for ($i = 1; $i <= 3; $i++) {
                            echo '<div class="form-group">';
                                echo '<label class="text-center text-dark">Opção - '.$i.'</label>';
                                echo '<input type="hidden" name="option_'.$i.'" value="'.$i.'">';
                                echo '<textarea class="form-control" required="true" placeholder="Descrição da opção" name="detailoption_'.$i.'"></textarea>';
                            echo '</div>';
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