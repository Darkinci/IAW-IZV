<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image" href="D:\2º ASIR A\IAW - Ruth Galera\Clase\Icono\ico.png" />
    <title> First Arrays Exercises </title>
    <style>
            table,tr,td {
                margin: 0 auto;
                border-collapse: collapse;
                border: 2px solid red;
                padding: 10px;
            }
            div{
                text-align: center;
                font-size: 20px;
                color: blue;
            }
    </style>
</head>
<body style="background-color:#d8ffd5">
    <h1 style="color:#2e9616;text-align:center"> EXERCISE: First Array </h1>
    <h1 style="color:#FF6C00;text-align:center"> By Jorge Ortega 2019/20 </h1>
    <?php
        echo "<div>";
        echo "<h2 style='color:red;text-align:center'> Array de numeros de 1 a 100</h2>";
        //Array de numeros de 1 a 100
            for($i =0; $i <= 99; $i++){
                $numeros[$i]=$i+1;
            }
            //Sacar por pantalla esos numeros
            for($i=0; $i <= 99; $i++){
                echo $numeros[$i] . " ";
            }
            
            // Lineas En blanco
            echo "<br/><br/><br/>";

            var_dump($numeros);

            // Lineas En blanco
            echo "<br/><br/><br/>";

        echo "<h2 style='color:red;text-align:center'> Array de numeros de 1 a 100 PARES</h2>";
        //Array de numeros PARES de 1 a 99
            $contador_par = 0;
            for($i=0; $i <= 49; $i++){
                $numeros_pares[$i] = $contador_par;
                $contador_par = $contador_par + 2;
            }

            for($i=0; $i <= 49; $i++){
                echo $numeros_pares[$i] . " ";
            }

            // Lineas En blanco
            echo "<br/><br/><br/>";

            var_dump($numeros_pares);

            // Lineas En blanco
            echo "<br/><br/><br/>";
        echo "<h2 style='color:red;text-align:center'> Array de numeros de 1 a 100 IMPARES</h2>";
        //Array de numeros IMPARES de 1 a 99;
            $contador_impar=1;
            for($i=0; $i <= 49; $i++){
                $numeros_impares[$i] = $contador_impar;
                $contador_impar = $contador_impar + 2;
            }

            for($i=0; $i <= 49; $i++){
                echo $numeros_impares[$i] . " ";
            }

            // Lineas En blanco
            echo "<br/><br/><br/>";

            var_dump($numeros_impares);
        echo "</div>";
    ?>
</body>
</html>








