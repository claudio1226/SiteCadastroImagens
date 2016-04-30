<?php 
	$login = $_GET['login'];
	$senha = $_GET['senha'];

	if(($login=='usuario') and ($senha=='123'))
	{
		header("Location: cadastro_dados.php");
			}else{
		header("Location: login_adm.php");
	}




?>