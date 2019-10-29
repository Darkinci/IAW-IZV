<?php
    require_once("Libreria.php");
    $a = 3;
    $b = 4;
    $c = 5;
    mostrar_resul($a,$b,$c);


    $d = 3;
    $e=4;

    intercambia($d,$e);

    $array = array ("a","b","c","d","e");

    muestra_array($array);

    $longitud = 5;

    $array = crea_array($longitud);

    $total = multiplica_array($array);

    echo "<br/><br/>";
    echo "El total de multiplicar el array es $total<br/>";

    $numero = 5;
    factorial($numero);
?>