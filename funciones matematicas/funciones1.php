<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image" href="D:\2º ASIR A\IAW - Ruth Galera\Clase\Icono\ico.png" />
    <title> Special Cases </title>
</head>
<body style="background-color:#BCEDC3">
    <h1 style="color:blue;text-align:center"> EXERCISE: TESTING SPECIAL THINGS </h1>
    <h1 style="color:#FF6C00;text-align:center"> By Jorge Ortega 2019/20 </h1>
    <?php

        echo "<h3 style='color:green;text-align:center'> *************************** ENTEROS *************************** </h3>";
        $maximo = PHP_INT_MAX;
        echo "<p style='text-align:center'> El mayor entero que se puede fuardar en una variable INT es $maximo </p> \n";

        $demasiado =(int)($maximo+1);
        echo "<p style='text-align:center'> Si se intenta guardar 1 mas, el resultado ahora es $demasiado </p> \n";

        echo "<h3 style='color:green;text-align:center'> *************************** CADENAS *************************** </h3>";
    
        $saludo = "Hola, soy Jorge";
        echo "<p style='text-align:center'>$saludo</p> \n";

        $saludo[16] = "!";
        echo "<p style='text-align:center'>$saludo</p>\n";

        $saludo[30] = "?";
        echo "<p style='text-align:center'>$saludo</p>\n";

        //No se puede asignar una cadena vacia a otra, es decir, no se puede poner "";
        //Pero si se puede poner " ";

        echo "<h3 style='color:green;text-align:center'> *************************** SETTYPES *************************** </h3>";

        $nom1 = "Jorge";
        echo "El nombre es $nom1 <br/>";
        echo "Voy a usar SETTYPE a ver que pasa <br/>";
        $conversion = settype($nom1,"integer");
        echo "El nombre contiene ahora --> $nom1<br/>";
        echo "Y la conversion tiene -> $conversion <br/>";

        //para hacer bien la transformacion, string tendria que ver un numero antes de nada.
        // es decir, si string ve 14Jorge -> lo transformara en 14
        // pero si ve Jorge14 -> lo transformara en 0 

        echo "<h4 style='color:red; text-align:center'> ******* Prueba 2 ******* </h4>";

        $nom1 = "14Jorge";
        echo "El nombre es $nom1 <br/>";
        echo "Voy a usar SETTYPE a ver que pasa <br/>";
        $conversion = settype($nom1,"integer");
        echo "El nombre contiene ahora --> $nom1<br/>";
        echo "Y la conversion tiene -> $conversion <br/>";

        echo "<h4 style='color:red; text-align:center'> ******* Prueba 3 ******* </h4>";

        $nom1 = "Jorge14";
        echo "El nombre es $nom1 <br/>";
        echo "Voy a usar SETTYPE a ver que pasa <br/>";
        $conversion = settype($nom1,"integer");
        echo "El nombre contiene ahora --> $nom1<br/>";
        echo "Y la conversion tiene -> $conversion <br/>";

        echo "<h4 style='color:red; text-align:center'> ******* Prueba 4 ******* </h4>";

        $nom1 = "Jor14ge";
        echo "El nombre es $nom1 <br/>";
        echo "Voy a usar SETTYPE a ver que pasa <br/>";
        $conversion = settype($nom1,"integer");
        echo "El nombre contiene ahora --> $nom1<br/>";
        echo "Y la conversion tiene -> $conversion <br/>";
    
    
    ?>
</body>
</html>