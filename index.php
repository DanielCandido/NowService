<?php 
include_once'header.php'?>
<body>
<header>
	<div class="menu">
	<label>
	<?php

 	 //$login_cookie = $_COOKIE['Email'];
    if(!isset ($_SESSION['usuario']) == false){
    	$login_cookie = $_SESSION['usuario'];

      echo"<h5 class='bemvindo'>Bem-Vindo $login_cookie</h5>";
      echo "<a href='' class='logout'>Meus Pedidos</a>";	
      echo"
      <a href='logout.php' class='logout'>Logout</a>
      ";
    
    }else{

      echo"<h5 class='bemvindo'>Bem-Vindo, convidado </h5>";
      echo"<label><a class='logout' href='cadastrar.php' style='text-decoration:none'>Login</a><label>";
    }
	?>
	</label>
	</div>
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
		<div class="row">
			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src='<?=$linha['improfile']?>' alt="Imagem Perfil">
			  <div class="card-body">
			    <h5 class="card-title"><?=$linha['FantasyName']?></h5>
			    <p class="card-text"><?=$linha['Cpf']?></p>
			    <p class="card-text"><?=$linha['category']?></p>
			    <a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-primary">Ver Detalhes</a>
			  </div>
			</div>
		</div>	
			<!-- Button trigger modal -->
			<br>
			<br>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
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