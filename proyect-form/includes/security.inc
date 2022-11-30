<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="public/images/logo-liceo.ico">
</head>
<body>
	
</body>
</html>
<?php

	if (isset($_SESSION['timeout'])) {
		define("TIEMPO_INACTIVIDAD", 5); 
		$tiempoSesion = time() - $_SESSION["timeout"];
		if ($tiempoSesion > (TIEMPO_INACTIVIDAD * 60)) {
			session_destroy();
			header("Location:index.php");
		} else {
			$_SESSION["timeout"] = time();
		}
	} else {
		header("Location:index.php");
	}

	if(!isset($_SESSION['tid'])) {
		$_SESSION['error'] = "You must log in";
		echo "<script> 
					window.location.replace('".$base_url."/index.php')
			  </script>";
	} 