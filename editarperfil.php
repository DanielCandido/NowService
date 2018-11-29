<?php 
session_start();
include_once 'head.php'?>	
<body>
	<?php include_once 'header.php'?>
	<div class="container" style="margin-top:50px;">
	<?php include_once("conexao.php"); 
		$id = $_SESSION['id'];

		$query = "SELECT Name, Email, cpf, DateOfBirth, Adress, password FROM users WHERE cpf = '$id'";
		$dados = mysqli_query($conn,$query) or die (mysqli_error());
    $total = mysqli_num_rows($dados);
    if ($total > 0) {
        $linha = mysqli_fetch_assoc($dados);
    }
	

	?>
<h1>Editar Perfil</h1>
<form method="POST" action="atualizarusuario.php">	
<div class="form-group row">
  	<label for="example-text-input" class="col-2 col-form-label">Nome</label>
 	 <div class="col-6">
    <input class="form-control" type="text" value="<?=$linha['Name']?>" id="Name" name="Name">
  	</div>
</div>
<div class="form-group row">
  	<label for="example-text-input" class="col-2 col-form-label">Email</label>
 	 <div class="col-6">
    <input class="form-control" type="text" value='<?=$linha['Email']?>' id="Email" name="Email">
  	</div>
</div>

<div class="form-group row">
  	<label for="example-text-input" class="col-2 col-form-label">CPF</label>
 	 <div class="col-6">
    <input class="form-control" type="text" value="<?=$linha['cpf']?>" id="cpf" name="cpf">
  	</div>
</div>

<div class="form-group row">
  	<label for="example-text-input" class="col-2 col-form-label">Data Nascimento</label>
 	 <div class="col-6">
    <input class="form-control" type="date" value="<?=$linha['DateOfBirth']?>" id="DateOfBirth" name="DateOfBirth">
  	</div>
</div>

<div class="form-group row">
  	<label for="example-text-input" class="col-2 col-form-label">Endereço</label>
 	 <div class="col-6">
    <input class="form-control" type="text" value="<?=$linha['Adress']?>" id="Adress" name="Adress">
  	</div>
</div>

<div class="form-group row">
  	<label for="example-text-input" class="col-2 col-form-label">Senha</label>
 	 <div class="col-6">
    <input class="form-control" type="password" value="<?=$linha['Password']?>" id="password" name="password">
  	</div>
</div>
<button type="submit" class="btn btn-primary">Atualizar</button>
</form>
</div>

</body>
</html>