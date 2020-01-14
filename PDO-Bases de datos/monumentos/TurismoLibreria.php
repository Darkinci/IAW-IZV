<?php

function inserta_ciudad(&$bd, $nomNueCiu, $nombreMonumento){

    // idciudad - nombre - habitantes - pais - monumentos 
    $sql= "Insert into ciudades values (:idciudad, :nombre)";
    $sentencia=$bd->prepare($sql);
    $sentencia->bindValue("idciudad",$idNueCiu);
    $sentencia->bindValue("nombre",$nomNueCiu);
    $sentencia->execute();

    //ponemos un "debugger" para ciertos fallos de php con SQL donde 
    //en caso de que nosotros metamos una llave duplicada, de un error
    // ( no lo da por algun motivo)

    $error = $sentencia->errorInfo();
    return $error;
}
?>