
<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" type="image" href="ruta" />
        <title>Document</title>
    </head>
    <body style="background-color: aquamarine;">
         
        <h1> Cadenas.php</h1>
        </hr>
        <h2> Hoy es Tuesday, October first of 2019</h2>
        

        <?php

            // Pruebas con cadenas y funcion "date" // 
    
            echo "Today is " . date('l jS \of F Y h:i A') . "</br>";            

            $cadena1 = 'Aqui se pueden ver comillas "dobles" </br>';
            $cadena2 = "Aqui se pueden ver comillas 'simples' </br>";
            $cadena3 = 'Esta cadena no da errores por las comillas "doble" </br>';

            echo $cadena1;
            echo $cadena2;
            echo $cadena3;



        ?>
    </body>
</html>

