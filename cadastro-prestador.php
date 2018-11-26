<?php 
include_once("conexao.php");
$name = $_POST['Name'];
$email = $_POST['Email'];
$cpf = $_POST['Cpf'];
$dataofbirth = $_POST['DateOfBirth'];
$adress = $_POST['Adress'];
$category = $_POST['Category'];
$fantasyname = $_POST['FantasyName'];
$password = md5($_POST['Password']);
$imgperfil = $_FILES['imgprofile'];

$query_select = "SELECT Cpf FROM provider WHERE Cpf = '$cpf'";
$select = mysqli_query($query,$conn);
$array = mysqli_fetch_array($select);
$longarray = $array['Cpf'];

if ($longarray != $cpf) {
if ($imgperfil != null) {
	$nomefinal = time().'jpg';
	if (move_uploaded_file($imgperfil['tmp_name'], $nomefinal)) {
		$tamanhoImg = filesize($nomefinal);

		$mysqlImg =addcslashes(fread(fopen($nomefinal, "r"), $tamanhoImg));

		$query = "INSERT INTO provider (Name,Email,Cpf,DateOfBirth,Adress,Category,FantasyName,Password,imgprofile)
			VALUES ('$name','$email','$cpf','$dataofbirth','$adress','$category','$fantasyname','password','$mysqlImg')";
			mysqli_query($conn,$query);
			}

			unlink($nomefinal);

	}
} else {
	echo "<script language='javascript' type='text/javascript'>alert('Esse Cpf já existe em nosso cadastro');window.location.href='cadastro.html';</script>";
			die();
}

 ?>