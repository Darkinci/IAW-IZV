<?php

function inserta_ciudad(&$bd, $nombreciudad){
     
    $sql= "Insert into ciudad (nombre) values (:nombre)"; // aqui tenemos que poner SOLO el nombre de la ciudad, y el/los nombres de los documentos
    $sentencia=$bd->prepare($sql);
    $sentencia->bindValue("nombre", $nombreciudad);
    //$sentencia->bindValue("idciudad" , busca_id()); // Aqui tendriamos que hacer la funcion de asignar un numero, pero que no sea aleatorio
    //$sentencia->bindValue("monumentos" ; $nombreMonumento);
    $sentencia->execute();

    // idciudad - nombre - habitantes - pais - monumentos
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
        echo "<tr><td>" .$fila['idciudad'] . "</td><td>" . $fila['nombre'] . "</td></tr>";
    }
}

/*function busca_id(&$bd){
    $consulta="Select idciudad from ciudad";
    $resultado = $bd->prepare($consulta);
    $resultado->execute();
    while($fila = $resultado->fetch() ){
        if ($fila['idciudad'] != 0)
            echo "No hay nada";
        else echo $fila['idciudad'];
    }
}*/

function borra_ciudad(&$bd,$nombreciudad){
    $sql= "delete from ciudades where nombre = :nomciu";
    $sentencia=$bd->prepare($sql);
    $sentencia->bindValue("nomciu",$nombreciudad);
    $sentencia->execute();
}

function actualiza_ciudad(&$bd,$viejonombre,$nuevonombre){
    $sql= "update ciudades set nombre = :nombreNuevo Where nombre = :nombreViejo";
    $sentencia= $bd->prepare($sql);
    $sentencia->bindValue("nombreNuevo", $nuevonombre);
    $sentencia->bindValue("nombreViejo",$viejonombre);
    $sentencia->execute();
}

function dame_ciudades(&$bd){
    $consulta="Select * from ciudad";
    $resultado = $bd->prepare($consulta);
    $resultado->execute();
    while($fila = $resultado->fetch()){
        $ciudad=$fila['nombre'];
        echo "<input type='radio' name='borraciudad' value='$ciudad'/> $ciudad <br /><br />";
    }
}
?>