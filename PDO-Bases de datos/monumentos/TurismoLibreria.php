<?php

function inserta_ciudad(&$bd, $nombreciudad){

    // idciudad - nombre - habitantes - pais - monumentos 
    $sql= "Insert into ciudad ( nombre) values (:nombre)"; // aqui tenemos que poner SOLO el nombre de la ciudad, y el/los nombres de los documentos
    $sentencia=$bd->prepare($sql);
    $idciudad = 1;
    //$sentencia->bindValue("idciudad" , $idciudad); // Aqui tendriamos que hacer la funcion de asignar un numero, pero que no sea aleatorio
    $sentencia->bindValue("nombre", $nombreciudad);
    //$sentencia->bindValue("monumentos" ; $nombreMonumento);
    $sentencia->execute();

    //ponemos un "debugger" para ciertos fallos de php con SQL donde 
    //en caso de que nosotros metamos una llave duplicada, de un error
    // ( no lo da por algun motivo)

    $error = $sentencia->errorInfo();
    return $error;
}

function imprime_ciudad(&$bd){
    $consulta="Select * from ciudad";
    $resultado = $bd->prepare($consulta);
    $resultado->execute();
    echo "<br/> ";
    while($fila = $resultado->fetch() ){
        echo "El id es " .$fila['idciudad'] . " y el nombre es " . $fila['nombre'] . "<br/>";
    }
}
?>