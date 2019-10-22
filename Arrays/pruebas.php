<?php
    do{
        $longitud = mt_rand(3,27);
    }while($longitud % 2 == 0);
    echo "$longitud <br/>";

    $posicion_media = $longitud / 2;
    settype($posicion_media,"int");
    

    echo "$posicion_media";





?>
