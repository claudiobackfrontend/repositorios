
<?php

$conexao = mysqli_connect("localhost", "root","", "dg_estruturado" );
		echo " <center> <h2> CONEXAO REALIZADA!! BANCO DE DADOS SELECIONADO!!</h2></center>" or
	 die ("<center> <h2> CONEXAO NÃO REALIZADA!! BANCO DE DADOS NÃO SELECIONADO!!</h2></center>" . (mysql_error));
	
/*$consulta = mysqli_query($conexao," update dg_estruturado.usuario set 
																nome = 'Ranger',
																marca = 'Ford',
																ano = 2016 where id = 7 ");*/
			
$atualiza = mysqli_query($conexao," update dg_estruturado.usuario set id_usu = id_usu +1 where id_usu >= 200 ");
echo $atualiza?" <center> <h2> OS ids foram Atualuzados com Sucesso!!":"Falha ao Atualizar!!</h2></center>";
		
?>

<?php
$consulta = mysqli_query($conexao,"select * from usuario");	
?>

<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html" charset="ISO-8859-1" />
 <title> PHP featch Array - Atualizando a Tabela </title>
 <link href="../test-webjump/css/box.css" rel="stylesheet" type="text/css">
 </head>
<body> 
<hr>
	<div id="box"> 
		<table class="tabela"> 
        <thead> 
        	<tr>
            	<td>Id</td><td>Nome</td><td>E-mail</td><td>Telefone</td>
			</tr>              
        </thead>
		<tbody>
        <?php while($rows = mysqli_fetch_array($consulta)) {
			$color = "#e1e1e1";
		?>
				<tr style="background-color:<?php echo $color ?>">
                <td><?php echo $rows['id_usu'] ?></td>
            	<td><?php echo $rows['nome_usuario'] ?></td>
                <td><?php echo $rows['email_usuario'] ?></td>
                <td><?php echo $rows['tel_usuario'] ?></td>
                </tr>
            
			<?php 	
		}

			?>
		</tbody>
		</table>
	</div>

	</body>
    
</html>






