<?php 
  include_once("conexao.php");
  session_start();
  $email = $_POST['Email'];
  $entrar = $_POST['entrar'];
  $password = md5($_POST['password']);
  
    if (isset($entrar)) {
      $query = "SELECT Name, Email, Cpf, DateOfBirth, Adress  FROM users WHERE Email = '$email' AND password = '$password'";
      $verifica = mysqli_query($conn,$query);
        if (mysqli_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='cadastrar.php';</script>";
          die();
        }else{
          $row = mysqli_fetch_assoc($verifica);
         	 //setcookie("Email",$name);
        	$_SESSION['usuario'] = $email;
          $_SESSION['logado'] = $row['Name'];
          $_SESSION['id'] = $row['Cpf']
        	//$usuario = $_SESSION['usuario'];
        	//echo "<script language='javascript' type='text/javascript'>alert('Login Efetuado $usuario');
        	//window.location.href='index.php';</script>";
      		header("Location:index.php");
        }
    }
?>