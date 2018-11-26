<?php 
include_once("conexao.php");
$name = $_POST['Name'];
$email =$_POST['Email'];
$cpf =$_POST['Cpf'];
$dateofbirth =$_POST['DaeOfBirth'];
$adress =$_POST['Adress'];
$password =md5($_POST['password']);

$query_select = "SELECT Cpf FROM users WHERE Cpf = '$cpf'";
$select = mysqli_query($query_select,$conn);
$array = mysqli_fetch_array($select);
$longarray = $array['Cpf'];

		if ($longarray == $cpf) {
			echo "<script language='javascript' type='text/javascript'>alert('Esse Cpf já existe em nosso cadastro');window.location.href='cadastro.html';</script>";
			die();
		} else {
			$query = "INSERT INTO users (Name, Email, Cpf, DateOfBirth, Adress, password)
			VALUES ('$name','$email','$cpf','$dateofbirth','$adress','$password');";
			$insert = mysqli_query($conn,$query);
			echo($insert);
			if (isset($insert)) {
			 echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='cadastro.html'</script>";
        	}else {
          	echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário:');window.location.href='cadastro.html'</script>";
         		
        	}
		}
	}
 ?>