<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image" href="D:\2º ASIR A\IAW - Ruth Galera\Clase\Icono\ico.png" />
    <title> Special constants in PhP </title>
</head>
<body style="background-color:lightblue">
    <h1 style="color:green;text-align:center"> Exercise: Special Constants (Varmagicas5) </h1>
    <h2 style="color:orange;text-align:center"> By Jorge Ortega 2019/20 </h2>
    <?php
        echo "<h3 style='text-align:center; color:blue'> Today is ". date('l jS \of F Y h:i A') . "</h3>";

        /*Ejercicio: Mostrar por pantalla las constantes reservadas de PhP, excepto Class y Method
            Estas son:
                Definidas por PhP5:
                    PHP_VERSION Versión del parse de PHP que estamos utilizando.
                    PHP_OS Sistema operativo del servidor de PHP.
                    PEAR_EXTENSION_DIR Ruta donde está instalada la extensión PEAR.
                    PHP_LIBDIR Ruta donde están almacenadas las librerías de PHP 5.
                
                Especiales: 
                    __LINE__ Indica el número de línea desde la que imprimimos el valor.
                    __FILE__ Ruta completa al fichero.
                    __FUNCTION__ Nombre de la función que la contiene.
                    __CLASS__ Nombre de la clase.
                    __METHOD__ Nombre del método.
        */

        echo "<h4> Constantes definidas por PhP5 </h4>";
            echo "Versión del parche de PHP que estamos utilizando es --> " . PHP_VERSION . "<br/>";
            echo "Sistema operativo del servidor de PHP es --> " .  PHP_OS .  "<br/>";
            echo "Ruta donde está instalada la extensión PEAR es --> " . PEAR_EXTENSION_DIR . "<br/>";
            echo "Ruta donde están almacenadas las librerías de PHP 5 es --> " . PHP_LIBDIR . "<br/>";

        echo "<h4> Constantes especiales o mágicas </h4>";
            echo "El número de línea desde la que imprimimos el valor es --> " . __LINE__ . "<br/>";
            echo "La ruta completa al fichero es --> " .  __FILE__ .  "<br/>";
            echo "El nombre de la función que la contiene es --> " . __FUNCTION__ . "<br/>";

    ?>
</body>
</html>