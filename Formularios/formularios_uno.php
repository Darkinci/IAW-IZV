<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image" href="D:\2º ASIR A\IAW - Ruth Galera\Clase\Icono\ico.png" />
    <title> Formularios 1 </title>
</head>
<body style="background-color:#d8ffd5">
    <h1 style="color:#2e9616;text-align:center"> Formularios 1 </h1>
    <h1 style="color:#FF6C00;text-align:center"> By Jorge Ortega 2019/20 </h1>
    <?php
        echo "<h2> Formularios Uno - Respuestas del Cliente! </h2>";
        echo $_POST['nombre']; echo "<br/><br/>";
        echo $_POST['apellido']; echo "<br/><br/>";
        echo $_POST['email']; echo "<br/><br/>";

        echo $_POST['estadocivil']; echo "<br/><br/>";
        /*$estadocivil = $_POST['estadocivil'];
        foreach ($estadocivil as $indice => $valor){
            echo "$indice: $valor <br/>";
        }*/
        echo $_POST['genero']; echo "<br/><br/>";
        echo $_POST['edad']; echo "<br/><br/>";
        echo $_POST['NumHijos']; echo "<br/><br/>";
        
        $gustos = $_POST['Gustos'];
        foreach ($gustos as $indice => $valor) {
            echo "$valor <br/>";
        }
    ?>
</body>
</html>