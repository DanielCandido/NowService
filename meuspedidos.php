<?php 
	include_once 'head.php'
 ?>
<body>
	 <?php include_once 'header.php' ?>
	 <?php 
	 	include_once ('conexao.php');
	 	$id = $_SESSION['id'];
	 	$query = "SELECT IdOrder, IdUser, IdProvider, DateOrder, Status WHERE IdUser = $id"
	  ?>
</body>
</html>