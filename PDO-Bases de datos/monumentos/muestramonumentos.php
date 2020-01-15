<?php
    require_once("TurismoLibreria.php");
    require_once("TurismoManejaBD.php");
    require_once("TurismoDatosConexion.php");
    echo "Hola funciona! <br/>";

    conecta_bd($mibd,$serv,$base,$usuario,$key);
    echo "Ya me he conectado con la BD <br/>";

    $ciudad=$_POST["ciudad"];

    $error = inserta_ciudad($mibd,$ciudad);
    print_r($error);

    imprime_ciudad($mibd);


?>
