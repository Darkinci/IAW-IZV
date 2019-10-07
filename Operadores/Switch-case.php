<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image" href="D:\2º ASIR A\IAW - Ruth Galera\Clase\Icono\ico.png" />
    <title> Operador: Switch con Case </title>
</head>
<body style="background-color:#BCEDC3">
    <h1 style="color:#FFDC00;text-align:center"> EXERCISE: SWITCH & CASE </h1>
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

    ?>
</body>
</html>