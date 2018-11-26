<?php 
	session_start();

	$_SESSION = array();	

	if (ini_get("session.use_cookie")) {
		$params = session_get_cookie_params();
		setcookie(session_name(),'',time() -4200,
		$params["params"], $params["domains"], $params["secure"],$params["httponly"]);
	}

	session_destroy();
	session_commit();
	header("location:cadastrar.php");
 ?>