<?php 
// tratando a insersão dos caracteres no banco de dados
header("Content-Type: text/html; charset= utf-8",true) ?>

<?php

		function conecta($banco, $host="localhost", $usuario="root", $senha="") {
			
			//tornando a variavel $con publica
			global $conexao, $db;
			$conexao = mysqli_connect($host, $usuario, $senha);
			if(!$conexao) {
					echo '<center> <h2> Conexão NÃO Realizada!!! <h2></center>';
			} 
			
			@$db = mysqli_select_db($conexao, $banco);
			if(!$db) { 
			   			echo '<center> <h3> BANCO DE DADOS NÃO SELECIONADO!!! <h3></center>';
			} else {
			       		// echo '<center> <h3> BANCO DE DADOS SELECIONADO COM SUCESSO!!! <h3></center>';
					} 
			}
			
		/*function desconeta($conexao) {
				mysqli_close($conexao);
			unset($conexao);
			
			}*/
				
			conecta("dg_estruturado");
			// echo "Conexão efetuada com sucesso!!";
			// desconecta($conexao);




?>








