<?php

	session_start (); //inicia a sessão
		
	if (isset($_SESSION['nome'])) {
		$logado = $_SESSION['nome'];
		$id_logado = $_SESSION['id'];
	} else {
		header('Location: home.php');							
	}

	require_once('conecta_bd.php');

 	$nomePortador = $_POST['nomePortador'];
    $dataNascPortador = $_POST['dataNascPortador'];
    $quantFilhos = $_POST['quantFilhos'];
    $faseDoenca = $_POST['faseDoenca'];
    $cpfPortador = $_POST['cpfPortador'];
    

    $buscar = "SELECT * FROM portador WHERE cpf_portador = '$cpfPortador'"; 
    $query1 = mysqli_query($link, $buscar);


    if (mysqli_affected_rows($link)>=1) {
        header("Location: cadastroPortador.php?resp_cadastro=FALSE1");  
    } else {

            $inserir = "INSERT INTO portador (nome_portador, data_nascimento_portador, quantidade_filhos, responsavel_id_responsavel,fase_doenca_idfase_doenca,cpf_portador) VALUES ('$nomePortador','$dataNascPortador','$quantFilhos','$id_logado', '$faseDoenca','$cpfPortador')";

            $query = mysqli_query ($link,$inserir);

            if(mysqli_affected_rows($link)!= 0){
          
                header("Location: cadastroPortador.php?resp_cadastro=TRUE");  
             
            } else{
                  
                header("Location: cadastroPortador.php?resp_cadastro=FALSE2");  
               
            }
    }  



?>