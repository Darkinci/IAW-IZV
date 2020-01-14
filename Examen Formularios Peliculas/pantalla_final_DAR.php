<?php
	session_start();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
	<title> EXAMEN B </title>
	<meta charset="UTF-8" />
	<link rel="shortcut icon" type="image/x-icon" href="Zowi Skull.ico"  />
	<link rel="stylesheet" href="estilos.css" />
	
</head>


<body>

	<h1 id="final"> Pantalla final </h1>
	<?php

		$actor = $_SESSION["actor_elegido"];
		$peli = $_SESSION["peli_elegida"];
		require_once("Libreria.php"); 
		$elegido = $_SESSION["salida"];
		elegida ($elegido,$actor,$peli);
	?>

<?php
	session_destroy();
	unset($_SESSION);
?>

</body>
</html>