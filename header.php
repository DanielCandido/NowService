<header>
  <div class="menu">
  <label>
  <?php

   //$login_cookie = $_COOKIE['Email'];
    if(!isset ($_SESSION['logado']) == false){
      $login_cookie = $_SESSION['logado'];

      echo"<h5 class='bemvindo'>Bem-Vindo $login_cookie</h5>";
      echo "
      <label><a href='logout.php' class='logout btn btn-primary' >Logout</a></label>
      <label><a href='meuspedidos.php' class='logout btn btn-primary' style='border-radius: 0px;'>Meus Pedidos</a> </label> 
      <label><a href='meuspedidos.php' class='logout btn btn-primary'>Editar Perfil</a> </label> 
      ";
    
    }else{

      echo"<h5 class='bemvindo'>Bem-Vindo, convidado </h5>";
      echo"<label><a class='logout btn btn-primary' href='cadastrar.php' style='text-decoration:none'>Login</a><label>";
    }
  ?>
  </label>
  </div>
  <div class="menup">
  <ul class="nav nav-pills nav-fill" style="background-color: black; border-radius: 5px;">
    <li class="nav-item">
    <a class="nav-link active" href="/">Inicio</a>
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