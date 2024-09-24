            <section id="form-lider" class="sections degrade">
                <div class="container">
                    <div class="content" style="width: 85%;height: 95%;">
                        <form action="../functions/send.php" method="post" style="margin-top: 30px;">
                            <div class="form-group text-center h2">
                                <label class="text-center text-dark">Formulário de Avaliação</label>
                            </div>

                            <!-- legenda -->
                            <?php
                                include_once('../template/form.legenda.php');
                            ?>

                            <div class="form-group">
                                <input class="form-control" type="hidden" name="data" value='<?php echo date("d/m/Y"); ?>'>
                                <input class="form-control" type="hidden" name="type" value="1">
                            </div>