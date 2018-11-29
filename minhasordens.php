<?php 
include_once 'head.php' ?>
<body>
	<header>
  <div class="menu">
    <label>
  <?php
   //$login_cookie = $_COOKIE['Email'];
    if(!isset ($_SESSION['usuario']) == false){
      
      header("Location: index.php");
    
    } if (!isset($_SESSION['p-logado']) == false){
    	$login_cookie =$_SESSION['p-logado'];
      echo "<h5 class='bemvindo'>Bem-Vindo $login_cookie<h5>";
         echo "<div class='logout dropdown'>
		  <button class='btn btn-secondary dropdown-toggle'style='width:155px;height:45px;' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
		    Menu
		  </button>
		  <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
		    <a class='dropdown-item' style='color:black' href='minhasordens.php'>Minhas Ordens</a>
		    <a class='dropdown-item' style='color:black' href='editarperfil-p.php'>Perfil</a>
		    <a class='dropdown-item' style='color:black' href='logout.php'>Sair</a>
		  </div>
		</div> 
      ";
    }

    else{

      echo"<h5 class='bemvindo'>Bem-Vindo, convidado</h5> ";
      echo"<a href='cadastrar-prestador.php' class='logout btn btn-primary' style='text-decoration:none'>Login</a>";
    }
  ?>
    </label>
  </div>
  <div class="menup">
  <ul class="nav nav-pills nav-fill" style="background-color: black; border-radius: 5px;">
    <li class="nav-item">
    <a class="nav-link active" href="minhasordens.php">Inicio</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="sobre.php">Sobre nós</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#">Categorias</a>
    </li>
    </li>
  </ul>
  </div>
</header>
	<div class="container">
		<h4 style="margin-top: 50px;">Ordens Pendentes</h4>
		
			<?php 
				include_once("conexao.php");
				$id = $_SESSION['p-id'];
				$query = "SELECT IdOrder, IdUser, IdProvider, DateOrder, Status FROM orderservice WHERE IdProvider = '$id' AND Status = 'Aguardando aprovação'";
				$dados = mysqli_query($conn,$query);
				$linha = mysqli_fetch_assoc($dados);
				$total = mysqli_num_rows($dados);

				if ($total > 0) {
					do {
			 ?>
			 	<table class="table table-hover">
				<thead>
				    <tr>
				      <th scope="col">Nº Ordem</th>
				      <th scope="col">Solicitante</th>
				      <th scope="col">Data Pedido</th>
				      <th scope="col">Status</th>
				      <th scope="col">Ações</th>
				    </tr>
 		 		</thead>
 		 		<tbody>
			 	<tr>
			      <th scope="row"><?=$linha['IdOrder']?></th>
			      <td><?=$linha['IdUser']?></td>
			      <td><?=$linha['DateOrder']?></td>
			      <td><?=$linha['Status']?></td>
			      <td><a href="" class="btn btn-success">Aceitar</a><a href="" class="btn btn-danger">Cancelar</a></td>
			    </tr>
			       </tbody>
			</table>
			    <?php 
			    }while ( $linha = mysqli_fetch_assoc($dados)); 
			    	
			    } else {
			    	echo "<div class='alert alert-warning' role='alert' style='margin-top: 50px;'>
				Você não possui ordens pendentes 
				</div>";
			    }
			    ?>
			 <h4>Ordens em andamento</h4>
			 <?php 
				include_once("conexao.php");
				$id = $_SESSION['p-id'];
				$query = "SELECT IdOrder, IdUser, IdProvider, DateOrder, Status FROM orderservice WHERE IdProvider = '$id' AND Status = 'Em andamento'";
				$dados = mysqli_query($conn,$query);
				$linha = mysqli_fetch_assoc($dados);
				$total = mysqli_num_rows($dados);

				if ($total > 0) {
					do {
			 ?>
			 <table class="table table-hover">
				<thead>
				    <tr>
				      <th scope="col">Nº Ordem</th>
				      <th scope="col">Solicitante</th>
				      <th scope="col">Data Pedido</th>
				      <th scope="col">Status</th>
				      <th scope="col">Ações</th>
				    </tr>
 		 		</thead>
 		 		<tbody>
			 	<tr>
			      <th scope="row"><?=$linha['IdOrder']?></th>
			      <td><?=$linha['IdUser']?></td>
			      <td><?=$linha['DateOrder']?></td>
			      <td><?=$linha['Status']?></td>
			      <td><a href="" class="btn btn-success">Finalizar</a></td>
			    </tr>
			       </tbody>
			</table>
			 <?php 
			    }while ( $linha = mysqli_fetch_assoc($dados)); 
			    	
			    } else {
			    	echo "<div class='alert alert-warning' role='alert' style='margin-top: 50px;'>
				Você não possui ordens em andamento 
				</div>";
			    }
			    ?>
		</div>
	</div>
</body>