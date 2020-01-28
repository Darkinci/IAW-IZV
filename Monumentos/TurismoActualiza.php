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


<body class="act">
	<h1> Actualizar Ciudad</h1><br />
    <br />
    <div class="actualizar">
	<?php
		if(comprueba_bd($mibd)){
			echo "<h4 class='error'> La Base de Datos está vacía, inserte datos antes de borrarlos</h4>";
			echo "<a class='error' href='TurismoPaginaPrincipal.html'>Volver al Inicio </a><br/><br/>";
		}else{
			echo "<form action='TurismoVerCiudad.php' method='post'>
					<br/>";
			dame_act_ciudades($mibd);
			echo "Nuevo nombre: <input type='text' name='nuevonombre' placeholder='Granada' required/>
					<br/><br/>
					<input class='botones' type='submit' />
					<a href='TurismoPaginaPrincipal.html'>Volver al Inicio </a>
					<br/><br/>
					</form>";
		}
	?>
	</div>
	

	<?php
		session_start();
		if(isset($_SESSION["error"])){
			echo "<h4 class='error'> Has introducido un nombre duplicado</h4>";
		}
        session_destroy();
		unset($_SESSION);
	?>
</body>