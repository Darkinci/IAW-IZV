
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
	<title> EXAMEN B - Jorge Ortega </title>
	<meta charset="UTF-8" />
	<!-- Ruta absoluta, icono dinámico -->
		<link rel="shortcut icon" type="image/x-icon" href="../iconos/tucan.png" />
	<style type="text/css">
		.titulos {background-color: #9F43F5; color:white}
		p, h3, li {margin-left: 40%}
		h4 {margin:5%}
		
	</style>

</head>


<body style="background-color: #FFE4B5">
	<br><br><br><br>
	<h1 style="text-align: center"> EXAMEN 1ER TRIMESTRE B. CURSO 19-20</h1>
	<h1 style="text-align: center;color:red"> HECHO POR JORGE ORTEGA NIETO</h1><br /><br />
	<?php		

	require_once("Provisiones.php");
	// Creación de la función crea_provisiones PREGUNTA 1 -------------------------
	$array= array();
	$numero= mt_rand(1,8);

	crea_provisiones($array, $numero);


	// Creación de la función imprime_prov PREGUNTA 2  -------------------------
	$nombre= "Ayuntamiento Nivel 11";
	imprime_prov($array,$nombre);

	// Creación de la función crea_ciudad PREGUNTA 3  -------------------------

	$ciudad=crea_ciudad();

	// Impresion pregunta4
	echo "<hr />\n <h2 class=\"titulos\"><center>IMPRESIÓN ciudad melsia</center></h2>\n <hr />";

	foreach($ciudad as $edificio => $valor1){
		Echo "<p>El $edificio tiene</p>";	
		foreach ($valor1 as $cantidad => $alimento){
			echo "<li> $alimento de $cantidad </li>";
		}
	}



	?>

</body>

</html> 
