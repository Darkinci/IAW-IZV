<?php
    session_start();
?>
<html>
        <head>
            <title> Mujer Success</title>
        </head>
        <?php $mujer = $_SESSION["nombre"]; ?>
        <body style="background-color:lightpink;">
            <h1 style="font-color:black;font-size:50px;text-align:center;font-family:Trattatello,Fantasy">Bienvenida a Sex Shop Jorge</h1>
            <table border="2px" align="center" cellpadding="15">
                <?php
                    echo "<tr><th><h2>Bienvenida $mujer</h2></th></tr>";
                ?>
                <tr><th>
                <form action="preciosfinmujer.php" method="post">
                Elige tu satisfyer 
                    <input type="checkbox" name="Satisfyer[]" value="3.99" /> <label> opcion A </label>
                    <input type="checkbox" name="Satisfyer[]" value="4.99" /> <label> opcion B </label>
                    <input type="checkbox" name="Satisfyer[]" value="17.99" /> <label> opcion C </label>
                    <input type="checkbox" name="Satisfyer[]" value="14.67" /> <label> opcion D </label> <br/><br/>

                Elige tu
                </th></tr>

                <tr><th><a href="index.php">Volver al inicio </a></th></tr>
            </table>
        </body>

        <?php
            session_destroy();
            unset($_SESSION);
        ?>
</html>