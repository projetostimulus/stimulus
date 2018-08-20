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

		<title>Cadastro Portador</title>
		<meta charset="UTF-8">
      
	    <link rel="stylesheet" href="css/estilo2.css">
	      <!-- Latest compiled and minified CSS -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	      <!-- Optional theme -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	      <!-- Latest compiled and minified JavaScript -->
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container">
			<form class="form-horizontal" method="POST" action="cadastroPortadorControll.php" >

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="nomePortador">Nome do Portador </label>  
					<div class="col-md-4">
					  	<input id="nomePortador" name="nomePortador" type="text" placeholder="Nome Completo" class="form-control input-md" required="">  
					</div>
				</div>

				<div class="form-group">
		            <label class="col-md-4 control-label" for="dataNascPortador">Data de Nascimento </label>
		            <div class="col-md-4">
		                  <input id="dataNascPortador" name="dataNascPortador" type="date" placeholder="Data de Nascimento" class="form-control input-md" required="">                
		            </div>
        		</div>

				<!-- Select Basic -->
				<div class="form-group">
				 	<label class="col-md-4 control-label" for="faseDoenca">Fase Alzheimer</label>

									 	<?php

									 		$buscar = "SELECT * FROM fase_doenca"; //busca das fases no banco. As fases deverão ser cadastradas pelo admin, por enquanto foram inseridas no bd manualmente.  
									 		$query = mysqli_query($link, $buscar);
									 	?>

				  	<div class="col-md-4">
					    <select id="faseDoenca" name="faseDoenca" class="form-control">

									    <?php
									    	while($dados=mysqli_fetch_assoc($query)){
									    ?>	
					      	<option value="<?=$dados['idfase_doenca']?>"> <?=$dados['fase_doenca']?></option>
									    <?php
									 		}
									 	?>
					    </select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="quantFilhos">Quantidade de Filhos </label>  
					<div class="col-md-4">
						<input type="number" class="form-control input-md" required="" name="quantFilhos" min="0" max="20"> 
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="cpfPortador">CPF do Portador </label>  
					<div class="col-md-4">
					  	<input id="cpfPortador" name="cpfPortador" type="text" class="form-control input-md" required="">  
					</div> <!--Faze rum campo que delimite apenas para números e com a quantidade de um num. de cpf-->
				</div>



				 <div  class="form-group">
		             <div class="col-md-4">
		                                           <?php  
		                                           if(isset($_GET['resp_cadastro'])){
		                                                if ($_GET['resp_cadastro']== "TRUE"){

		                                                    echo "Portador cadastrado.";
		                                                    
		                                           ?>
		                                          <?php
		                                           }else {
		                                                    if ($_GET['resp_cadastro']== "FALSE1"){
		                                                         echo "Portador já cadastrado. Tente novamente.";
		                                                    }else{
		                                                       if ($_GET['resp_cadastro']== "FALSE2"){
		                                                           
		                                                           echo "O Portador não foi cadastrado com sucesso, tente novamente. Verifique se todos os campos foram preenchidos adequadamente";  
		                                                       }
		                                                }
		                                           }
		                                           }
		                                            ?>
		            </div>
       			 </div>

				<div class="form-group">
		            <label class="col-md-4 control-label" for="botao"></label>
		            <div class="col-md-4">
		                  <button id="botao" name="botao" class="btn btn-primary">Cadastrar</button>
		            </div>

		        </div> 
		
			</form>
		</div>	


	</body>
</html>