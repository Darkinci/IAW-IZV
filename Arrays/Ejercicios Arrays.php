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
    </style>
</head>
<body style="background-color:#d8ffd5">
    <h1 style="color:#2e9616;text-align:center"> EXERCISE: Tons of Exercises! </h1>
    <h1 style="color:#FF6C00;text-align:center"> By Jorge Ortega 2019/20 </h1>
    <?php
        echo "<div>";
        echo "<h3>Exercise 1: Find the highest number in a array of numbers! </h3>";

            //Variables
            $arrayUno = array(7,5,2,4,8,6,9,0,1,3);
            $longitudUno = count($arrayUno); //Añado la longitud por si alguna vez tengo que aumentar o disminuir su tamaño.
            $maximo = 0; //Lo inicializamos a 0 para evitar que le de otro valor basura (no se si PhP lo hace, pero por asegurarme).
            
            //Sacamos por pantalla el array
            echo "<table><tr>";
            for($i=0; $i < $longitudUno;$i++){
                echo "<td>$arrayUno[$i] </td>";
            }
            echo "</tr></table>";

            //Lineas vacias
            echo "<br/>";

            //Calculamos el mayor
            for($i=0;$i<$longitudUno;$i++){
                if($maximo < $arrayUno[$i]){
                    $maximo = $arrayUno[$i];
                }
            }

            //Sacamos por pantalla el valor maximo
            echo "El numero maximo en el array de longitud $longitudUno es $maximo";

            //Lineas vacias
            echo "<br/><br/>";

        echo "<h3>Exercise 2: Find the lowest number in a array of numbers! </h3>";

            //Variables
            $arrayDos = array(7,5,2,4,8,6,9,0,1,3);
            $longitudDos = count($arrayDos); //Añado la longitud por si alguna vez tengo que aumentar o disminuir su tamaño.
            $minimo = 9; //Lo inicializamos a 0 para evitar que le de otro valor basura (no se si PhP lo hace, pero por asegurarme).

            //Sacamos por pantalla el array
            echo "<table><tr>";
            for($i=0; $i < $longitudDos;$i++){
                echo "<td>$arrayDos[$i] </td>";
            }
            echo "</tr></table>";

            //Lineas vacias
            echo "<br/>";

            //Calculamos el mayor
            for($i=0;$i<$longitudDos;$i++){
                if($minimo > $arrayDos[$i]){
                    $minimo = $arrayDos[$i];
                }
            }

            //Sacamos por pantalla el valor maximo
            echo "El numero maximo en el array de longitud $longitudUno es $minimo";

            //Lineas vacias
            echo "<br/><br/>";


        echo "<h3>Exercise 3: Put numbers in the correct up order! </h3>"; 

            //Variables
            $array_A = array(7,5,2,4,8,6,9,0,1,3);
            $longitudTres = count($array_A); //Añado la longitud por si alguna vez tengo que aumentar o disminuir su tamaño.
            $posicionMax = -100;

            //Creacion de un array de longitud "LongitudTres"
            for($i=0; $i < $longitudTres; $i++){
                $array_B[$i]=0;
            }


            //Ordenacion del Vector de Mayor a Menor
            for($i=0; $i < $longitudTres; $i++){
                $var_max = -100;
                for($j=0;$j < $longitudTres;$j++){
                    if($array_A[$j] > $var_max){
                        $var_max = $array_A[$j];
                        $posicionMax = $j;
                    }
                }
                $array_A[$posicionMax] = -100;
                $array_B[$i] = $var_max;
            }

            //Sacamos el vector B ordenado por Pantalla
            echo "<table><caption> Array B por pantalla de mayor a menor</caption><tr>";
            for($i=0; $i < $longitudTres;$i++){
                echo "<td>$array_B[$i] </td>";
            }
            echo "</tr></table>";

            //Lineas vacias
            echo "<br/><br/>";


        echo "<h3>Exercise 4: Put numbers in the correct down order! </h3>"; 
        

            //Variables
            $array_C = array(7,5,2,4,8,6,9,0,1,3);
            $longitudCuatro = count($array_C); //Añado la longitud por si alguna vez tengo que aumentar o disminuir su tamaño.
            $posicionMin = 999;

            //Creacion de un array de longitud "LongitudTres"
            for($i=0; $i < $longitudCuatro; $i++){
                $array_D[$i]=0;
            }

            for($i=0; $i < $longitudCuatro; $i++){
                $var_min = 999;
                for($j=0;$j < $longitudCuatro;$j++){
                    if($array_C[$j] < $var_min){
                        $var_min = $array_C[$j];
                        $posicionMin = $j;
                    }
                }
                $array_C[$posicionMin] = 999;
                $array_D[$i] = $var_min;
            }

            //Sacamos el vector D ordenado por Pantalla
            echo "<table><caption> Array D por pantalla de Menor a Mayor</caption><tr>";
            for($i=0; $i < $longitudCuatro;$i++){
                echo "<td>$array_D[$i] </td>";
            }
            echo "</tr></table>";

            //Lineas vacias
            echo "<br/><br/>";

        echo "</div>";
    ?>
</body>
</html>