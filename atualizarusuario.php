<?php 
session_start();
include_once("conexao.php");

$name =$_POST['Name'];
$email =$_POST['Email'];
$cpf =$_POST['cpf'];
$dateofbirth =$_POST['DateOfBirth'];
$adress =$_POST['Adress'];
$password =md5($_POST['password']);	
$id = $_SESSION['id'];

$query = "UPDATE users SET Name = '$name', Email = '$email', cpf = '$cpf', DateOfBirth = '$dateofbirth', Adress = '$adress', password = '$password' WHERE cpf = '$id'";
var_export($query);
$dados = mysqli_query($conn,$query);
var_export($dados);
$total = mysqli_num_rows($dados);
if ($total > 0) {
	echo "<script language='javascript' type='text/javascript'>alert('Usuário atualizado com sucesso!');window.location.href='editarperfil.php'</script>";
} else {
	echo "<script language='javascript' type='text/javascript'>alert('Erro ao atualizar usuario!');window.location.href='editarperfil.php'</script>";
}
mysqli_close();
 ?>