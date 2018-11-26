<?php 
session_start();
include_once("conexao.php");
 ?>
<?php 
$name =$_POST['Name'];
$email =$_POST['Email'];
$cpf =$_POST['Cpf'];
$dateofbirth =$_POST['DateOfBirth'];
$adress =$_POST['Adress'];
$password =md5($_POST['password']);

$query_select = "SELECT Cpf FROM users WHERE Cpf = '$cpf'";
$select = mysqli_query($conn,$query_select);
$array = mysqli_fetch_array($select);
$longarray = $array['Cpf'];
var_dump($longarray);

		if ($longarray != null) {
			echo "<script language='javascript' type='text/javascript'>alert('Esse Cpf já existe em nosso cadastro');window.location.href='cadastrar.php';</script>";
			die();
		} else {
			$query = "INSERT INTO users (Name, Email, Cpf, DateOfBirth, Adress, password)
			VALUES ('$name','$email','$cpf','$dateofbirth','$adress','$password')";
			$insert = mysqli_query($conn,$query);
			if (mysqli_affected_rows($conn) != 0) {
			 $_SESSION['usuario']= $email; 	
			 echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='index.php'</script>";
        	}else {
          	echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário:');window.location.href='cadastrar.php'</script>";
        	}
		}
 ?>