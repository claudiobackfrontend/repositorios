<?php 
include("conexao.php");
// tratando a insersão dos caracteres no banco de dados
header("Content-Type: text/html; charset= ISO-8859-1",true) ?>
<?php
	 		
$deleta = mysqli_query($conexao,"delete from usuario where id_usu = 0 and id_usu >= 200");
echo $deleta?" <center> <h2> Usuários Deletados com Sucesso!!</center>":"<center> <h2>Falha ao Deletar!!</h2></center>";
		
?>

<?php
$consulta = mysqli_query($conexao,"select * from usuario");	
?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="ISO-8859-1" />
<title> PHP featch Array - Deletando Registros </title>
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






