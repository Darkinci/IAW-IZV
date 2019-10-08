<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image" href="D:\2º ASIR A\IAW - Ruth Galera\Clase\Icono\ico.png" />
    <title> Operador: Switch con Case </title>
</head>
<body style="background-color:#d8ffd5">
    <h1 style="color:#5cff51;text-align:center"> EXERCISE: SWITCH & CASE </h1>
    <h1 style="color:#FF6C00;text-align:center"> By Jorge Ortega 2019/20 </h1>
    <?php

        echo "<h2 style='color:blue;text-align:center'> Guess what fruit am I?</h2>";

        /* 
            Recordatorio:
                - Si la fruta es ROJA o VERDE --> Manzana;
                - Si la fruta es AMARILLA o BLANCA --> Pera;
                - Si la fruta es MORADA --> Mora;
                - Si la fruta es de otro color --> No es una fruta;
        */

        $color = "a";

        switch ($color){
            case "verde";
            case "v";
            case "r";
            case "rojo":
                echo "<h3 style='color:red;text-align:center;'>La fruta es una Manzana </h3>";
                break;
            case "amarillo";
            case "a";
            case "b";
            case "blanco":
                echo "<h3 style='color:green;text-align:center;'>La fruta es una Pera </h3>";
                break;
            case "m";
            case "morado":
                echo "<h3 style='color:purple;text-align:center;'>La fruta es una Mora </h3>";
                break;
            default:
                echo "<h3 style='text-align:center;'>No es un color para una fruta conocida! </h3>";
                break;
        }

        echo "<h2 style='color:#ffd000;text-align:center'> ***************************************</h2>";
        echo "<h2 style='color:blue;text-align:center'> Guess what day am I?</h2>";

        $dia = 1;

        echo "<h5 style='color:purple;text-align:center'> *********** CON SWITCH ************</h5>";

        switch ($dia){
            case 1:
                echo "<h3 style='color:red;text-align:center;'>El dia es LUNES </h3>";
                break;
            case 2:
                echo "<h3 style='color:red;text-align:center;'>El dia es MARTES </h3>";
                break;
            case 3:
                echo "<h3 style='color:red;text-align:center;'>El dia es MIERCOLES </h3>";
                break;
            case 4:
                echo "<h3 style='color:red;text-align:center;'>El dia es JUEVES </h3>";
                break;
            case 5:
                echo "<h3 style='color:red;text-align:center;'>El dia es VIERNES </h3>";
                break;
            case 6:
                echo "<h3 style='color:red;text-align:center;'>El dia es SABADO </h3>";
                break;
            case 7:
                echo "<h3 style='color:red;text-align:center;'>El dia es DOMINGO </h3>";
                break;
            default:
                echo "<h3 style='color:red;text-align:center;'>No es un dia de la semana </h3>";
                break;
        }

        echo "<h5 style='color:purple;text-align:center'> *********** CON IF-ELSE ***********</h5>";

        if($dia == 1){
            echo "<h3 style='color:red;text-align:center;'>El dia es Lunes</h3>";
        } elseif ($dia == 2){
                echo "<h3 style='color:red;text-align:center;'>El dia es Martes</h3>";
            }elseif($dia == 3){
                    echo "<h3 style='color:red;text-align:center;'>El dia es Miercoles</h3>";
                }elseif ($dia == 4){
                        echo "<h3 style='color:red;text-align:center;'>El dia es Jueves</h3>";
                    }elseif($dia == 5){
                            echo "<h3 style='color:red;text-align:center;'>El dia es Viernes</h3>";
                        }elseif($dia == 6){
                                echo "<h3 style='color:red;text-align:center;'>El dia es Sabado</h3>";
                            }elseif($dia == 7){
                                    echo "<h3 style='color:red;text-align:center;'>El dia es Domingo</h3>";
                                }else echo "<h3 style='color:red;text-align:center;'>Ese numero de dia no es correcto</h3>";  


    ?>
</body>
</html>