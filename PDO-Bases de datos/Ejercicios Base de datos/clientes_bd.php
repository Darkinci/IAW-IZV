<?php 
    //Creamos la tabla Clientes (idCli,Nombre,Direccion,NumPed,Ingresos)

    $servidor="localhost";
    $baseDatos="clientes";
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

    echo "<h1> Tabla Clientes </h1>";

    $consulta ="Select nombre,ingresos,numPed from clientes";
    $resultado = $bd->prepare($consulta);
    $resultado->execute();

    while($fila = $resultado->fetch() ){
        echo "<h3>" . $fila['nombre'] . " ha gastado " . $fila['ingresos'] . "€ en " . $fila['numPed'] . " pedidos </h3>";
    }

    //Cerramos el cursor
    $resultado->closeCursor();

    echo "<hr/><hr/>";

    // -------------------------------------------------------------------------------------------------------------------- //
    // -------------------------------------------------------------------------------------------------------------------- //
    // *************************************************Sentencias con WHERE************************************************//
    // -------------------------------------------------------------------------------------------------------------------- //
    // -------------------------------------------------------------------------------------------------------------------- //

    $ingresos_grandes = 50000;
    $consulta2= "Select * from Clientes where ingresos>=:cantidad";
    $resultado2 = $bd->prepare($consulta2);
    $resultado2->bindValue("cantidad",$ingresos_grandes);
    $resultado2->execute();

    echo "<h2> Personas con ingresos mayores de 50K</h2>";
    while($fila = $resultado2->fetch() ){
        echo "<h3>" . $fila['nombre'] . " ha gastado " . $fila['ingresos'] . "€ en " . $fila['numPed'] . " pedidos </h3>";
    }

    $resultado2->closeCursor();

    echo "<hr/><hr/>";

    $gente_a = "%a";
    $consulta3= "Select * from Clientes where nombre like :nombrebusqueda";
    $resultado3 = $bd->prepare($consulta3);
    $resultado3->bindValue("nombrebusqueda",$gente_a);
    $resultado3->execute();

    echo "<h2> Personas que su nombre acaba en A</h2>";
    while($fila = $resultado3->fetch() ){
        echo "<h3>" . $fila['nombre'] . " ha gastado " . $fila['ingresos'] . "€ en " . $fila['numPed'] . " pedidos </h3>";
    }

    $resultado3->closeCursor();
?>