<?php
	if (session_status() !== PHP_SESSION_ACTIVE) session_start();

	$logado = isset($_SESSION['session_id']) && session_id() == $_SESSION['session_id'];

	//verifica usuario é RH
	//$cargo = isset($_SESSION['user']) && "visitante" == $_SESSION['user'];
	$cargo = isset($_SESSION['cargo']) && "RH" == $_SESSION['cargo'];
	//$rh = $_SESSION['user'];