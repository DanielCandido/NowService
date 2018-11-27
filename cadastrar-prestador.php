<?php
include_once'header.php'; 
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