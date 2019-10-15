<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="unicode">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Nested Loops </title>
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
    <h1 style="color:#2e9616;text-align:center"> Special Exercises ~ Hardcore mode! </h1>
    <h1 style="color:#FF6C00;text-align:center"> By Jorge Ortega 2019/20 </h1>
    

    <?php
        echo "<h2 style='color:red;text-align:center'> Phrase with a double Loop For </h2>";
        echo "<div>";
        //Ejercicio 3 y 4 Frase con Matriz

            $nombre = "Jorge Ortega";
            for($i= 0; $i <strlen($nombre);$i++){
                for($j=0; $j< strlen($nombre); $j++){
                    if($i == $j){
                        echo substr ($nombre,$i,1);
                    }else echo "*";
                }
                echo "<br/>";
            }
        echo "</div>";
        
        // LINEAS VACIAS
        echo "<br/><br/><br/>";

        echo "<h2 style='color:red;text-align:center'> Exercise Countdown and Phrase with WHILE </h2>";
        // Ejercicios 2 y 4 con bucles WHILE
        echo "<div>";
            //Ejercicio 2: Contador inverso hasta cualquier numero
            $i=15;
            
            while($i >= 1){
                $j= 1;
                while($j <= $i){
                    echo "$j";
                    if($j != $i){
                        echo ",";
                    }
                    $j++;
                }
                echo "<br/>";
                $i--;
            }

            // LINEAS VACIAS
                echo "<br/><br/><br/>";
            
            //Ejercicio 4: Palabra en matriz con WHILE

            $palabra ="Jorge Ortega";
            $f = 0;

            while ($f < strlen($palabra)){
                $c = 0;
                while ($c < strlen($palabra)){
                    if($f == $c){
                        echo substr($palabra,$f,1);
                    }
                    else echo "*";
                    $c++;
                }
                echo "<br/>";
                $f++;
            }

        echo "</div>";

        echo "<h2 style='color:red;text-align:center'> Exercise Countdown and Phrase with WHILE </h2>";

        echo "<div>";
            //Ejercicio 6: Alfabeto en una tabla;
            $contador = 33;
            echo "<table>\n"; 
            for($i=1; $i <= 9; $i++){
                    echo "<tr>\n";
                for($j=1; $j <=10; $j++){
                    echo "<td>" .  chr($contador) .  "</td>";
                    $contador++;
                }
                    echo "\n</tr>\n"; // AL añadir un \n cuando vemos el codigo fuente de la pagina, se vea mas bonito!
            }
            echo "</table>";



        echo "</div>";

    ?>
    
</body>
</html>