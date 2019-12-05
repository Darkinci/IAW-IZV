<?php
    session_start();
?>

<html>
    <head>
        <title> Bienvenido </title>
        </style>
    </head>
    <body>
        <h1>Bienvenido, porfavor, introduce tus datos </h1>
        <form action="index_control.php" method="post">
            Nombre: <input type="text" name="nombre" placeholder="Jorge"/><br/><br/>
            Edad: <input type="number" name="edad" Default="18"/><br/><br/>
            Sexo:
                <input type="radio" name="sexo" value="Hombre" checked /> <label> Hombre </label>
                <input type="radio" name="sexo" value="Mujer" /> <label> Mujer </label><br/><br/>
            <input type="submit" value="Continuar"/>
        </form>


        <div align="center" style="color:red; font-size: medium; font-weight:bald;">
                <?php
                    echo "<br/>";
                    if(isset($_SESSION["nombre"]) or isset($_SESSION["edad"])){
                        if($_SESSION["error"] == "error"){
                            echo "Faltan datos por completar, porfavor, introduzcalos <br/>";
                        }
                        if($_SESSION["edad"] == "menor"){
                            echo "Lo sentimos, no admitimos menores de 18 años";
                        }
                    }   
                ?>
        </div>
    </body>

</html>