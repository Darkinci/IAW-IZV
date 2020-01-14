<?php
    require_once("manejaBD.php");
    require_once("DatosConexion.php");
    require_once("ManejaCiudades.php");

    conecta_bd($mibd,$serv,$base,$usuario,$key);

    echo "PRUEBA DE INSERCION! <br/>";
    inserta_ciudad($mibd,5,"Gibraltar");

    echo "IMPRIMIMOS CIUDADES PARA VER SI HA FUNCIONADO! <br/>";
    imprime_ciudades($mibd);
    echo "<br/>";

    /*echo "PRUEBA DE BORRADO! <br/>";
    borra_ciudad($mibd,"Gibraltar");
    echo "<br/>";

    echo "IMPRIMIMOS CIUDADES PARA VER SI HA FUNCIONADO! <br/>";
    imprime_ciudades($mibd);
    echo "<br/>";*/

    echo "PRUEBA DE UPDATE! <br/>";
    actualiza_ciudad($mibd,5,"Jorge");
    echo "<br/>";

    echo "IMPRIMIMOS CIUDADES PARA VER SI HA FUNCIONADO! <br/>";
    imprime_ciudades($mibd);
    echo "<br/>";
    

?>
