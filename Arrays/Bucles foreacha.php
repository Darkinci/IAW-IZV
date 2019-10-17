<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image" href="D:\2º ASIR A\IAW - Ruth Galera\Clase\Icono\ico.png" />
    <title> First Arrays Exercises </title>
    <style>
            table,tr,td {
                margin: 0 auto;
                border-collapse: collapse;
                border: 2px solid red;
                padding: 10px;
            }
            div{
                text-align: center;
                font-size: 20px;
                color: blue;
            }
    </style>
</head>
<body style="background-color:#d8ffd5">
    <h1 style="color:#2e9616;text-align:center"> EXERCISE: Array de Nombres y edades </h1>
    <h1 style="color:#FF6C00;text-align:center"> By Jorge Ortega 2019/20 </h1>
    <?php
        echo "<div>";
        
        //Array de numeros de 1 a 100
            $edades = array("Lola"=>6,"Pedro"=>19,28 =>"Rut",30 =>"Pedro","Sara"=>50);

            echo "<h2 style='color:red;text-align:center'> Arrays de Nombres y Edades</h2>";

            foreach($edades as $indice => $valor){
                echo "$indice tiene el valor $valor<br/>";
            }
        echo "</div>";
    ?>
</body>
</html>