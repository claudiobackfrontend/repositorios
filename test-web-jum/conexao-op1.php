<?php 
// tratando a insersão dos caracteres no banco de dados
header("Content-Type: text/html; charset= utf-8",true) ?>

<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "dg_estruturado";

$conexao = mysqli_connect($host,$usuario,$senha) or die ("Erro ao conectar a base de dados!!!");
if($conexao) {
	// echo "<center> <h2> Conexão Realizada com Sucesso!!! <h2></center>";
	} 


// mysql_close($conexao);
// mysql_ping($conexao);

/* Selecionando o Banco OP 1 */
$db_selected = mysqli_select_db($conexao,"dg_estruturado") 
   or die (("<center><b>ERRO AO CONECTAR O BANCO DE DADOS!!!<b></center>"). mysql_error());

	if($db_selected) {  
		 echo strtoupper ('<center><b> Banco de dados encontrado!!<b></center>'); 
		}

/* Selecionando o Banco OP 2
$db_selected = mysqli_select_db($conexao,"dg_estruturado");
if(!$db_selected){ 
 	echo  '<center><b> BANCO DE DADOS NÃO ENCONTRADO!!<b></center>';
} else {
	 // echo  '<center><b> BANCO DE DADOS SELENCIONADO!!<b></center>';
	}
*/

?>








