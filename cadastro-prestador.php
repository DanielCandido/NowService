<?php 
include_once("conexao.php");
?>
<?php 
$name = $_POST['Name'];
$email = $_POST['Email'];
$cpf = $_POST['Cpf'];
$dataofbirth = $_POST['DateOfBirth'];
$adress = $_POST['Adress'];
$phone = $_POST['Phone'];
$cellphone = $_POST['Cellphone'];
$fantasyname = $_POST['FantasyName'];
$category = $_POST['Category'];
$password = md5($_POST['Password']);

$query_select = "SELECT Cpf FROM provider WHERE Cpf = '$cpf'";
$select = mysqli_query($conn,$query_select);
$array = mysqli_fetch_array($select);
$longarray = $array['Cpf'];

			if ($longarray != null) {
				echo "<script language='javascript' type='text/javascript'>alert('Esse Cpf já existe em nosso cadastro');window.location.href='cadastrar.php';</script>";
				die();
			}
			/*if (!empty($imgperfil['name']){
				$largura = 150;
				$altura = 150;
				$tamanho = 1000;
				$error = array();

				if (!preg_match('/^image\/(pjpeg|jpeg|png|gif|bmp)$/', $imgperfil["type"])) {
					$error[1] = "Isso não é imagem.";
				}

				$dimensoes = getimagesize($imgperfil["tmp_name"]);

				if ($dimensoes[0]>$largura) {
					$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
				}

				if ($dimensoes[0]>$altura) {
					$error[3] = "A largura da imagem não deve ultrapassar ".$altura." pixels";
				}
				if($imgperfil["size"] > $tamanho) {
   		 			$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
				}

				if (count($error) == 0) {
					preg_match('"/^image\/(pjpeg|jpeg|png|gif|bmp)$/"', $imgperfil['name'], $ext);

					$nome_imagem = md5(uniqid(time())).".".$ext[1];

					$caminho = "fotos/" . $nome_imagem;

					move_uploaded_file($imgperfil['tmp_name'], $caminho);*/
					else {
					$nome_imagem = '/fotos/perfil.png';
					$query = "INSERT INTO provider (Name,Email,Cpf,DateOfBirth,Adress,category,FantasyName,Password,imgprofile,Phone,Cellphone)
					VALUES ('$name','$email','$cpf','$dataofbirth','$adress','$category','$fantasyname','password','$nome_imagem','$phone','$cellphone')";
					var_export($query);
					$insert = mysqli_query($conn,$query);
					var_export($insert);
						if (mysqli_affected_rows($conn) != 0) {
					 	$_SESSION['usuario']= $email; 	
					 	echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='index.php'</script>";
				 	} else {
		    
						echo "<script language='javascript' type='text/javascript'>alert('Impossivel realizar o cadastro');window.location.href='cadastrar-prestadores.php';</script>";
				}
			}
 ?>