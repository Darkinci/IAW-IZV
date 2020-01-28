<?php
	require_once("TurismoDatosConexion.php");
	require_once("TurismoManejaBD.php");
	require_once("TurismoLibreria.php");

	conecta_bd($mibd,$serv,$base,$usuario,$key);	
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
	<title> Actualiza Ciudad </title>
	<meta charset="UTF-8" />
	<!-- Ruta absoluta, icono dinámico -->
	<link rel="stylesheet" href="estilos.css" />
</head>


<body>
	<br><br><br><br>
	<h1> Actualiza Ciudad</h1><br />
    <br />

    <div>
	<form action="TurismoVerCiudad.php" method="post">
		<?php dame_ciudades($mibd); ?>
		<a href="TurismoPaginaPrincipal.html">Volver al Inicio </a>
	</form>
	</div>
</body>