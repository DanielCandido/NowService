<!DOCTYPE html>
<html>
<head>
	<title>Pagina Inicial</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<header>
	<div class="menu">
	<label>
	<?php
	session_start();
 	 //$login_cookie = $_COOKIE['Email'];
    if(!isset ($_SESSION['usuario']) == false){
    	$login_cookie = $_SESSION['usuario'];

      echo"<h5 class='bemvindo'>Bem-Vindo $login_cookie</h5>";
      echo "<div class='dropdown' id='dropdown'>
  		<button class='btn btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>=</button>
  <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
    <a class='dropdown-item' href='#'>Action</a>
    <a class='dropdown-item' href='#'>Another action</a>
    <a class='dropdown-item' href='#'>Something else here</a>
  </div>
</div>";
      echo"<form method='get' action='logout.php'>
      <input type='submit' class='logout' value='Logout'></input>
      </form>";
    
    }else{

      echo"<h5 class='bemvindo'>Bem-Vindo, convidado  </h5>";
      echo"<a class='logout' href='cadastrar.php' style='text-decoration:none'>Login</a>";
    }
?>
		</label>
	</div>
	<h1 class="logo">WORKERS</h1>
	<div class="menup">
	<ul class="nav nav-pills nav-fill" style="background-color: black; border-radius: 5px;">
  	<li class="nav-item">
    <a class="nav-link active" href="#">Inicio</a>
  	</li>
  	<li class="nav-item">
    <a class="nav-link" href="#">Sobre nós</a>
  	</li>
  	<li class="nav-item">
    <a class="nav-link" href="#">Categorias</a>
  	</li>
  	</li>
	</ul>
		</ul>
	</div>
	</header>

	<div class="conteudo">
		<?php
		include_once("listarprestadores.php");
		if ($total > 0) {
		 	do {
		?>
		<div class="mostraPrestadores">
			<label><?=$linha['FantasyName']?></label>
			<p><?=$linha['Cpf']?></p>
			<p><?=$linha['category']?></p>
			<button>Contratar</button>
		</div>
		<?php
        // finaliza o loop que vai mostrar os dados
        }while($linha = mysqli_fetch_assoc($dados));
    // fim do if 
    	}
		?>	
	</div>
	<footer></footer>
</body>
</html>