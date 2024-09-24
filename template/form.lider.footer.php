                            <?php
                                require_once('../dao/questionsDao.php');
                                $resultQuestion = listQuestionsLider();

                                require_once('../dao/optionsDao.php');
                            ?>

                            <!-- Questions-->
                            <?php
                                //loop questions
                                while($questions = mysqli_fetch_array($resultQuestion)){
                                    echo '<div class="card bg-light">';
                                        echo '<div class="card-header">';
                                            echo '<h6 class="card-title font-weight-bold">' .$questions['numquestion']. ' - ' .$questions['question']. '</h6>';
                                            echo '<h7 class="card-title font-weight-light">' .$questions['detailquestion']. '</h7>';
                                        echo '</div>';
                                            //set e busca option por id da questao
                                            $resultOption = listOptions($questions['id']);
                                            //loop options
                                            echo '<div class="card-body">';
                                                while($options = mysqli_fetch_array($resultOption)){
                                                    echo '<div class="form-group">';
                                                        // Options

                                                        echo '<div class="form-row">';
                                                            echo '<div class="form-group col-md-11">';
                                                                echo '<label for="inputOption">'.$options['option'].'</label>';
                                                            echo '</div>';
                                                            echo '<div class="form-group col-md-1">';
                                                                echo '<select class="form-control" name="option_'.$options['id'].'">';
                                                                    echo '<option selected value="1">1</option>';
                                                                    echo '<option value="2">2</option>';
                                                                    echo '<option value="3">3</option>';
                                                                    echo '<option value="4">4</option>';
                                                                echo '</select>';
                                                            echo '</div>';
                                                        echo '</div>';
                                                        //fim option
                                                    echo '</div>';
                                                }
                                            echo '</div>';
                                    echo '</div>';
                                }
                            ?>
                            <!-- enviar -->
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>