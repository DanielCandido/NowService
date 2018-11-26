<?php 
$servidor = "localhost";
$usuario = "DanielCandido";
$senha = "grove170596";
$dbname = "workers";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname) or die("Sem conexao");

if (!$conn) {
	die("Falha na conexão: " .mysqli_connect_error());
} else {
	echo "<script>console.log('Conexão Efetuada...'')</script>";
}
 ?>
