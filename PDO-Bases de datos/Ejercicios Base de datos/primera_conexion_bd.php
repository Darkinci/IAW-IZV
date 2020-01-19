<?php
    $servidor="localhost";
    $baseDatos="prueba";
    $usuario="root";
    $clave="";

    try {
        $bd = new PDO(
            'mysql:host=' . $servidor . ';dbname=' . $baseDatos . ';charset=utf8',
            $usuario, $clave, array(PDO::ATTR_PERSISTENT => true,
                                    PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8')
                        );
    } catch (PDOException $e) {
    //echo "$e";
    //echo "<br/><br/><p>No hay base de datos o ha habido un error</p>"; //o la acción que sea

    echo ("ERROR: <br/>" . $e->getMessage(). "<br/>");
    }

    echo "TODO HA FUNCIONADO";

    $consulta ="Select * from Ciudades";
    $resultado = $bd->prepare($consulta);
    $resultado->execute();
    echo "<br/>";

    while($fila = $resultado->fetch() ){
        echo "El id es " .$fila['idciudad'] . " y el nombre es " . $fila['nombre'] . "<br/>";
    }

    //Cerramos el cursor
    $resultado->closeCursor();


    // ***********************************************************//

                //Asi se haria con el otro archivo
                //requiere_once ("DatosConexion.php");
                //requiere_once("ManejaBD.php");
                //conecta_bd($mibd,$serv,$bede,$user,$key);

    // ***********************************************************//

?>