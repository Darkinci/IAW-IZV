<?php
    session_start();
?>
<html>
        <head>
            <title> Precios Final + Pagar</title>
        </head>
        <?php $mujer = $_SESSION["nombre"]; ?>
        <body style="background-color:lightpink;">
            <h1 style="font-color:black;font-size:50px;text-align:center;font-family:Trattatello,Fantasy">Bienvenida a Sex Shop Jorge</h1>
            <table border="2px" align="center" cellpadding="15">
                <?php
                    echo "<tr><th><h2>Bienvenida $mujer</h2></th></tr>";
                ?>
                <tr><th> 