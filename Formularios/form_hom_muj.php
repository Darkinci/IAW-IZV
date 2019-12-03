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
    <title> Formularios Sesion Parte 1 </title>
</head>
<body style="background-color:#d8ffd5">
    <h1 style="color:#2e9616;text-align:center"> Formularios Sesion Parte 1 </h1>
    <h1 style="color:#FF6C00;text-align:center"> By Jorge Ortega 2019/20 </h1>
    <?php
        

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        
        echo "<table border='1px' align='center' cellpadding='15'>";
        echo "<tr><th><h2>Bienvenido $nombre $apellido</h2></th></tr>";
        echo "<tr><td>";
        echo "<form action='informacion_final.php' method='post'>";
        echo "Gender:<br/><br/>
                    <input type='radio' name='genero' value='Hombre' /> <label>Hombre </label>
                    <input type='radio' name='genero' value='Mujer' /> <label>Mujer </label>
                    <br/><br/>";
        echo "<input type='submit' value='Enviar'/> <input type='reset' value='Reset'/>";
        echo "</form>";
        echo "</td></tr>";
        echo "</table>";  
        
        $_SESSION["edad"] = $_POST["edad"];
        $_SESSION["nombre"] = $nombre;
        $_SESSION["apellido"] = $apellido;
    ?>
</body>
</html>