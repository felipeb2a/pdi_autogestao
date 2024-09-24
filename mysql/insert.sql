-- SELECT VERIFICAR AVALIADOR
-- SELECT f.id, f.login AS 'funcionario', fa.id, fa.login AS 'avaliador' FROM avaliador a INNER JOIN funcionario f on f.id = a.funcionario_id INNER JOIN funcionario fa on fa.id = a.funcionario_id_avaliador ORDER BY fa.id;

-- type

INSERT INTO `pdi_2024`.`type` (`id`, `name`) VALUES ('1', 'lider');
INSERT INTO `pdi_2024`.`type` (`id`, `name`) VALUES ('2', 'liderado');

-- funcionarios
INSERT INTO `pdi_2024`.`funcionario` (`id`, `login`, `password`, `name`, `cargo`, `status`, `gestor_id`, `type_id`) VALUES ('1', '-', '$2y$10$2akuqxNrXRpn7lL63OsZCuN0bnX1So2XnWfBDq0sCSpiDK8dQ9a9S', '-', '-', '0', '1', '1');
INSERT INTO `pdi_2024`.`funcionario` (`id`, `login`, `password`, `name`, `cargo`, `status`, `gestor_id`, `type_id`) VALUES ('2', 'admin', '$2y$10$2akuqxNrXRpn7lL63OsZCuN0bnX1So2XnWfBDq0sCSpiDK8dQ9a9S', 'Administrador', 'RH', '0', '1', '1');
INSERT INTO `pdi_2024`.`funcionario` (`id`, `login`, `password`, `name`, `cargo`, `status`, `gestor_id`, `type_id`) VALUES ('3', 'funcionario.01', '$2y$10$2akuqxNrXRpn7lL63OsZCuN0bnX1So2XnWfBDq0sCSpiDK8dQ9a9S', 'Funcionario 01', 'TI', '0', '2', '2');


-- questions
-- lider
INSERT INTO `pdi_2024`.`questions` (`id`, `numquestion`, `question`, `detailquestion`, `type_id`) VALUES ('1', '1', 'COMUNICAÇÃO', 'Capacidade para interagir com as pessoas apresentando facilidade para ouvir, processar e compreender a mensagem com empatia. Facilidade para transmitir e argumentar com assertividade, coerência e clareza, promovendo o retorno interativo (feedback) sempre que necessário.', '1');
INSERT INTO `pdi_2024`.`questions` (`id`, `numquestion`, `question`, `detailquestion`, `type_id`) VALUES ('2', '2', 'EMPATIA E INTEGRIDADE', 'Capacidade de trabalhar de forma integrada e empática, cooperando com o desempenho da equipe.', '1');
INSERT INTO `pdi_2024`.`questions` (`id`, `numquestion`, `question`, `detailquestion`, `type_id`) VALUES ('3', '3', 'INTELIGÊNCIA EMOCIONAL E RESILIÊNCIA', 'Capacidade de identificar e lidar com as emoções e construir relacionamentos positivos.', '1');
INSERT INTO `pdi_2024`.`questions` (`id`, `numquestion`, `question`, `detailquestion`, `type_id`) VALUES ('4', '4', 'COLABORAÇÃO', 'Capacidade de unir os colaboradores, somando forças para alcançar os melhores resultados.', '1');
INSERT INTO `pdi_2024`.`questions` (`id`, `numquestion`, `question`, `detailquestion`, `type_id`) VALUES ('5', '5', 'INOVAÇÃO E CRIATIVIDADE', 'Capacidade de pensar “fora da caixa”, explorar e colocar novas ideias em prática.', '1');
INSERT INTO `pdi_2024`.`questions` (`id`, `numquestion`, `question`, `detailquestion`, `type_id`) VALUES ('6', '6', 'GESTÃO DE PESSOAS E LIDERANÇA HUMANIZADA', 'Capacidade de estruturar, estimular e  preparar sua equipe para as demandas de médio e longo prazo do negócio.  Envolve a capacidade de promover um clima interno positivo e favorável  a diversidade oferecendo oportunidades concretas de desenvolvimento.', '1');
INSERT INTO `pdi_2024`.`questions` (`id`, `numquestion`, `question`, `detailquestion`, `type_id`) VALUES ('7', '7', 'PENSAMENTO CRÍTICO E AUTOGESTÃO', 'Capacidade de lidar com situações de vários tipos, vindas de fontes diversas, estabelecendo conexões  e tomada de decisão.', '1');
INSERT INTO `pdi_2024`.`questions` (`id`, `numquestion`, `question`, `detailquestion`, `type_id`) VALUES ('8', '8', 'APRENDIZAGEM CRÍTICA, ANALÍTICA E INSPIRADORA', 'Reflete o entusiasmo na busca de autodesenvolvimento e liderança de si mesmo e da sua área de atuação, colocando em prática o aprendido.', '1');
-- liderado
INSERT INTO `pdi_2024`.`questions` (`id`, `numquestion`, `question`, `detailquestion`, `type_id`) VALUES ('9', '1', 'ADAPTABILIDADE E FLEXIBILIZAÇÃO', 'Capacidade de adaptar aos mais diferentes cenários, interagindo com maior facilidade e rapidez a novas realidades.', '2');
INSERT INTO `pdi_2024`.`questions` (`id`, `numquestion`, `question`, `detailquestion`, `type_id`) VALUES ('10', '2', 'RESOLUÇÃO DE PROBLEMAS', 'Capacidade para planejar e alcançar resultados consistentes/comprovados, considerando a realidade interna e externa, riscos, recursos, prazos e qualidade.', '2');
INSERT INTO `pdi_2024`.`questions` (`id`, `numquestion`, `question`, `detailquestion`, `type_id`) VALUES ('11', '3', 'COMUNICAÇÃO', 'Capacidade para interagir com as pessoas apresentando facilidade para ouvir, processar e compreender a mensagem com empatia. Facilidade para transmitir e argumentar com assertividade, coerência e clareza, promovendo o retorno interativo (feedback) sempre que necessário.', '2');
INSERT INTO `pdi_2024`.`questions` (`id`, `numquestion`, `question`, `detailquestion`, `type_id`) VALUES ('12', '4', 'INTELIGÊNCIA EMOCIONAL E RESILIÊNCIA', 'Capacidade de identificar e lidar com as emoções e construir relacionamentos positivos.', '2');
INSERT INTO `pdi_2024`.`questions` (`id`, `numquestion`, `question`, `detailquestion`, `type_id`) VALUES ('13', '5', 'PENSAMENTO CRÍTICO E AUTOGESTÃO', 'Capacidade de lidar com situações de vários tipos, vindas de fontes diversas, estabelecendo conexões  e tomada de decisão.', '2');
INSERT INTO `pdi_2024`.`questions` (`id`, `numquestion`, `question`, `detailquestion`, `type_id`) VALUES ('14', '6', 'INOVAÇÃO E CRIATIVIDADE', 'Capacidade de pensar “fora da caixa”, explorar e colocar novas ideias em prática.', '2');
INSERT INTO `pdi_2024`.`questions` (`id`, `numquestion`, `question`, `detailquestion`, `type_id`) VALUES ('15', '7', 'APRENDIZAGEM ATIVA E PROATIVIDADE', 'Capacidade de ter iniciativa e entusiasmo na busca de aprendizagem e autodesenvolvimento em sua área de atuação, colocando em prática o aprendido.', '2');


