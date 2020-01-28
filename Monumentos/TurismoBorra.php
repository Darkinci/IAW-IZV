<?php
	require_once("TurismoDatosConexion.php");
	require_once("TurismoManejaBD.php");
	require_once("TurismoLibreria.php");

	conecta_bd($mibd,$serv,$base,$usuario,$key);	
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
	<title> Borrar Ciudad </title>
	<meta charset="UTF-8" />
	<!-- Ruta absoluta, icono dinámico -->
	<link rel="stylesheet" href="estilos.css" />
</head>

	

<body class="borrar">
	<h1> Borrar Ciudad </h1><br />
	<br />
    <div class="borrar">

	<?php
		if(comprueba_bd($mibd)){
			echo "<h4 class='error'> La Base de Datos está vacía, inserte datos antes de borrarlos</h4>";
			echo "<a class='error' href='TurismoPaginaPrincipal.html'>Volver al Inicio </a><br/><br/>";
		}else {
			echo "<form action='TurismoVerCiudad.php' method='post'>
					<br/>";
			dame_borra_ciudades($mibd);
			echo "<input class='botones' type='submit' />
			<a href='TurismoPaginaPrincipal.html'>Volver al Inicio </a>
			<br/><br/>	
			</form>";		
		}
	?>
</body>