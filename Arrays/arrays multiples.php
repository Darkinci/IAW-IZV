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
                color: white;
            }
            div{
                text-align: center;
                font-size: 20px;
                color: blue;
            }
            h3{
                color: red;
            }
            h2{
                color:magenta;
            }
    </style>
</head>
<body style="background-color:#d8ffd5">
    <h1 style="color:#2e9616;text-align:center"> EXERCISE: Funtions in Arrays </h1>
    <h1 style="color:#FF6C00;text-align:center"> By Jorge Ortega 2019/20 </h1>
    <?php
        echo "<div>";
            $array_A = array("A","B",array("R","B","C","D"),8);
            
            echo "<h2>1º Ejemplo de un array Multiple</h2>";

            echo "<h3>Array multiple con PRINT_R</h3>";
            //Sacamos por pantalla el array
            print_r($array_A);

            //Lineas vacias
            echo "<br/><br/>";

            echo "<h3>Array multiple con FOREACH (BUCLE INTERNO)</h3>";
            //Sacamos por pantalla el array con For each (bucle interno)!!!
            foreach($array_A[2] as $indice => $valor){
                echo "La $valor esta en la posicion $indice <br/> ";
            }

            //Lineas vacias
            echo "<br/><br/>";

            echo "<h3>Array multiple con FOREACH (DOBLE BUCLE)</h3>";
            //Ahora lo sacamos con el doble blucle
            foreach($array_A as $indUno => $valor){
                if(is_array($valor)){
                    foreach($valor as $indDos => $contenido){
                        echo "<br/> La $contenido esta en la posicion ($indUno ,$indDos) .";
                    }
                }else echo "<br/> La $valor esta en la posicion $indUno .";
            }


            /* Vamos a crear un array que se llama COLORES 
                En la posicion "calidos"
                    dentro de este, va a haber otro array que va a contener los siguientes INDICES
                        "red" - "orange" - "yellow"
                    Contendran los colores en hexadeciman
                        "FF0000" 
                En la posicion "frios"
                    dentro de este va a haber
                        "blue" - "green" - "purple"

            Ese es el primer paso, el segundo es mostrarlo por pantalla
            */

            //Lineas vacias
            echo "<br/><br/>";

            $colores = array("warm" => array("red" => "FF0000",
                                                "orange" => "FF9300",
                                                "yellow" => "FFF300")
                            ,
                            "cold" => array("blue" => "00F0FF",
                                            "green" => "00FF3E",
                                            "purple" => "9700FF")
                                        
            );

            
            echo "<h3>Text Arrays!</h3>";
            //Ahora lo sacamos por pantalla
            foreach($colores as $indUno => $valor){
                if(is_array($valor)){
                    foreach($valor as $indDos => $contenido){
                        echo "<br/> La $contenido esta en la posicion ($indUno ,$indDos) .";
                    }
                }else echo "<br/> La $valor esta en la posicion $indUno .";
            }   

            //Lineas vacias
            echo "<br/><br/>";

            echo "<h3>Colour Arrays!</h3>";
            //Ahora vamos a intentar crear una tabla poner los fondos de los tds de diferentes colores
            echo "<table>";
            foreach($colores as $indUno => $valor){
                    echo "<tr>";
                    foreach($valor as $indDos => $contenido){
                        echo "<td style='background-color:#$contenido'>This color is $indDos</td>";
                    }
                    echo "</tr>";
            }
            echo "</table>";



    ?>
</body>
</html>