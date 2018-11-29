<header>
	<div class="menu">
		<label>
	<?php
 	 //$login_cookie = $_COOKIE['Email'];
    if(!isset ($_SESSION['p-logado']) == false){
    	$login_cookie = $_SESSION['p-logado'];
        echo"<h5 class='bemvindo'>Bem-Vindo $login_cookie</h5>";
      echo "<div class='logout dropdown'>
      <button class='btn btn-secondary dropdown-toggle'style='width:155px;height:45px;' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
        Menu
      </button>
      <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
        <a class='dropdown-item' style='color:black' href='meuspedidos.php'>Meus Pedidos</a>
        <a class='dropdown-item' style='color:black' href='editarperfil.php'>Perfil</a>
        <a class='dropdown-item' style='color:black' href='logout.php'>Sair</a>
      </div>
    </div> 
      ";
    } 

    else{

     header("Location:cadastrar-prestador.php");
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