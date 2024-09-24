<?php
	require_once('../includes/session.php');
	//valida logado
	require_once('../functions/validalogado.php');

?>

<!DOCTYPE html>
<html>
	 <head>
	     <meta charset="utf-8">
	     <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	     <title>Desvendando a Autogestão</title>
	     <link rel="shortcut icon" href="../assets/img/header/icon.png" />
		 <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	     <link rel="stylesheet" href="../assets/fonts/simple-line-icons.min.css">
	     <link rel="stylesheet" href="../assets/css/style.css">
	     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
	     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
	 </head>

	 <body>
	     <nav class="navbar navbar-light navbar-expand-lg bg-white clean-navbar fixed-top">
	         <div class="container">
				<!--<a class="navbar-brand logo" href="#">Desvendando a Auto Gestão</a>-->
	         	
	         	<a class="navbar-brand logo" href="../index.php"><img src="../assets/img/header/logo.png" width="250" height="auto" class="d-inline-block align-top" loading="lazy" /></a>

	         	<button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
	             <div
	                class="collapse navbar-collapse" id="navcol-1">
	                <ul class="nav navbar-nav ml-auto">	
	                    <li class="nav-item" role="presentation">
	                    	<a class="nav-link" href="../index.php">Home</a>
	                    </li>
	                    <div class="dropdown">
				            <li class="nav-item dropdown" role="presentation" >
				                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">O Programa</a>
				                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="top: auto;">
									<a class="dropdown-item" href="../index.php">Programa</a>
									<a class="dropdown-item" href="../index.php#disc">DISC</a>
									<a class="dropdown-item" href="../index.php#competencias">Competências</a>
									<a class="dropdown-item" href="../index.php#feedback">Feeback</a>
									<a class="dropdown-item" href="../index.php#pdi">PDI</a>
									<a class="dropdown-item" href="../index.php#etapa">Etapas e Datas</a>
								</div>
				             </li>
			            </div>
	                    <li class="nav-item" role="presentation">
	                    	<a class="nav-link" href="../index.php#avaliacao">Avaliação</a>
	                    </li>
	                    <?php
	                		if($cargo){
	                			//add
	                			echo '<div class="dropdown">';
				                    echo '<li class="nav-item dropdown" role="presentation" >';
				                    	echo '<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">ADM</a>';
				                    	echo '<div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="top: auto;">';
												echo '<a class="dropdown-item" href="../forms/form.add.funcionario.php">Add Funcionário</a>';
												echo '<a class="dropdown-item" href="../forms/form.add.question.php">Add Perguntas</a>';
												echo '<div class="dropdown-divider"></div>';
												echo '<a class="dropdown-item" href="../paginas/select.funcionario.list.php">Lista Avaliações</a>';
												echo '<a class="dropdown-item" href="../paginas/list.funcionarios.php">Lista Funcionários</a>';
												echo '<a class="dropdown-item" href="../paginas/select.list.questions.php">Lista Perguntas</a>';
												echo '<a class="dropdown-item" href="../paginas/select.funcionario.list.avaliador.php">Lista Avaliador</a>';
												echo '<div class="dropdown-divider"></div>';
												echo '<a class="dropdown-item" href="../paginas/add.avaliador.php">Definir Avaliador</a>';
												echo '<div class="dropdown-divider"></div>';
												echo '<a class="dropdown-item" href="../paginas/select.funcionario.list.delete.avaliacao.php">Deletar Avaliação</a>';

										echo '</div>';
				                    echo '</li>';
			                	echo '</div>';
			                	//olds
			                	/*
			                	echo '<div class="dropdown">';
				                    echo '<li class="nav-item dropdown" role="presentation" >';
				                    	echo '<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">OLDs</a>';
				                    	echo '<div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="top: auto;">';
												echo '<a class="dropdown-item" href="../2021/index.php">2021</a>';
												echo '<div class="dropdown-divider"></div>';
										echo '</div>';
				                    echo '</li>';
			                	echo '</div>';
			                	*/
						    }                  
	                 	?> 
	                    <li class="nav-item" role="presentation">
	                    	<a href="../functions/logout.php"><button class="btn btn-secondary" type="submit">sair</button></a>
	                    </li>
	                    <li class="nav-item" role="presentation">	                     	
	                     	<img src="../assets/img/header/logo_empresa.png" width="80" height="auto" class="d-inline-block align-top" loading="lazy" />
	                    </li>
	                 </ul>
	        </div>
	        </div>
	    </nav>
		<main class="page landing-page">