
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
	<title> Insertar Ciudad </title>
	<meta charset="UTF-8" />
	<!-- Ruta absoluta, icono dinámico -->
	<link rel="stylesheet" href="estilos.css" />
</head>


<body>
	<br><br><br><br>
	<h1> Inserta Ciudad </h1><br />
    <br />

    <div>
	<form action="TurismoVerCiudad.php" method="post">
		<input class="arriba" type='checkbox' name="aniadeciudad" value="Granada"> Granada <br /><br />
		<input type='checkbox' name="aniadeciudad" value="Almeria"> Almeria <br /><br />
		<input type='checkbox' name="aniadeciudad" value="Sevilla"> Sevilla <br /><br />
		<input type='checkbox' name="aniadeciudad" value="Cordoba"> Cordoba <br /><br />
		<input type='checkbox' name="aniadeciudad" value="Huelva"> Huelva <br /><br />
		<input type='checkbox' name="aniadeciudad" value="Malaga"> Malaga <br /><br />
		<input type='checkbox' name="aniadeciudad" value="Cadiz"> Cadiz <br /><br />
		<input class="botones" type='submit' />
		<a href="TurismoPaginaPrincipal.html">Volver al Inicio </a>
	</form>
	</div>
</body>



<?php

?>
