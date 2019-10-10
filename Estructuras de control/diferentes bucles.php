<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image" href="D:\2º ASIR A\IAW - Ruth Galera\Clase\Icono\ico.png" />
    <title> Estructuras de control </title>
</head>
<body style="background-color:#d8ffd5">
    <h1 style="color:#2e9616;text-align:center"> EXERCISE: While & DoWhile </h1>
    <h1 style="color:#FF6C00;text-align:center"> By Jorge Ortega 2019/20 </h1>
    <?php

        echo "<h2 style='color:blue;text-align:center'> while & Do_While </h2>";

        // Ejercicio 1: Bucle While de 0 a 100 //
        echo "<h3 style='color:red; text-align:center'> Bucle While From 0 to 100 </h3>";

        $contador = 0;
        while ($contador <= 100){
            echo "$contador";
            if($contador != 100){
                echo ",";
            }
            $contador++;
        }
        echo "<br/>";

        // Ejercicio 2: Bucle Do_While de 100 a 0, mostrar SOLO PARES (0 incluido) //      
        echo "<h3 style='color:red; text-align:center'> Bucle Do-While From 100 to 0 ONLY pair numbers </h3>";

        $contador_inv = 100;
        do{
            if($contador_inv % 2 == 0){
                echo "$contador_inv";
                if($contador_inv != 0){
                    echo ",";
                }
            }

            $contador_inv--;
        }while($contador_inv >= 0);

        echo "<br/>";

        // Ejercicio 3: Bucle While de 11 a 0, mostrar SOLO IMPARES //
        echo "<h3 style='color:red; text-align:center'> Bucle Do-While From 11 to 0 ONLY odd numbers </h3>";

        $contador_once = 11;
        while($contador_once > 0){
            if($contador_once % 2 != 0){
                echo "$contador_once";
                if($contador_once != 1){
                    echo ",";
                }
            }
            $contador_once--;
        }

        // Ejercicio 4: Bucle FOR de 100 a 1, mostrar SOLO PARES //
        echo "<h3 style='color:red; text-align:center'> Bucle For From 100 to 1 ONLY pair numbers </h3>";
        

        for($contador_for = 100; $contador_for > 0; $contador_for--){
            if($contador_for % 2 == 0){
                echo "$contador_for";
                if($contador_for !== 2){
                    echo ",";
                }
            }
        }

        // Ejercicio 5: DOBLE bucle FOR de 

    ?>
</body>
</html>