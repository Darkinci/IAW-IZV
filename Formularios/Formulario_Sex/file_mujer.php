<?php
    session_start();
?>
<html>
        <head>
            <title> Mujer Success</title>
        </head>
        <?php $mujer = $_SESSION["nombre"]; ?>
        <body style="background-color:lightseagreen;">
            <table border="1px" align="center" cellpadding="15">
                <?php
                    echo "<tr><th><h2>Bienvenida $mujer</h2></th></tr>";
                ?>
                <tr><th><a href="index.php">Volver al inicio </a></th></tr>
            </table>
        </body>

        <?php
            session_destroy();
            unset($_SESSION);
        ?>
</html>