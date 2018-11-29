<?php 
  include_once("conexao.php");
  session_start();
  $email = $_POST['Email'];
  $entrar = $_POST['entrar'];
  $password = md5($_POST['Password']);
  
    if (isset($entrar)) {
      $query = "SELECT Name, Email, Cpf, FantasyName  FROM provider WHERE Email = '$email' AND Password = '$password'";
      $verifica = mysqli_query($conn,$query);
        if (mysqli_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='cadastrar-prestador.php';</script>";
          die();
        }else{
          $row = mysqli_fetch_assoc($verifica);
         	 //setcookie("Email",$name);
        	$_SESSION['prestador'] = $email;
          $_SESSION['p-logado'] = $row['Name'];
          $_SESSION['p-id'] = $row['Cpf'];
        	//$usuario = $_SESSION['usuario'];
        	//echo "<script language='javascript' type='text/javascript'>alert('Login Efetuado $usuario');
        	//window.location.href='index.php';</script>";
      		header("Location:minhasordens.php");
        }
    }
?>