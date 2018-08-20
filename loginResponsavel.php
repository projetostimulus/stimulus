
<html>
	<head>
		<meta charset="UTF-8">
	    <link rel="stylesheet" href="css/estilo1.css">
	    <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	    <title>	Login </title>

	</head>
	<body>
		<div class="container">
			<form class="form-horizontal" method="POST" action="loginResponsavelControll.php">
				<!-- Text input-->
				<div class="form-group">
				<label class="col-md-4 control-label" for="emailResponsavel">E-mail</label>  
					<div class="col-md-4">
					  <input id="emailResponsavel" name="emailResponsavel" type="text" class="form-control input-md" required="">
				    </div>
				</div>
				<!-- Password input-->
				<div class="form-group">
				<label class="col-md-4 control-label" for="senhaResponsavel">Senha</label>
				  	<div class="col-md-4">
				    	<input id="senhaResponsavel" name="senhaResponsavel" type="password" class="form-control input-md" required="">
				    </div>
				</div>

				<!-- Button -->
				<div class="form-group">
				<label class="col-md-4 control-label" for="botao"></label>
					<div class="col-md-4">
				    	<button id="botao" name="botao" class="btn btn-primary">OK</button>
				  	</div>
				</div>
				<div>
                                           <?php
                                           
                                             if(isset($_GET['resp_login'])){
                                                if ($_GET['resp_login']== "FALSE"){

                                                    echo "Usuário e/ou senha inválidos, tente novamente. ";
                                                }
                                             }
                                            ?>
                                         
                                            
                </div>
			</form>
		</div>
	</body>
</html>