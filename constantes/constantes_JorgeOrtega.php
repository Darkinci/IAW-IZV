<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image" href="D:\2º ASIR A\IAW - Ruth Galera\Clase\Icono\ico.png" />
    <title> Constants in PhP </title>
</head>
<body style="background-color:lightblue">
    <h1 style="color:green;text-align:center"> Exercise: Constants </h1>
    <h2 style="color:orange;text-align:center"> By Jorge Ortega 2019/20 </h2>
    <?php
        echo "<h3 style='text-align:center; color:blue'> Today is ". date('l jS \of F Y h:i A') . "</h3>";

        //Para crear una constante, tenemos que usar la funcion 'define("nombreVar","valorVar") 
        /*Ejercicio: Crear las constantes de:
            1. Color rojo.
            2. Nombre de una empresa.
            3. La temperatura de ebullición del agua.
            4. La capital de Albania
            5. La capital de Macedonia.
        */

        define ("NOMBRE_EMPRESA","Jorge S.L");
        define ("COLOR_ROJO","Rojo");
        define ("TEMP_EBULL_AGUA","100º");
        define ("CAP_ALBANIA","Tirana");
        define ("CAP_MACEDONIA","Skopie");

        //Para sacar por pantalla el valor de una constante, tenemos que usar 'echo nombreVar;' (sin $).
        //Otra opción es usar la funcion 'echo constant ("nombreVar");'.

        echo "El nombre de mi empresa es --> " . NOMBRE_EMPRESA . "<br/>";
        echo "El color rojo es de color --> " .  COLOR_ROJO .  "<br/>";
        echo "El agua en la Tierra ebulle a --> " . TEMP_EBULL_AGUA . "<br/>";
        echo "La capita de Albania es --> " . CAP_ALBANIA . "<br/>";
        echo "La capital de Macedonai es --> " . CAP_MACEDONIA . "<br/>";

    ?>
</body>
</html>