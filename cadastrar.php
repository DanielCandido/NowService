<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body class="body">
<header>
	<div class="menu">
		<label>
	<?php
	session_start();
 	 //$login_cookie = $_COOKIE['Email'];
    if(!isset ($_SESSION['usuario']) == false){
    	
  		header("Location: index.php");
    
    }else{

      echo"<h5 class='bemvindo'>Bem-Vindo, convidado</h5> ";
      echo"<a href='cadastrar.php' class='logout' style='text-decoration:none'>Login</a>";
    }
	?>
		</label>
	</div>
	<h1 class="logo">WORKERS</h1>
	<div class="menup">
	<ul class="nav nav-pills nav-fill" style="background-color: black; border-radius: 5px;">
  	<li class="nav-item">
    <a class="nav-link active" href="index.php">Inicio</a>
  	</li>
  	<li class="nav-item">
    <a class="nav-link" href="#">Sobre</a>
  	</li>
  	<li class="nav-item">
    <a class="nav-link" href="#">Categorias</a>
  	</li>
  	</li>
	</ul>
	</div>
</header>

<div class="form">
<form method="POST" action="cadastro.php">

	<div class="cadastro">
		<h2>Cadastre-se</h2>
		<div class="linha"></div>
		<div class="input-group mb-3">
			<input placeholder="Nome" required="" type="text" name="Name" id="Name">
			<input placeholder="Email" required="" type="email" name="Email" id="Email">
			<input placeholder="CPF" required="" type="text" name="Cpf" id="Cpf">
			<input placeholder="Data Nascimento" required="" max="2000-01-01"  type="date" name="DateOfBirth" id="DateOfBirth">
			<input placeholder="Endereco" required="" type="text" name="Adress" id="Adress">
			<input placeholder="Senha" required="" type="password" name="password" id="password"><br>
		</div>
		<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar"></input>
	</div>
</form>
<form method="POST" action="login.php">
	<div class="cadastro">
		<h2>Login</h2>
		<div class="linha"></div>
		<div class="input-group mb-3">
			<input type="text" required="" placeholder="Login" name="Email" id="Email">
			<input type="password" required="" placeholder="Senha" name="password" id="password">
		</div>
		<input type="submit" value="Entrar" name="entrar" id="entrar">
	</div>
</form>
</div>

</body>
</html>