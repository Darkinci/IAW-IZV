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
                color:black
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
        $longitud = mt_rand(3,9);
        }while($longitud % 2 == 0);

        //Creamos el array con longitud aleatoria entre 3 - 99
        for($i=0; $i < $longitud; $i++){
            $array_A[$i] = mt_rand(0,9);
        }

        $posicion_media = ($longitud / 2);

        //mi error es que cuando intento sacar la posicion media (dividir entre 2), hay veces que me da error
        settype ($posicion_media, "int");
        $valor_medio = $array_A[$posicion_media];

        //Información del ejercicio paso a paso
        echo "<h4> 1º paso, creamos un vector con valores aleatorios </h4>";

        //Sacamos el array por pantalla para verlo!
        echo "<table><caption>Longitud: $longitud</caption><tr>";
        for($i=0; $i < $longitud;$i++){
            if($i == $posicion_media){
                //Sacamos el valor medio de nuestro vector
                echo "<td style='background-color:green;color:black'>$array_A[$i]</td>";
            }else if (($i % 2) == 0){
                        echo "<td style='background-color:blue'>$array_A[$i] </td>";
                    }else echo "<td style='background-color:red'> $array_A[$i] </td>";
        }
        echo "</tr></table>";

        //Creacion del vector B
        for($i=0; $i < $longitud; $i++){
            if($i == $posicion_media){
                $array_B[$i] = $valor_medio;
            }else {
                $array_B[$i] = "*";
                }
        }

        //Lineas vacias
        echo "<br/><br/><br/>";

        //Informacion del ejercicio paso a paso
        echo "<h4> 2º paso, creamos un nuevo vector donde volcaremos los nuevos valores </h4>";
        //Sacamos el vector B por pantalla para verlo
        echo "<table><tr>";
        for($i=0; $i < $longitud;$i++){
            if($i == $posicion_media){
                //Sacamos el valor medio de nuestro vector
                echo "<td style='background-color:green;color:black'>$array_B[$i]</td>";
            }else echo "<td> $array_B[$i]</td>";
        }
        echo "</tr></table>";

        //Lineas vacias
        echo "<br/><br/><br/>";

        //Informacion del ejercicio paso a paso
        //Vamos ordenando los valores para que quede a nuestro gusto </h4>";
        
        //Estos seran nuestros "Punteros" especiales, que nos diran por donde vamos en los arrays medios
        $pos_act_izq = 0;
                                    //AVISO ERROR!!
        $cont_izq = $longitud % 2;

                                    //AVISO ERROR!!
        $cont_dch = $longitud % 2;

        $pos_act_dch = $posicion_media + 1;

        //Creamos el bucle de asignacion de valores
        for($i=0;$i<$longitud;$i++){
            if($i !== $posicion_media){
                // si el indice actual de B y el indice especial son diferentes, entonces entraremos
                if(($array_A[$i] < $valor_medio) AND ($cont_izq > 0)){
                    $array_B[$pos_act_izq] = $array_A[$i];
                    $pos_act_izq++;
                    $cont_izq--;
                }
                if (($array_A[$i] >= $valor_medio) AND ($cont_dch > 0)){
                    $array_B[$pos_act_dch] = $array_A[$i];
                    $pos_act_dch++;
                    $cont_dch--;
                }
            }
        }

        //Informacion del ejercicio paso a paso
        echo "<h4> 3º paso, por arte de magia, ya todo funciona! :) </h4>";

        //Sacamos por pantalla nuestro nuevo vector ya ordenado 
        echo "<table><tr>";
        for($i=0; $i < $longitud;$i++){
            if($i == $posicion_media){
                //Sacamos el valor medio de nuestro vector
                echo "<td style='background-color:green;color:black'>$array_B[$i]</td>";
            }else echo "<td> $array_B[$i]</td>";
        }
        echo "</tr></table>";

        echo "</div>";
    ?>
</body>
</html>
