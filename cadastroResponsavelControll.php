<?php

require_once('conecta_bd.php');

		
    $nomeResponsavel = $_POST['nomeResponsavel'];
    $emailResponsavel = $_POST['emailResponsavel'];
    $senhaResponsavel = $_POST['senhaResponsavel'];
    $dataNascResponsavel = $_POST['dataNascResponsavel'];

    $buscar = "SELECT * FROM responsavel WHERE email_responsavel = '$emailResponsavel'";
    $query1 = mysqli_query($link, $buscar);

    if (mysqli_affected_rows($link)>=1) {
        header("Location: cadastroResponsavel.php?resp_cadastro=FALSE1");  
    } else {

            $inserir = "INSERT INTO responsavel (nome_responsavel, email_responsavel, senha_responsavel, data_nascimento_responsavel) VALUES ('$nomeResponsavel','$emailResponsavel','$senhaResponsavel','$dataNascResponsavel')";

            $query = mysqli_query ($link,$inserir);

            if(mysqli_affected_rows($link)!= 0){
          
                header("Location: cadastroResponsavel.php?resp_cadastro=TRUE");  
             
            } else{
                  
                header("Location: cadastroResponsavel.php?resp_cadastro=FALSE2");  
               
            }
    }  

?>