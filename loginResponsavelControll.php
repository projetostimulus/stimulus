<?php

                                
	require_once('conecta_bd.php');

	if((!empty($_POST['emailResponsavel']))&&(!empty($_POST['senhaResponsavel']))){//verifica se há algo preenchido ou não
      

        $email = $_POST['emailResponsavel']; // caso esteja, será armazenado nas seguintes variáveis
        $senha = $_POST['senhaResponsavel'];
        	
		$sql = "SELECT * FROM responsavel WHERE email_responsavel='$email' AND senha_responsavel='$senha'";//será feita a busca das variáveis no banco
        $query = mysqli_query($link,$sql);  // execução

        if (mysqli_num_rows($query)>0){ // caso tenha sido retornado algo do banco
            
            session_start(); // inicia a sessão
            
            $resultado = mysqli_fetch_assoc($query); //faz uma matriz relacionando os resultados 
            $_SESSION['email']= $resultado['email_responsavel']; // armazena na sessão o email buscado
            $_SESSION['senha']= $resultado['senha_responsavel'];// armazena na sessão a senha buscada
            $_SESSION['nome']= $resultado['nome_responsavel']; // armazena na sessão o nome do usuário logado
            $_SESSION['id'] = $resultado['id_responsavel']; 

             header("Location: homeResponsavel.php");  

        }else{

               header("Location: loginResponsavel.php?resp_login=FALSE");  
        }
    }else{

                header("Location: loginResponsavel.php?resp_login=FALSE");
        }
?>



