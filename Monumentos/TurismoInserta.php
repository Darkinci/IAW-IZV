
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
	<title> Insertar Ciudad </title>
	<meta charset="UTF-8" />
	<!-- Ruta absoluta, icono dinámico -->
	<link rel="stylesheet" href="estilos.css" />
</head>


<body class="insertar">
	<h1> Inserta Ciudad </h1><br />
    <div class="turismo_inserta">
	<form action="TurismoVerCiudad.php" method="post" enctype="multipart/form-data">
		<br/>
		Nombre Ciudad: <input type="text" name="nomciu" placeholder="Granada" required/><br/><br/>
		Habitantes: <input type="number" name="habitantes" placeholder="10000"/><br/><br/>
		Nombre Pais: <input type="text" name="pais" placeholder="España"/><br/><br/>
		Monumentos: <input type="text" name="monumentos" placeholder="Alhambra"/><br/><br/>
    	Imagen: <input type="file" value="Elegir Imagen"/><br/><br/>
		<input class="botones" type='submit' />
		<a href="TurismoPaginaPrincipal.html">Volver al Inicio </a>
		<br/><br/>
	</form>
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
