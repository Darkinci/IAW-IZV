<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image" href="D:\2º ASIR A\IAW - Ruth Galera\Clase\Icono\ico.png" />
    <title> Operadores in Php </title>
</head>
<body style="background-color:lightblue">
    <h1 style="color:green;text-align:center"> Exercise: Special Constants (Varmagicas5) </h1>
    <h2 style="color:orange;text-align:center"> By Jorge Ortega 2019/20 </h2>
    <?php

        echo "<h3 style='color:blue;text-align:center'> Operadores postincremento y preincremento </h3>";

        $num1 =23;
        // MUCHO CUIDADO!, aunque hagamos $res = ($num1++) el vamor de res va a seguir siendo 23
        // pero si hacemos $res = ($num1 + 1) el valor de res si sera 24. Pruebalo aqui abajo

        //$res = ($num1 = $num1 + 1);
        //$res = ($num1++);
        $res = $num1++;

        // lo volvemos a asignar ya que el ++ num1 ya no es 23, es 24
        $num1 = 23;
        $res2= ++$num1;

        echo "<p> La variable \$res vale $res </p>"; // res = 23
        echo "<p> La variable \$num1 vale $num1 </p>"; // num1 = 24
        echo "<p> La variable \$res2 vale $res2 </p>"; // res2 = 24


    ?>
</body>
</html>