<?php

    function imprime_ciudades(&$bd){
        $consulta="Select * from ciudades";
        $resultado = $bd->prepare($consulta);
        $resultado->execute();
        echo "<br/> ";
        while($fila = $resultado->fetch() ){
            echo "El id es " .$fila['idciudad'] . " y el nombre es " . $fila['nombre'] . "<br/>";
        }
    }

    function inserta_ciudad(&$bd, $idNueCiu, $nomNueCiu){
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

    function borra_ciudad(&$bd,$Nomciudad){
        $sql= "delete from ciudades where nombre = :nomciu";
        $sentencia=$bd->prepare($sql);
        $sentencia->bindValue("nomciu",$Nomciudad);
        $sentencia->execute();

        $error = $sentencia->errorInfo();
        return $error;
    }

    function actualiza_ciudad(&$bd,$idCiudad, $nuevoNombre){
        $sql= "update ciudades set nombre = :nombreNuevo Where idciudad = :identificador";
        $sentencia= $bd->prepare($sql);
        $sentencia->bindValue("nombreNuevo", $nuevoNombre);
        $sentencia->bindValue("identificador", $idCiudad);
        $sentencia->execute();

        $error = $sentencia->errorInfo();
        return $error;
    }
?>