-- options
-- lider
-- question 1
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('1', '1', 'Expõe as suas ideias e pontos de vista com clareza, objetividade e segurança.', '1');
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('2', '2', 'Emite opiniões e recebe as opiniões dos outros com propriedade, cortesia e respeito pela outra parte (mesmo quando inclui crítica).', '1');
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('3', '3', 'Disponibiliza dados e informações especializadas e técnicas em linguagem compreensível, de forma clara e coerente.', '1');
-- question 2
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('4', '1', 'Identifica e gera oportunidades com empatia para o estabelecimento de ações conjuntas.', '2');
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('5', '2', 'Mobiliza com empatia equipes ou pares na implementação de soluções, gerando negócios prósperos e continuados.', '2');
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('6', '3', 'Tem empatia, demonstra interesse pela opinião do outro e considera os sentimentos alheios.', '2');
-- question 3
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('7', '1', 'Sabe manter a calma em situações de pressão.', '3');
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('8', '2', 'Sabe quando e  como se expressar ou frear suas próprias emoções, agindo com controle emocional.', '3');
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('9', '3', 'Enxerga os problemas como desafios e sabe encontrar as oportunidades por trás de cada um.', '3');
-- question 4
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('10', '1', 'Compartilha conhecimentos e ideias entre os colegas para reduzir incertezas nas tomadas de decisões.', '4');
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('11', '2', 'Incentiva a participação coletiva  e a cooperação dentro e fora da equipe.', '4');
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('12', '3', 'Põe-se à disposição espontaneamente para executar outros serviços e auxiliar colegas, de acordo com as necessidades e possibilidades.', '4');
-- question 5
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('13', '1', 'Propõe ideias e soluções inovadoras e possíveis de executar e administra eventuais dificuldade para sua implantação.', '5');
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('14', '2', 'É hábil em adotar diferentes abordagens na solução de antigos problemas combinando ideias e conexões inusitadas.', '5');
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('15', '3', 'É persistente na busca de novas soluções mesmo quando o caminho é longo e difícil.', '5');
-- question 6
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('16', '1', 'Faz comentários positivos, promove a diversidade com relação às habilidades ou potenciais das pessoas tem demonstrando acreditar que os outros querem e podem aprender ou melhorar seu desempenho.', '6');
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('17', '2', 'Fornece instruções detalhadas e/ou demonstra como fazer o serviço, faz sugestões úteis e específicas.', '6');
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('18', '3', 'Reconhece e fala diretamente sobre os pontos fortes e áreas de desenvolvimento de cada um, considerado tanto aspectos técnicos como comportamentais trazendo evidências que favorecem a conscientização para melhoria ou mudanças necessárias.', '6');
-- question 7
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('19', '1', 'Identifica todos os vieses que formam suas crenças avaliando as fontes para chegar a uma conclusão tomando decisões rápidas e seguras.', '7');
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('20', '2', 'Toma consciência da importância de estar preparado e permanecer sempre informado.', '7');
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('21', '3', 'Trabalha com disciplina para avançar no desenvolvimento dos seus pensamentos e estratégias.', '7');
-- question 8
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('22', '1', 'Assume trabalhos que exijam aprofundamento de seus conhecimentos, estudando e consultando pessoas e recursos disponíveis dentro da EMPRESA.', '8');
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('23', '2', 'Identifica alternativas e recursos para aumentar sua capacitação atual e futura, mesmo quando não disponibilizados pela empresa.', '8');
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('24', '3', 'Efetivamente  aplica e disponibiliza os conhecimentos obtidos e é reconhecido por agregar valor.', '8');

