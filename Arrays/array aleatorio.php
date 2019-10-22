<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image" href="D:\2º ASIR A\IAW - Ruth Galera\Clase\Icono\ico.png" />
    <title> Arrays Exercises! </title>
    <style>
            table,tr,td {
                margin: 0 auto;
                border-collapse: collapse;
                border: 2px solid orange;
                padding: 10px;
            }
            div{
                text-align: center;
                font-size: 20px;
                color: blue;
            }
            h3{
                color: red;
            }
            caption{
                color:black;
            }
    </style>
</head>
<body style="background-color:#d8ffd5">
    <h1 style="color:#2e9616;text-align:center"> EXERCISE: Mandatory Array Exercise </h1>
    <h1 style="color:#FF6C00;text-align:center"> By Jorge Ortega 2019/20 </h1>
    <?php
        echo "<div>";
        echo "<h3>Exercise 1: Sort the RANDOM array from LOWEST TO HIGHEST! </h3>";

        //Creación del array!
        do{
            $longitud = mt_rand(3,25);
        }while($longitud % 2 == 0);

        //Creamos el array con longitud aleatoria entre 3 - 99
        for($i = 0; $i < $longitud; $i++){
            $array_A[$i] = mt_rand(0,200);
        }

        //Sacamos el array por pantalla para verlo!
        echo "<table><caption>Longitud: $longitud</caption><tr>";
        for($i=0; $i < $longitud;$i++){
            echo "<td>$array_A[$i] </td>";
        }
        echo "</tr></table>";

        //

        echo "</div>";
    ?>
</body>
</html>
