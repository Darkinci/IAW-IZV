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


<body class="fallo">

<h1 class="fallo"> ¡EHHH CUIDADIN......!</h1><hr />
<h2> Si no eliges ninguna película....HAS PERDIDO!!! </h2>
<br/>
<br/>
<br/>
<p class="final"><a href="EXA_1eval_pelis_2019_DAR.html">Volver a jugar </a></p>

<?php
	session_destroy();
	unset($_SESSION);
?>

</body>
</html>