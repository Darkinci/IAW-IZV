<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image" href="D:\2º ASIR A\IAW - Ruth Galera\Clase\Icono\ico.png" />
    <title> Operadores 1 </title>
</head>
<body style="background-color:lightblue">
    <h1 style="color:green;text-align:center"> Exercise: Special Constants (Varmagicas5) </h1>
    <h2 style="color:orange;text-align:center"> By Jorge Ortega 2019/20 </h2>
    <?php

        echo "<h3 style='color:blue;text-align:center'> Frutas </h3>";

        $color = "ESPAÑA";

        if(($color == "rojo") | ($color == "verde")){
            echo "La fruta roja o verde es una MANZANA";
        }elseif(($color == "amarillo") | ($color == "blanco")){
            echo "La fruta amarilla o blanca es una PERA";
        }elseif($color == "morado"){
            echo "La fruta morada es una MORA";
        }else echo "La fruta es de color $color";

    ?>
</body>
</html>