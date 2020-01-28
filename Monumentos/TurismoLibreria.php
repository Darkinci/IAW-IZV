<?php

    require_once("TurismoLibreria.php");
    require_once("TurismoManejaBD.php");
    require_once("TurismoDatosConexion.php");
    conecta_bd($mibd,$serv,$base,$usuario,$key);

function inserta_ciudad(&$bd,$nombreciudad, $numhabitantes, $nombrepais, $monumentos){

    // idciudad - nombre - habitantes - pais - monumentos 
    $sql= "Insert into ciudad values (:idciudad, :nombre, :habitantes, :pais, :monumentos)";
    $sentencia=$bd->prepare($sql);
    //$sentencia->bindValue("idciudad" , $idciudad);
    $sentencia->bindValue("idciudad" , busca_id($bd));
    $sentencia->bindValue("nombre", $nombreciudad);
    $sentencia->bindValue("habitantes", $numhabitantes);
    $sentencia->bindValue("pais", $nombrepais);
    $sentencia->bindValue("monumentos" , $monumentos);
    $sentencia->execute();

    $error = $sentencia->errorInfo();
    return $error;
}

function imprime_ciudad(&$bd){
    $consulta="Select * from ciudad";
    $resultado = $bd->prepare($consulta);
    $resultado->execute();
    while($fila = $resultado->fetch() ){
        echo "<tr><td>".$fila['idciudad']."</td><td>".$fila['nombre']."</td><td>".$fila['habitantes']."</td><td>".$fila['pais']."</td><td>".$fila['monumentos']."</td></tr>";
    }
}

function busca_id(&$bd){
    if(comprueba_bd($bd)){
        //En caso de que la BD este vacia
        $id=1;
        return $id;
    }else{
        //Busca el primer hueco que haya disponible
        $contador=1;
        $consulta="Select idciudad from ciudad";
        $resultado=$bd->prepare($consulta);
        $resultado->execute();
        while($fila = $resultado->fetch()){
            if ($fila['idciudad'] == $contador){
                $contador=$contador+1;
            } 
        }
        return $contador;
    }
}

function borra_ciudad(&$bd,$nombreciudad){
    $sql= "delete from ciudad where nombre = :nomciu";
    $sentencia=$bd->prepare($sql);
    $sentencia->bindValue("nomciu",$nombreciudad);
    $sentencia->execute();
}

function actualiza_ciudad(&$bd,$nuevonombre,$viejonombre){
    $sql= "update ciudad set nombre=:nombreNuevo Where nombre=:nombreViejo";
    $sentencia= $bd->prepare($sql);
    $sentencia->bindValue("nombreNuevo", $nuevonombre);
    $sentencia->bindValue("nombreViejo",$viejonombre);
    $sentencia->execute();
}

function dame_act_ciudades(&$bd){
    $consulta="Select nombre from ciudad";
    $resultado = $bd->prepare($consulta);
    $resultado->execute();
    while($fila = $resultado->fetch()){
        echo "<input type='radio' name='viejonombre' value=".$fila['nombre']." required/>" .$fila['nombre'] ."<br /><br />";
    }
}

function dame_borra_ciudades(&$bd){
    $consulta="Select nombre from ciudad";
    $resultado = $bd->prepare($consulta);
    $resultado->execute();
    while($fila = $resultado->fetch()){
        echo "<input type='radio' name='borra_ciudad' value=".$fila['nombre'].">" .$fila['nombre'] ."<br /><br />";
    }
}

function comprueba_existe(&$bd,$nombre){
    $consulta="Select count(nombre) as cuentanombre from ciudad where nombre = :nombre";
    $resultado = $bd->prepare($consulta);
    $resultado->bindValue("nombre", $nombre);
    $resultado->execute();
    $fila= $resultado->fetch();
    if($fila['cuentanombre'] > 0){
        $salida= 1;
        return $salida;
    } 
    else {
        $salida=0;
        return $salida; 
    }
}

function comprueba_bd(&$bd){
    $consulta="SELECT count(*) as total FROM ciudad";
    $resultado = $bd->prepare($consulta);
    $resultado->execute();
    $fila=$resultado->fetch();
    if($fila['total'] == 0){
        $salida=1;
        return $salida;
    }else{
        $salida=0;
        return $salida;
    } 
}
?>