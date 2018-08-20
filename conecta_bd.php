<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$bd_nome= 'stimulus_bd';


//conecta-se ao banco de dados do MySQL
$link = new mysqli($servidor, $usuario, $senha, $bd_nome);


//caso algo tenha dado errado, exibir mensagem de erro.
if (!$link) {
	echo ('Não foi possivel conectar'.mysqli_error());
}



?>

