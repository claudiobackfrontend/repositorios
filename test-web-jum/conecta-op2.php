
<?
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "dg_estruturado";

$conexao = mysqli_connect($host,$usuario,$senha) or die ("Erro ao conectar a base de dados!!!");
// mysql_close($conexao);
// mysql_ping($conexao);


// Selecionando o Banco
mysqli_select_db($conexao,$banco) or die ("Nenhum banco de dados encontrado");

?>

