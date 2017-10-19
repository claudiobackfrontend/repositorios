
<?php 
include 'conexao.php';
// tratando a insersão dos caracteres no banco de dados
header("Content-Type: text/html; charset= ISO-8859-1",true) ?>
<?php
	
	if(!empty($_POST['nome_usuario']) && !empty($_POST['email_usuario']) && !empty($_POST['tel_usuario'])) {
		
		
	@$nome_usuario = trim(str_replace("'","",$_POST['nome_usuario']));
	@$email_usuario = trim(str_replace("'","",$_POST['email_usuario']));
	@$tel_usuario = trim(str_replace("'","",$_POST['tel_usuario']));
	
	@$nome_usuario = $_POST['nome_usuario'];
	@$email_usuario = $_POST['email_usuario'];
	@$tel_usuario = $_POST['tel_usuario'];
	
		echo '<br><br>';
		echo "<b> Nome Usuario: </b>". $nome_usuario."<br>";
		echo "<b> Email: </b> ". $email_usuario."<br>";
		echo "<b> Telefone: </b>". $tel_usuario."<br>";
		
$inserir = mysqli_query ($conexao, "INSERT INTO dg_estruturado.usuario ( nome_usuario, email_usuario, tel_usuario) VALUES ('$nome_usuario','$email_usuario','$tel_usuario')");

	} else {
	
	echo " <center> <h2> Preencha o Formulário!! <br>
				Falha ao Cadastrar no Banco de Dados!!</h2></center>";
		}

//echo $inserir?" <center> <h2> Dados Cadastrados com Sucesso!!":"Falha ao Cadastrar!!</h2></center>" 
// or die (mysql_error());


 ?>
 

<?php
$consulta = mysqli_query($conexao,"select * from usuario");	
?>

<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html" charset="ISO-8859-1" />
 <title> PHP featch Array </title>
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
