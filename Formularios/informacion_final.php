<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image" href="D:\2º ASIR A\IAW - Ruth Galera\Clase\Icono\ico.png" />
    <title> Formulario Sesion 1 </title>
</head>
<body style="background-color:#d8ffd5">
    <h1 style="color:#2e9616;text-align:center"> Formularios Sesiones 1 </h1>
    <h1 style="color:#FF6C00;text-align:center"> By Jorge Ortega 2019/20 </h1>
    <?php
        
        $genero = $_POST["genero"];
        $nombre = $_SESSION["nombre"];
        $apellido = $_SESSION["apellido"];
        $edad = $_SESSION['edad'];
        echo "<table border='1px' align='center' cellpadding='15'>";
        echo "<tr><th><h2>Bienvenido $nombre $apellido</h2></th></tr>";
        echo "<tr><td>";
        if($genero == "Hombre" and $edad <= 45){
            echo "<p style='text-align:center'>eres un $genero joven </p><br/><br/>";
            echo "<img src='Imagenes/hombrejoven.png' height='300' width='300'/>";
        }elseif($genero == "Hombre" and $edad > 45){
            echo "<p style='text-align:center'>eres un $genero viejo</p>";
            echo "<img src='Imagenes/mujerjoven.png' height='300' width='300'/>";
        }elseif($genero == "Mujer" and $edad <= 45){
            echo "<p style='text-align:center'>eres una $genero joven</p>";
            echo "<img src='Imagenes/hombreviejo.png' height='300' width='300'/>";
        }else{
            echo "<p style='text-align:center'>eres una $genero vieja</p>";
            echo "<img src='Imagenes/mujervieja.jpg' height='300' width='300'/>";
        }
        echo "<br/><br/>";
        echo "</td></tr>";
        echo "<form action='form_session.html'><input type='button' value='Volver al Inicio'/></form>";
        echo "</table>";

        // Cerramos la sesion //
        session_destroy();
        unset($_SESSION);
    ?>
</body>
</html>