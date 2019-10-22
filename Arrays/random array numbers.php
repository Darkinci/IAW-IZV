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
    <h1 style="color:#2e9616;text-align:center"> EXERCISE: Array and Sort! </h1>
    <h1 style="color:#FF6C00;text-align:center"> By Jorge Ortega 2019/20 </h1>
    <?php
        echo "<div>";
        echo "<h3>Exercise 1: Sort the RANDOM array from LOWEST TO HIGHEST! </h3>";

        //Creacion de un array de longitud 10
        for($i=0; $i < 10; $i++){
            $array_A[$i]=mt_rand(3,60);
        }


        //Sacamos el vector A ordenado por Pantalla
        echo "<table><caption> RANDOM ARRAY!</caption><tr>";
        for($i=0; $i < 10;$i++){
            echo "<td>$array_A[$i] </td>";
        }
        echo "</tr></table>";

        //Lineas vacias
        echo "<br/><br/>";

        //Creacion del bucle B donde se va a ordenar
        for($i=0;$i<10;$i++){
            $array_B[$i]=0;
        }

        //Creacion de variable que va a guardar la posicion que me interesa
        $posicionMax = 999;

        //Ordenacion del Vector de Mayor a Menor
        for($i=0; $i < 10; $i++){
            $var_max = 999;
            for($j=0;$j < 10;$j++){
                if($array_A[$j] < $var_max){
                    $var_max = $array_A[$j];
                    $posicionMax = $j;
                }
            }
            $array_A[$posicionMax] = 999;
            $array_B[$i] = $var_max;
        }


        //Sacamos el vector B ordenado por Pantalla
        echo "<table><caption> Array B SORTED from low to high</caption><tr>";
        for($i=0; $i < 10;$i++){
            echo "<td>$array_B[$i] </td>";
        }
        echo "</tr></table>";

            