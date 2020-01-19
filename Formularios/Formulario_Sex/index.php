<?php
    session_start();
?>

<html>
    <head>
        <title> Bienvenido </title>
        </style>
    </head>
    <body style="background-color:lightgreen">
        <h1 style="font-size:50px;text-align:center;font-family:Trattatello,Fantasy"> Formulario (NO) Sexual </h1>
        <table border="2px" align="center" cellpadding="10">
            <tr><th><h1 style='font-family:Sans-serif'>Bienvenido, porfavor, introduce tus datos</h1></th></tr>
            <tr><th><form action="index_control.php" method="post">
                    Nombre: <input type="text" name="nombre" placeholder="Jorge"/><br/><br/>
                    Edad: <input type="number" name="edad" placeholder="18" required/><br/><br/>
                    Sexo:
                        <input type="radio" name="sexo" value="Hombre" checked /> <label> Hombre </label>
                        <input type="radio" name="sexo" value="Mujer" /> <label> Mujer </label><br/><br/>
                    <input type="submit" value="Continuar"/></th></td>
        </form>
        </table>
        <br/><br/>

        
                <?php
                    if(isset($_SESSION["error"])){
                        echo "<div style='color:red;font-size:medium;border:3px solid red;text-align:center'>";
                        if($_SESSION["error"] == "ambos"){
                            echo "<p style='color:black; font-size: 20px; font-weight: bold;'>Faltan el NOMBRE completar y es MENOR, porfavor, corrijalo</p> <br/>";
                        }
                        if($_SESSION["error"] == "nombre"){
                            echo "<p style='color:black; font-size: 20px; font-weight: bold;'>Faltan el NOMBRE completar, porfavor, introduzcalo</p>";
                        }
                        if($_SESSION["error"] == "edad"){
                            echo "<p style='color:black; font-size: 20px; font-weight: bold;'>Eres MENOR de edad, NO tienes acceso</p>";
                        }
                        echo "</div>";
                    }   
                ?>
       
    </body>

</html>