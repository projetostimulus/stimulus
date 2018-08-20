<html>
    <head>
      <title> Cadastro Responsável</title>
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
      <form class="form-horizontal" method="POST" action="cadastroResponsavelControll.php">
        
        <div class="form-group">
            <label class="col-md-4 control-label" for="nomeResponsavel">Responsável</label>  
            <div class="col-md-4">
                <input id="nomeResponsavel" name="nomeResponsavel" type="text" placeholder="Nome Completo " class="form-control input-md" required="">
                <span class="help-block">Insira aqui o nome completo do responsável pelo portador</span>  
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="emailResponsavel">Endereço de E-mail</label>  
            <div class="col-md-4">
                <input id="emailResponsavel" name="emailResponsavel" type="email" placeholder="E-mail " class="form-control input-md" required="">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="senhaResponsavel">Senha </label>
            <div class="col-md-4">
                  <input id="senhaResponsavel" name="senhaResponsavel" type="password" placeholder="Senha" class="form-control input-md" required="">
                  
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="dataNascResponsavel">Data de Nascimento </label>
            <div class="col-md-4">
                  <input id="dataNascResponsavel" name="dataNascResponsavel" type="date" placeholder="Data de Nascimento" class="form-control input-md" required="">
                              
            </div>
        </div>

        <div  class="form-group">
             <div class="col-md-4">
                                           <?php  
                                           if(isset($_GET['resp_cadastro'])){
                                                if ($_GET['resp_cadastro']== "TRUE"){

                                                   
                                                    echo "Responsável cadastrado, faça seu login";
                                                    
                                           ?>
                                          <?php
                                           }else {
                                                    if ($_GET['resp_cadastro']== "FALSE1"){
                                                         echo "Responsável já cadastrado. Tente novamente.";
                                                    }else{
                                                       if ($_GET['resp_cadastro']== "FALSE2"){
                                                           
                                                           echo "O Responsável não foi cadastrado com sucesso, tente novamente. Verifique se todos os campos foram preenchidos adequadamente";  
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
         <a class="link" href="loginResponsavel.php">Efetuar Login</a>
      </form>
    </div>
  </body>
</html>