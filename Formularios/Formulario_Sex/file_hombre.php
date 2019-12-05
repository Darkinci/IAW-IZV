<?php
    session_start();
?>
<html>
        <head>
            <title> Hombre Success</title>
        </head>
        <?php $hombre = $_SESSION["nombre"]; ?>
        <body style="background-color:lightseagreen;">
            <table border="1px" align="center" cellpadding="15">
                <?php
                    echo "<tr><th><h2>Bienvenido $hombre</h2></th></tr>";
                ?>
                <tr><th><a href="index.php">Volver al inicio </a></th></tr>
            </table>
        </body>

        <?php
            session_destroy();
            unset($_SESSION);
        ?>
</html>