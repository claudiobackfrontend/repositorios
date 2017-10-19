
<?php

$conexao = mysqli_connect("localhost", "root","", "php_impacta" );
$consulta = mysqli_query($conexao,"select * from veiculos");	
?>


<!DOCTYPE HTML>
<html>
	<head> <title> PHP featch Array </title>
    <link href="../cap-09/box.css" rel="stylesheet" type="text/css">
<body> 
	<div id="box"> 
		<table class="tabela"> 
        <thead> 
        	<tr>
            	<td>Id</td><td>Carro</td><td>Marca</td><td>Ano</td>
			</tr>              
        </thead>
		<tbody>
        <?php while($rows = mysqli_fetch_array($consulta)) {
			$color = "#e1e1e1";
		?>
				<tr style="background-color:<?php echo $color ?>">
                <td><?php echo utf8_decode($rows['id']) ?></td>
            	<td><?php echo utf8_decode($rows['nome']) ?></td>
                <td><?php echo utf8_decode($rows['marca']) ?></td>
                <td><?php echo $rows["ano"] ?></td>
                </tr>
            
			<?php 	
		}

			?>
		</tbody>
		</table>
	</div>

	</body>
    
</html>





