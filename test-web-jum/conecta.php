<?php 
// tratando a insersão dos caracteres no banco de dados
header("Content-Type: text/html; charset= utf-8",true) ?>
<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "dg_estruturado" ;

$conexao = mysqli_connect($host,$usuario,$senha) or die ("<center> <b>ERRO NA CONEXÃO!!!</center><b>");
			// echo '<center> <h3> CONEXÃO REALIZADA COM SUCESSO!!! <h3></center>';
// mysql_close($conexao);
// mysql_ping($conexao);


// Selecionando o Banco
mysqli_select_db($conexao,"dg_estruturado") or die ("<center> <b>Nenhum banco de dados encontrado</center><b>");

?>

