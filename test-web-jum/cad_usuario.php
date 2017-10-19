<!DOCTYPE HTML>
<html>
<head> <title> Cadastrando no banco e listando um datagrid na tela </title>
<link href="../cap-09/box.css" rel="stylesheet" type="text/css">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="ISO-8859-1" />
<title>Cadastro Usuario</title>
</head>

<body>
<h2> Cadastro Usu&aacute;rio </h2>

<form method="post" name ="cad_usuario" action="cad_usuario_exe.php">
<table>
	<tr>
	 <td>
      Nome:</td><td><input name="nome_usuario" type="text" size="50" maxlength="100" />
     </td>
     <tr>
     <tr>
     <td>E-mail: </td>
     <td><input name="email_usuario" type="text" size="30" maxlength="80" /></td>
     <tr>
     <tr>
     <td>Telefone:</td>
     <td><input name="tel_usuario" type="text" size="30" maxlength="30" /></td>
     <tr>
     <tr>
     <td colspan=2 align="center"><input type="submit" name="submit" value="Enviar" /></td>
     <tr>
     </table>
     </form>   

</body>
</html>
