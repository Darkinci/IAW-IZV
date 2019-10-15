<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image" href="D:\2º ASIR A\IAW - Ruth Galera\Clase\Icono\ico.png" />
    <title> Bucles For Anidados </title>
</head>
<body style="background-color:#d8ffd5">
    <h1 style="color:#2e9616;text-align:center"> EXERCISE: Doubles For </h1>
    <h1 style="color:#FF6C00;text-align:center"> By Jorge Ortega 2019/20 </h1>
    <?php

        echo "<h2 style='color:blue;text-align:center'> Class Exercises </h2>";

        /* Ejercicio 1: Sacar por pantalla los siguientes numeros
                            2,3;2,2;2,1 
                            1,3;1,2;1,1
                            0,3;0,2;0,1

        */
        echo "<h3 style='color:red; text-align:center'> Exercise 1 </h3>";

        for($i = 2; $i >= 0; $i--){
            echo "[ ";
            for($j = 3; $j > 0; $j--){
                echo "$i,$j";
                if($j != 1){
                    echo "---";
                }
            }
            echo " ] <br/>";
        }

        /* Ejercicio 2: Sacar por pantalla los siguientes numeros
                                2,0;2,1;2,2;2,3
                                1,0;1,1;1,2;1,3
                                0,0;0,1;0,2;0,3
        */      
        echo "<h3 style='color:red; text-align:center'> Exercise 2 </h3>";

        for($i = 2; $i >= 0; $i--){
            echo "[ ";
            for($j = 0; $j <= 3; $j++){
                echo "$i,$j";
                if($j != 3){
                    echo "---";
                }
            }
            echo " ] <br/>";
        }

        /* Ejercicio 3: Sacar por pantalla los siguientes numeros 
                                1,2,3,4,5
                                1,2,3,4
                                1,2,3
                                1,2
                                1
        */
        echo "<h3 style='color:red; text-align:center'> Exercise 3 </h3>";

        for($i = 5; $i >= 1; $i--){
            echo "[ ";
            for($j = 1; $j <= $i; $j++){
                echo "$j";
                if($j != $i){
                    echo ",";
                }
            }
            echo " ] <br/>";
        }

        // Lineas En blanco
        echo "<br/><br/><br/>";

        // Ejercicio 4: Mismo que ejercicio 3, pero hasta cualquier numero //
        
        for($i = 15; $i >= 1; $i--){
            echo "[ ";
            for($j = 1; $j <= $i; $j++){
                echo "$j";
                if($j != $i){
                    echo ",";
                }
            }
            echo " ] <br/>";
        }
        
    ?>
</body>
</html>