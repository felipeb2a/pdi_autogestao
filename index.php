<?php
    include_once('template/header.index.php');
    require_once('functions/avaliadorListIndex.php');
    require_once('dao/questionsDaoIndex.php');
    $resultQuestionLider = listQuestionsLider();
    $resultQuestionLiderado = listQuestionsLiderado();

    //datas para liberar avaliacoes
    $today = date("Y-m-d");
    $releasedDateSelfEvaluation = "2022-01-01";
    $releasedDateEvalution180 = "2022-01-01";
?>  
    <!-- PROGRAMA-->
    <!--<section id="programa" class="sections degrade clean-block features">-->
    <section id="programa" class="degrade clean-block features text-white">
        <div class="container">
            <div class="block-heading">
                <h2>Programa “Desvendando a Autogestão”</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-11 feature-box"><i class="icon-rocket icon text-warning"></i>
                    <p>Nosso programa nasceu com o propósito de trazer reflexão, desenvolvimento profissional e pessoal para todos os colaboradores do NOME DA EMPRESA através do <b>AUTOCONHECIMENTO E AUTORRESPONSABILIDADE</b>. Somos parceiros dessa jornada de desenvolvimento, mas quem é responsável por <b>chegar lá é você!</b> Através desse programa teremos a oportunidade de nos conhecer melhor e buscar caminhos melhores.</p>
                </div>

                <div class="col-md-11 feature-box"><i class="icon-check icon text-warning"></i>
                    <p>Presenteamos nossos colaboradores com esse programa que é composto por 4 pilares superimportantes e essenciais. São eles:</p>
                </div>
                
                <div class="col-md-5 feature-box"><i class="icon-check icon text-warning"></i>
                    <a href="index.php#disc" class="text-light"><p>1. Avaliação Metodologia DISC</p></a>
                </div>

                <div class="col-md-5 feature-box"><i class="icon-check icon text-warning"></i>
                     <a href="index.php#competencias" class="text-light"><p>2. Avaliação de Competências - Soft Skills do profissional do futuro</p></a>
                </div>

                <div class="col-md-5 feature-box"><i class="icon-check icon text-warning"></i>
                     <a href="index.php#feedback" class="text-light"><p>3. Feedback Gestores e Liderados e RH + Devolutiva DISC</p></a>
                </div>

                <div class="col-md-5 feature-box"><i class="icon-check icon text-warning"></i>
                     <a href="index.php#pdi" class="text-light"><p>4. Construção do PDI (Plano de Desenvolvimento Individual)</p></a>
                </div>
                
            </div>
        </div>
    </section>

    <!-- DISC-->
    <section id="disc" class="sem-degrade clean-block features text-white">
        <div class="container">
            <div class="block-heading">
                <h2>Mas vamos lá, o que é Avaliação DISC?</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-11 feature-box"><i class="icon-graduation icon text-warning"></i>
                    <p>É uma metodologia que nos ajuda no autoconhecimento e também a <b>conhecer mais sobre o comportamento humano (conhecer nossos pontos fortes e oportunidades de melhoria)</b>. Através de uma ferramenta de avaliação comportamental nos ajuda a identificar <b>perfis dominantes em uma determinada pessoa</b> e como isso influencia em suas relações interpessoais e tomadas de decisão.</p>

                    <p>O método DISC compreende que existem quatro perfis de comportamentos que predomina entre os indivíduos: dominância (executor), influência (comunicador), estabilidade (planejador) e conformidade (analista). Essa teoria foi desenvolvida a partir de estudos do Dr. William Moulton Martson, um psicólogo americano que buscava  compreender como o ambiente impacta a percepção das pessoas. A teoria que Martson é uma evolução de todos os estudos realizados desde a antiguidade até a medicina mais moderna. Martson leva em consideração o peso de pressões internas e externas na tomada de decisões do indivíduo.</p>

                    <h6><b>97% de confiabilidade - certificações da USP e UFMG</b></h6>
                </div>

                <img src="assets/img/disc/disc.png" width="600" height="auto" class="d-inline-block align-top img" loading="lazy" />
                
            </div>
        </div>
    </section>
    
    <!-- COMPETENCIAS-->
    <section id="competencias" class="degrade clean-block features text-white">
        <div class="container">
            <div class="block-heading">
                <h2>Mas o que são competências?</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-11 feature-box"><i class="icon-graduation icon text-warning"></i>
                    <p>Competências são, em essência, um repertório de comportamentos derivados de conhecimentos, capacidades e habilidades. Ou seja, podemos entender as competências pela soma de conhecimentos e habilidades e adquirimos ao longo da nossa vida.</p>

                    <p>Nossas competências foram baseadas nas Soft Skills do profissional do futuro e também em tudo aquilo que acreditamos ser nossa cultura.</p>
                    
                    <p>O que iremos avaliar não é o grau de domínio/prática de uma competência e sim o quanto cada pessoa desempenhou essas competências nos últimos 6 meses.</p>
                </div>

                <div class="col-md-11 feature-box"><i class="icon-list icon text-warning"></i>
                    <h3>E quais são nossas competências?</h3>
                </div>
                <div class="col-md-6">
                <table class="table table-hover">
                    <tbody>
                        <tr class="text-left">
                            <th scope="row">#</th>
                            <th scope="row">Competências da Liderança</th>
                        </tr>
                        <?php
                            //loop funcionario
                            while($question = mysqli_fetch_array($resultQuestionLider)){
                                echo '<tr class="text-left">';
                                    echo '<th scope="row">'.$question['numquestion'].'</th>';
                                    echo '<th scope="row">'.$question['question'].'</th>';
                                echo '</tr>';
                            }                         
                        ?>
                    </tbody>
                </table>  
                </div>
                <div class="col-md-6">
                <table class="table table-hover">
                    <tbody>
                        <tr class="text-left">
                            <th scope="row">#</th>
                            <th scope="row">Competências do Time</th>
                        </tr>
                        <?php
                            //loop funcionario
                            while($question = mysqli_fetch_array($resultQuestionLiderado)){
                                echo '<tr class="text-left">';
                                    echo '<th scope="row">'.$question['numquestion'].'</th>';
                                    echo '<th scope="row">'.$question['question'].'</th>';
                                echo '</tr>';
                            }                         
                        ?>
                    </tbody>
                </table>  
                </div>
            </div>
        </div>
    </section>

    <!-- FEEDBACK-->
    <section id="feedback" class="sem-degrade clean-block features text-white">
        <div class="container">
            <div class="block-heading">
                <h2>O que é feedback e Devolução do DISC?</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-11 feature-box"><i class="icon-graduation icon text-warning"></i>
                    <p>O Feedback será nossa ferramenta de comunicação para essa jornada de autodesenvolvimento. O RH organizará uma agenda de encontros entre os lideres/liderados, nesse encontro será discutido sobre as avaliações das competências, resultados, missões e projetos futuros.</p>

                    <p>Na devolutiva do DISC você terá uma encontro com o RH para um despertar de autoconhecimento e visões de futuro, conhecer seus pontos fortes e oportunidades de melhoria a nível comportamental. O RH organizará uma agenda individual de encontros com cada colaborador para essa devolutiva.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PDI-->
    <section id="pdi" class="degrade clean-block features text-white">
        <div class="container">
            <div class="block-heading">
                <h2>O que é PDI (Plano de Desenvolvimento Individual)?</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-11 feature-box"><i class="icon-graduation icon text-warning"></i>
                    <p>Esta será a etapa do seu caminhar, um check in de performance para sua jornada de autodesenvolvimento. Com todas as etapas anteriores é possível construirmos juntos ações de oportunidades de melhorias.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ETAPAS E DATAS-->
    <section id="etapa" class="sem-degrade clean-block features text-white">
        <div class="container">
            <div class="block-heading">
                <h2>Etapas e Datas</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-11 feature-box"><i class="icon-event icon text-warning"></i>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Atividade</th>
                                <th scope="col">Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Análise de Inventário de Perfil (DISC)</td>
                                <td>Junho/2024</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Autoavaliação</td>
                                <td>Junho/2024</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Avaliação 180C° (líderes > liderados + liderados > líderes)</td>
                                <td>Julho e Agosto /2024</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Reuniões de feedback (devolutivas com gestor e RH)</td>
                                <td>Setembro e Outubro/2024</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- AVALIACAO-->
    <section id="avaliacao" class="degrade">
        <div class="container">
            <div class="container" style="padding: 50px;">
                <div class="content text-center" style="min-height: 80vh;">
                        <!-- Legenda -->
                        <h2 class="text-light">Nossa escala de avaliação?</h2>
                        <div class="sections degrade clean-block features" style='font-size:1.2rem;'>
                            <div class="row text-left">
                                <div class="col-md-6 feature-box text-danger legenda-home">                            
                                    <p><b>Nota 1 <span style="font-size:2rem;">&#128170;</span>: Você precisa melhorar, vamos lá... força!</b></p>
                                </div>
                                <div class="col-md-6 feature-box text-warning legenda-home">                            
                                    <p><b>Nota 2 <span style="font-size:2rem;">&#128515;</span>: Você está no caminho!</b></p>
                                </div>
                            </div>
                            <div class="row text-left">
                                <div class="col-md-6 feature-box text-primary legenda-home">                           
                                    <p><b>Nota 3 <span style='font-size:2rem;'>&#128512;</span>: Muito bem! Você está atendendo as expectativas!</b></p>
                                </div>
                                <div class="col-md-6 feature-box text-success legenda-home">                          
                                    <p><b>Nota 4 <span style='font-size:2rem;'>&#129321;</span>: Você é referência, brilhou!</b></p>
                                </div>
                            </div>
                        </div>

                        <div class="block-heading">
                            <h2 class="text-light">Selecione abaixo para responder as avaliações</h2>
                        </div>

                        <?php
                            $resultListAvaliacoes = listAvaliacaoParaResponderFuncionario($_SESSION['id']);
                            while($avaliacoes = mysqli_fetch_array($resultListAvaliacoes)){
                                //verifica lider ou liderado e status
                                $form ='';
                                $status='';
                                if($avaliacoes['type_id'] == 2 && $avaliacoes['status'] == 0){
                                    $form = 'forms/form.php';
                                }else if($avaliacoes['type_id'] == 1 && $avaliacoes['status'] == 0){
                                    $form = 'forms/form.gestor.php';
                                }else{
                                    $form = 'index.php#avaliacao';
                                    $status = 'disabled';
                                }

                                //habilitar formulario autoavaliacao na data especificada
                                if($status != 'disabled' && $_SESSION['id'] == $avaliacoes['funcionario_id']){                   
                                    if(strtotime($today) >= strtotime($releasedDateSelfEvaluation)){
                                        $status = '';
                                    } else{
                                        $form = 'index.php#avaliacao';
                                        $status = 'disabled';
                                    }
                                }

                                //habilitar formulario avaliacao (líderes > liderados + liderados > líderes) na data especificada
                                if($status != 'disabled' && $_SESSION['id'] != $avaliacoes['funcionario_id']){                   
                                    if(strtotime($today) >= strtotime($releasedDateEvalution180)){
                                        $status = '';
                                    } else{
                                        $form = 'index.php#avaliacao';
                                        $status = 'disabled';
                                    }
                                }

                                echo '<form class="selec_form btn '.$status.'" action="'.$form.'" method="post" style="margin-top: 30px;">';
                                    echo '<div class="form-group text-center text-uppercase font-weight-bold '.$status.'" style="position: relative; top: 30%;">';
                                        //verifica se o usuarrio logado e o mesmo funcionario da busca e seta como auto avaliacao
                                        if($_SESSION['id'] == $avaliacoes['funcionario_id']){
                                            echo '<h5 class="text-center text-secondary text-uppercase font-weight-bold">Auto Avaliação </br> '.$avaliacoes['name'].'</h5>';
                                        } else{
                                            echo '<h5 class="text-center text-secondary text-uppercase font-weight-bold">'.$avaliacoes['name'].'</h5>';
                                        }
                                    echo '</div>';

                                    echo '<div class="form-group '.$status.'">';
                                            echo '<input class="form-control '.$status.'" type="hidden" name="funcionario" value="'.$avaliacoes['funcionario_id'].'">';
                                            echo '<input class="form-control '.$status.'" type="hidden" name="status" value="'.$avaliacoes['id_a'].'">';
                                    echo '</div>';
                                    
                                    //ENVIAR                                    
                                    echo '<div class="form-group '.$status.'" style="position: relative; top: 40%;">';
                                        echo '<button class="btn btn-secondary '.$status.'" type="submit">Abrir</button>';
                                    echo '</div>';
                                echo '</form>';
                            }
                        ?>
                </div>
            </div>
        </div>
    </section> 
<?php
    include_once('template/footer.index.php');
?>