-- liderado
-- question 1
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('25', '1', 'Adapta-se a mudanças, a adversidades, a oportunidades e a desafios de mercado, desenvolvendo-se diante de novos cenários.', '9');
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('26', '2', 'Maximiza a capacidade de ouvir novas ideias e opiniões dos seus colegas de trabalho mesmo que diferente das suas.', '9');
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('27', '3', 'Busca o aprendizado mesmo em situações difíceis.', '9');
-- question 2
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('28', '1', 'Ajusta procedimentos de rotina e introduz ações de melhoria de qualidade, escopo, prazo e custo.', '10');
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('29', '2', 'Atende todas as metas propostas, dentro do prazos definidos, dispendendo energia para superá-los.', '10');
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('30', '3', 'Identifica inconsistências nos processos e contribui para a implementação de correções, destacando as implicações diretas sobre os resultados finais.', '10');
-- question 3
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('31', '1', 'Expõe as suas ideias e pontos de vista com clareza, objetividade e segurança.', '11');
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('32', '2', 'Emite opiniões e recebe as opiniões dos outros com propriedade, cortesia e respeito pela outra parte (mesmo quando inclui crítica).', '11');
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('33', '3', 'Disponibiliza dados e informações especializadas e técnicas em linguagem compreensível, de forma clara e coerente.', '11');
-- question 4
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('34', '1', 'Sabe manter a calma em situações de pressão.', '12');
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('35', '2', 'Sabe quando e  como se expressar ou frear suas próprias emoções, agindo com controle emocional.', '12');
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('36', '3', 'Enxerga os problemas como desafios e sabe encontrar as oportunidades por trás de cada um.', '12');
-- question 5
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('37', '1', 'Identifica todos os vieses que formam suas crenças avaliando as fontes para chegar a uma conclusão tomando decisões rápidas e seguras.', '13');
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('38', '2', 'Toma consciência da importância de estar preparado e permanecer sempre informado.', '13');
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('39', '3', 'Trabalha com disciplina para avançar no desenvolvimento dos seus pensamentos e estratégias.', '13');
-- question 6
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('40', '1', 'Propõe ideias e soluções inovadoras e possíveis de executar e administra eventuais dificuldade para sua implantação.', '14');
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('41', '2', 'É hábil em adotar diferentes abordagens na solução de antigos problemas combinando ideias e conexões inusitadas.', '14');
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('42', '3', 'É persistente na busca de novas soluções mesmo quando o caminho é longo e difícil.', '14');
-- question 7
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('43', '1', 'Assume trabalhos que exijam aprofundamento de seus conhecimentos, estudando e consultando pessoas e recursos disponíveis dentro da EMPRESA.', '15');
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('44', '2', 'Atua de maneira mais ativa, participando de debates, desafios e atividades que estilam o trabalho em equipe.', '15');
INSERT INTO `pdi_2024`.`options` (`id`, `numoption`, `option`, `questions_id`) VALUES ('45', '3', 'É engajado e engaja as pessoas assumindo responsabilidade em relação a sua própria aprendizagem sem depender dos outros.', '15');


