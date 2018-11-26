<?php 
session_start();
include_once("conexao.php");
 ?>
<?php 
$name = $_POST['Name'];
$email = $_POST['Email'];
$cpf = $_POST['Cpf'];
$dataofbirth = $_POST['DateOfBirth'];
$adress = $_POST['Adress'];
$category = $_POST['Category'];
$fantasyname = $_POST['FantasyName'];
$password = md5($_POST['Password']);
$imgperfil = $_FILES['improfile'];

$query_select = "SELECT Cpf FROM provider WHERE Cpf = '$cpf'";
$select = mysqli_query($query,$conn);
$array = mysqli_fetch_array($select);
$longarray = $array['Cpf'];

			if ($longarray != null) {
				echo "<script language='javascript' type='text/javascript'>alert('Esse Cpf já existe em nosso cadastro');window.location.href='cadastrar.php';</script>";
						die();
			} else {
				$query = "INSERT INTO provider (Name,Email,Cpf,DateOfBirth,Adress,Category,FantasyName,Password,improfile)
				VALUES ('$name','$email','$cpf','$dataofbirth','$adress','$category','$fantasyname','password','$imgperfil')";
				$insert = mysqli_query($conn,$query);
				if (mysqli_affected_rows($conn) != 0) {
				 $_SESSION['usuario']= $email; 	
				 echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='index.php'</script>";
	        	}

				} else {
				echo "<script language='javascript' type='text/javascript'>alert('Impossivel realizar o cadastro');window.location.href='cadastrar-prestadores.php';</script>";
			}
		}
 ?>