<!DOCTYPE html>
<html>
	<head>
							<?php
								session_start (); //inicia a sessão
								if (isset($_SESSION['nome'])) {
									$logado = $_SESSION['nome'];
									$id_logado = $_SESSION['id'];
								} else {
									header('Location: loginResponsavel.php');
								
								}

								require_once('conecta_bd.php');

							?>
			
		<link rel="stylesheet" href="css/estilo2.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<title>Home</title>
	</head>
	<body>
		<?php

			echo "Olá ".$_SESSION['nome'];

		?>
		<form action="cadastroPortador.php" method="post">

			<div class="form-group">
	            <label class="control-label" for="botao"></label>
	            <div>
	                  <button id="botao" name="botao" class="btn btn-primary">Cadastrar Portador</button>
	            </div>
	        </div>

	        <a href="logoutResponsavel.php"> SAIR </a> 

	    </form>    
	</body>
</html>


