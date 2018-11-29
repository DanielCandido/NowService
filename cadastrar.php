<?php
include_once'head.php';
  ?>
  <?php include_once'header.php' ?>
<body>

<div class="container">	
<h1 style="text-align: center; margin-top: 50px;">Bem vindo usuário</h1>
<a href="cadastrar-prestador.php" style="margin-left: 35%;">Trabalhe Conosco</a>	
<div class="row">	
<form method="POST" action="cadastro.php">
<div class="col-md-8" style="padding: 50px; padding-top: 80px; margin-left: 260px;">
	<h2>Cadastre-se</h2>
	<div class="form-group"> <!-- Name field -->
		<label class="control-label requiredField" for="name">Nome</label>
		<input class="form-control" required="" id="Name" name="Name" type="text"/>
	</div>
	
	<div class="form-group"> <!-- Email field -->
		<label class="control-label requiredField" for="email">Email</label>
		<input class="form-control" required="" id="Email" name="Email" type="email"/>
	</div>
	
	<div class="form-group"> <!-- CPF field -->
		<label class="control-label requiredField" for="subject">CPF</label>
		<input class="form-control" required="" id="Cpf" name="Cpf" type="text"/>
	</div>

	<div class="form-group"> <!-- DateOfBirth field -->
		<label class="control-label requiredField" for="subject">Data de nascimento</label>
		<input class="form-control" required="" id="DateOfBirth" name="DateOfBirth" type="date"/>
	</div>

	<div class="form-group"> <!-- Adress field -->
		<label class="control-label requiredField" for="subject">Endereço</label>
		<input class="form-control" required="" id="Adress" name="Adress" type="text"/>
	</div>

	<div class="form-group"> <!-- Phone field -->
		<label class="control-label requiredField" for="subject">Telefone</label>
		<input class="form-control" required="" id="Phone" name="Phone" type="text"/>
	</div>

	<div class="form-group"> <!-- Cellphone field -->
		<label class="control-label requiredField" for="subject">Celular</label>
		<input class="form-control" required="" id="Cellphone" name="Cellphone" type="text"/>
	</div>


	<div class="form-group"> <!-- Senha field -->
		<label class="control-label requiredField" for="subject">Senha</label>
		<input class="form-control" required="" id="password" name="password" type="password"/>
	</div>

	
	<div class="form-group">
		<button class="btn btn-primary " name="submit" type="submit">Cadastrar</button>
	</div>
</div>	
</form>	


<form method="POST" action="login.php">
<div style="padding: 118px; padding-top: 80px;">
<h2>Entrar</h2>
	<div class="form-group"> <!-- Email field -->
		<label class="control-label requiredField" for="email">Email</label>
		<input class="form-control" id="Email" name="Email" type="text"/>
	</div>
	
	<div class="form-group"> <!-- Subject field -->
		<label class="control-label " for="subject">Senha</label>
		<input class="form-control" id="Password" name="Password" type="password"/>
	</div>
		
	<div class="form-group">
		<button class="btn btn-primary " name="entrar" id="entrar" type="submit">Login</button>
	</div>
</div>	
</form>										
</div>
</div>
</body>
</html>