<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" type="image" href="ruta" />
        <title>Document</title>
    </head>
    <body style="background-color: lightgreen">
         
        <h1 style='color:orange;text-align:center;'> Boolean & Nulls by Jorge Ortega</h1>
        </hr>
        
            <?php

            echo "<h3 style='text-align:center; color:blue'>'Hoy es' ". date('l jS \of F Y h:i A') . "</h3>" ; 
                
            //la funcion var_dump ($nombrevar) saca por pantalla el tipo //
            // variable que es //

            $entero = 4;
            $real = 4.5;
            $verdadero = true;
            $falso = false;
            $vacio = null;
            $cadena = "Jorge Ortega";

            // IMPORTANTE!! Var_dump($nombrevar) tiene que ir SIEMPRE en una linea aparte

            echo "La variable \$entero contiene el valor $entero y es de tipo ";
            echo var_dump($entero) . "<br/><br/>";

            echo "La variable \$real contiene el valor $real y es de tipo ";
            echo var_dump($real) . "<br/><br/>";

            echo "La variable \$verdadero contiene el valor \"$verdadero\" y es de tipo ";
            echo var_dump($verdadero) . "<br/><br/>";

            echo "La variable \$falso contiene el valor \"$falso\" y es de tipo ";
            echo var_dump($falso) . "<br/><br/>";

            echo "La variable \$vacio contiene el valor \"$vacio\" y es de tipo ";
            echo var_dump($vacio) . "<br/><br/>";

            echo "La variable \$cadena contiene el valor \"$cadena\" y es de tipo ";
            echo var_dump($cadena) . "<br/><br/>";
        ?>
    </body>
</html>
