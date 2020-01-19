<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
	<title> EXAMEN B</title>
	<meta charset="UTF-8" />
	<!-- Ruta absoluta, icono dinámico -->
	<link rel="stylesheet" href="estilos.css" />
</head>


<body>
	<br><br><br><br>
	<h1> EXAMEN 1ª Evaluación. PELICULAS FAMOSAS</h1><br />
	<br />

<?php	

	/*Brad Pitt --> Seven					Will Smith --> Men in black
	Tom Cruise --> Misión imposible			Julia Roberts --> Pretty woman
	Angelina Jolie --> Tomb Raider			George Clooney --> Tres reyes
	Jennifer Aniston --> Exposados			Bruce Willis --> El sexto sentido
	Scarlett Johansson --> Match Point		Nicole Kidman --> The others*/

	session_start();

	$_SESSION["actor_elegido"] = $_POST["actor"];
	$nombre_actor = $_SESSION["actor_elegido"];	
	echo "<hr/><h2> Elige una pelicula de $nombre_actor </h2><hr/>";
?>
	<div>
	<form action="controlador_pelis.php" method="post">
		<input class="arriba" type='radio' name="pelicula" value="Misión Imposible"> Misión Imposible <br /><br />
		<input type='radio' name="pelicula" value="The others"> The others <br /><br />
		<input type='radio' name="pelicula" value="Seven"> Seven <br /><br />
		<input type='radio' name="pelicula" value="Men in black"> Men in black <br /><br />
		<input type='radio' name="pelicula" value="Tres Reyes"> Tres Reyes <br /><br />
		<input type='radio' name="pelicula" value="Match Point"> Match Point <br /><br />
		<input type='radio' name="pelicula" value="Tomb Raider"> Tomb Raider <br /><br />
		<input type='radio' name="pelicula" value="Misión Imposible"> Misión Imposible <br /><br />
		<input type='radio' name="pelicula" value="Seven"> Seven <br /><br />
		<input type='radio' name="pelicula" value="Pretty woman"> Pretty woman <br /><br />
		<input type='radio' name="pelicula" value="El sexto sentido"> El sexto sentido <br /><br />
		<input class="botones" type='submit' />
		<input class="botones" type='reset' />
	</form>
	</div>



</body>

</html> 
