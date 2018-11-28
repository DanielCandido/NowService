<?php
include_once'head.php'; 
?>
<header>
	<div class="menu">
		<label>
	<?php
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
<body>
<div class="container" style="margin-top: 50px;">	
<div class="row col-xs-8 col-xs-offset-2">
	
<form method="POST" action="cadastro-prestador.php">

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

	<div class="form-group"> <!-- FantasyName field -->
		<label class="control-label requiredField" for="subject">Nome Fantasia (Nome de divulgação)</label>
		<input class="form-control" required="" id="FantasyName" name="FantasyName" type="text"/>
	</div>

	<div class="form-group"> <!-- FantasyName field -->
		<label class="control-label requiredField" for="subject">Categoria</label>
		<select class="form-control" required="" id="Category" name="Category" type="text">
			<option>Selecione</option>
			<option value="Jardinagem" id="Category" name="Category">Jardinagem</option>
			<option value="Reformas Gerais" id="Category" name="Category">Reformas Gerais</option>
			<option value="Eletricista" id="Category" name="Category">Eletricista</option>
			<option value="Encanador" id="Category" name="Category">Encanador</option>
			<option value="Pedreiro" id="Category" name="Category">Pedreiro</option>
		</select>
	</div>

	<div class="form-group"> <!-- Senha field -->
		<label class="control-label requiredField" for="subject">Senha</label>
		<input class="form-control" required="" id="Password" name="Password" type="password"/>
	</div>

	
	<div class="form-group">
		<button class="btn btn-primary " name="submit" type="submit">Cadastrar</button>
	</div>
	
</form>	


<form>


	<div class="form-group"> <!-- Name field -->
		<label class="control-label " for="name">Name</label>
		<input class="form-control" id="name" name="name" type="text"/>
	</div>
	
	<div class="form-group"> <!-- Email field -->
		<label class="control-label requiredField" for="email">Email<span class="asteriskField">*</span></label>
		<input class="form-control" id="email" name="email" type="text"/>
	</div>
	
	<div class="form-group"> <!-- Subject field -->
		<label class="control-label " for="subject">Subject</label>
		<input class="form-control" id="subject" name="subject" type="text"/>
	</div>
	
	<div class="form-group"> <!-- Message field -->
		<label class="control-label " for="message">Message</label>
		<textarea class="form-control" cols="40" id="message" name="message" rows="10"></textarea>
	</div>
	
	<div class="form-group">
		<button class="btn btn-primary " name="submit" type="submit">Submit</button>
	</div>
	
</form>	
</div>										
</div>
</body>
</html>