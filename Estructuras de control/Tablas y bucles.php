<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image" href="D:\2º ASIR A\IAW - Ruth Galera\Clase\Icono\ico.png" />
    <title> Nested Loops </title>
    <style>
            table,tr,td {
                margin: 0 auto;
                border-collapse: collapse;
                border: 2px solid red;
                padding: 10px;
            }
    </style>
</head>
<body style="background-color:#d8ffd5">
    <h1 style="color:#2e9616;text-align:center"> EXERCISE: Bidimensional arrays - Table arrangment </h1>
    <h1 style="color:#FF6C00;text-align:center"> By Jorge Ortega 2019/20 </h1>
    <?php

        // Ej 1: Creacion de una tabla 3x4 Fija

        echo "<table>\n"; 
        $h = 1;
        for($i=1; $i <= 3; $i++){
                echo "<tr>\n";
            for($j=1; $j <=4; $j++){
                    echo "<td> $h </td>";
                    $h++;
            }
                echo "\n</tr>\n"; // AL añadir un \n cuando vemos el codigo fuente de la pagina, se vea mas bonito!
        }
        echo "</table>";

        // ESPACIOS EN BLANCO 
        echo "<br/><br/><br/>";
        // Ej 2 : numero de fila y col
        echo "<table>\n"; 
        for($i=1; $i <= 3; $i++){
                echo "<tr>\n";
            for($j=1; $j <=4; $j++){
                    echo "<td> $i,$j </td>";
            }
                echo "\n</tr>\n"; // AL añadir un \n cuando vemos el codigo fuente de la pagina, se vea mas bonito!
        }
        echo "</table>";

        
        // ESPACIOS EN BLANCO 
        echo "<br/><br/><br/>";
        // Ej 3: Sumar filas mas columna
        echo "<table>\n"; 
        for($i=1; $i <= 3; $i++){
                echo "<tr>\n";
            for($j=1; $j <=4; $j++){
                $res = $i + $j;
                echo "<td> $res </td>";
            }
                echo "\n</tr>\n"; // AL añadir un \n cuando vemos el codigo fuente de la pagina, se vea mas bonito!
        }
        echo "</table>";
    ?>

</body>
</html>