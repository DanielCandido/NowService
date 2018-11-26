<?php 
  include_once("conexao.php");
  session_start();
  $email = $_POST['Email'];
  $entrar = $_POST['entrar'];
  $password = md5($_POST['password']);
  
    if (isset($entrar)) {
      $query = "SELECT * FROM users WHERE Email = '$email' AND password = '$password'";
      $verifica = mysqli_query($conn,$query);
        if (mysqli_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='cadastro.html';</script>";
          die();
        }else{
         	 //setcookie("Email",$name);
        	$_SESSION['usuario'] = $email;
        	//$usuario = $_SESSION['usuario'];
        	//echo "<script language='javascript' type='text/javascript'>alert('Login Efetuado $usuario');
        	//window.location.href='index.php';</script>";
      		header("Location:index.php");
        }
    }
?>