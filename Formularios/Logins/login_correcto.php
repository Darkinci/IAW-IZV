<?php
    session_start();
?>
<html>
        <head>
            <title> Login Success</title>
        </head>
        <?php $usuario = $_SESSION["nombre"]; ?>
        <body style="background-color:lightseagreen;">
            <table border="1px" align="center" cellpadding="15">
                <?php
                    echo "<tr><th><h2>Lo has logrado $usuario</h2></th></tr>";
                ?>
                <tr><th><a href="login_inicio.php">Volver al inicio </a></th></tr>
            </table>
        </body>

        <?php
            session_destroy();
            unset($_SESSION);
        ?>
</html>