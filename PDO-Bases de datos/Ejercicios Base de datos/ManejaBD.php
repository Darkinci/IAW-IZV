<?php

    //Funcion para Conectarnos con la base de datos
        // BD va por referencia para cuando hagamos insert (modificaciones)
    function conecta_bd (&$bd, $servidor, $baseDatos, $usuario, $clave){
        try {
            $bd = new PDO(
                'mysql:host=' . $servidor . ';dbname=' . $baseDatos . ';charset=utf8',
                $usuario, $clave, array(PDO::ATTR_PERSISTENT => true,
                                        PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8')
                            );
        } catch (PDOException $e) {
            echo ("ERROR: <br/>" . $e->getMessage(). "<br/>");
        }
    }

    //Funcion para cerrar la base de datos
    function cierra_bd(&$bd){
        $bd=null;
    }

?>