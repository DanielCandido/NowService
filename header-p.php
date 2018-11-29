<header>
  <div class="menu">
    <label>
  <?php
   //$login_cookie = $_COOKIE['Email'];
    if(!isset ($_SESSION['usuario']) == false){
      
      header("Location: index.php");
    
    } if (!isset($_SESSION['prestador']) == false){
      header("Locatin: minhasordens.php");
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
    <a class="nav-link" href="#">Sobre nós</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#">Categorias</a>
    </li>
    </li>
  </ul>
  </div>
</header>