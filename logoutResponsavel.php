<?php

	session_start (); //inicia a sessão
		
	if (isset($_SESSION['nome'])) {
		$logado = $_SESSION['nome'];
		$id_logado = $_SESSION['id'];
	} else {
		header('Location: home.php');							
	}
   

    session_destroy();

   //redirecionar o usuario para a página de login
    header("Location: home.php");
    //por um alerta aqui pra aparacer depois que a pessoa deslogar. 
?>
 