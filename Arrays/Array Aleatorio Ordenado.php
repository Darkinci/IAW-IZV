<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image" href="D:\2º ASIR A\IAW - Ruth Galera\Clase\Icono\ico.png" />
    <title> Random Ordered Array! </title>
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
    <h1 style="color:#2e9616;text-align:center"> EXERCISE: Mandatory Random Array Exercise </h1>
    <h1 style="color:#FF6C00;text-align:center"> By Jorge Ortega 2019/20 </h1>
    <?php
        echo "<div>";
        echo "<h3>Exercise 1: Sort the RANDOM array from LOWEST TO HIGHEST! </h3>";
 
        //Creación de la longitud del array! (Tiene que ser un numero IMPAR)
        do{
            $longitud = mt_rand(3,27);
        }while($longitud % 2 == 0);

        //Creamos el array A con valores aleatorios entre 0 y 20
        for($i=0; $i < $longitud; $i++){
            $array_A[$i] = mt_rand(0,20);
        }

        //guardamos la posicion media del array creado ya que nos será de utilidad en el futuro
        $posicion_media = $longitud / 2;
        //Convertimos posicion_media en int, ya que puede ser que tenga decimales, y no nos interesa eso
        settype($posicion_media,"int");

        //Guardamos el valor que haya en la posicion_media, ya que sera nuestro VALOR ESPECIAL
        $valor_medio = $array_A[$posicion_media];

        
        // ---------------- SACAMOS EL ARRAY A POR PANTALLA ------------------
        echo "<table><caption>Longitud: $longitud</caption><tr>";
        for($i=0; $i < $longitud;$i++){
            if($i == $posicion_media){
                //Sacamos el valor medio de nuestro vector de forma diferente para que sea mas visibile
                echo "<td style='background-color:green;color:black'>$array_A[$i]</td>";
            }else if (($i % 2) == 0){
                        echo "<td>$array_A[$i] </td>";
                    }else echo "<td> $array_A[$i] </td>";
        }
        echo "</tr></table>";

        //Creamos el vector B, al inicio solo estará compuesto por Valor_medio y "*"
        for($i=0; $i < $longitud; $i++){
            if($i == $posicion_media){
                $array_B[$i] = $valor_medio;
            }else {
                $array_B[$i] = "*";
                }
        }

        //------------------ LINEAS VACIAS ------------------------
        echo "<br/><br/><br/>";

        // ---------------- SACAMOS EL ARRAY A POR PANTALLA ------------------
        echo "<table><tr>";
        for($i=0; $i < $longitud;$i++){
            if($i == $posicion_media){
                //Sacamos el valor medio de nuestro vector
                echo "<td style='background-color:green;color:black'>$array_B[$i]</td>";
            }else echo "<td> $array_B[$i]</td>";
        }
        echo "</tr></table>";


        // ----------------------- PARTE IMPORTANTE DEL EJERCICIO -------------

        /* Vamos a "partir" el vector A en 3
            1. Array Izq Minimizado
            2. Valor Central de Comprobacion
            3. Array Dch Minimizado
        */

        //Esto es como un "puntero" muy light para saber por donde vamos.
        $pos_act_izq = 0; 
        $pos_act_dch=$posicion_media+1;

        //Contadores decrecientes para saber cuantos huecos libres me quedan en los arrays minimizados
        $cont_izq = ($longitud -1)/2; //La longitud sera la mitad del total, menos 1 (el comprobador)
        $cont_dch = ($longitud -1)/2;

        //Creamos el bucle de asignación de valores
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

        //------------------ LINEAS VACIAS ------------------------
        echo "<br/><br/><br/>";

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