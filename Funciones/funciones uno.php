<?php
    require_once("Libreria.php");
    $a = 3;
    $b = 4;
    $c = 5;
    echo "1. Funcion mostrar resultado de suma y multiplicacion <br/>";
    mostrar_resul($a,$b,$c);
    echo "<br/><br/>";


    $d = 3;
    $e = 4;

    echo "2. Funcion intercambia valores usando d y e<br/>";
    intercambia($d,$e);
    intercambia_ref($d,$e);
    echo "<br/><br/>";

    $array = array ("a","b","c","d","e");

    echo "3. Funcion muestra array<br/>";
    muestra_array($array);
    echo "<br/><br/>";

    $a = array();
    $longitud = mt_rand(1,10);

    crea_array($a,$longitud);
    
    $total = multiplica_array($a);

    echo "<br/><br/>";
    echo "4. Funcion multiplica array longitud $longitud<br/>";
    muestra_array($a);
    echo "<br/>El total de multiplicar el array es $total";
    echo "<br/><br/>";

    $numero = 5;
    echo "5. Funcion factorial array longitud $longitud<br/>";
    factorial($numero);
    echo "<br/><br/>";

    echo "6. Funcion fibonacci<br/>";
    fibonnacci(15);
    echo "<br/><br/>";

    echo "7. Funcion regiones<br/>";
    $array=crea_regiones();
    muestra_array($array);
    echo "<br/><br/>";

    echo "8. Funcion Cuenta provincias<br/>";
    cuenta_provincias($array);
    echo "<br/><br/>";

?>