<html>
    <head>
        <title> Prueba Persona OOP </title>
    </head>
    <body>
        <h1> Prueba Persona OOP </h1>
        <?php
            require_once("persona.php");
            require_once("Empleado.php");
            // Aqui vamos a instanciar = crear el objeto

            $jorge = new Persona("Jorge Ortega","2682127F","Calle Nardos");
            //$Jorge->setName("Jorge Ortega");
            //$DameNombre = $Jorge->getName();
            //echo $DameNombre;

            // Ponemos valores al Objeto Jorge

            //$jorge->setName("Jorge Ortega");
            //$jorge->setDni("26821227F");
            //$jorge->setDireccion("Calle Nardos 3");

            $jorge->toString();
            echo "</br>";
            $rut = new Empleado ("Rut Galera","1234567A","Calle Nombre", "Profesora");

            $rut->toString();
        ?>
    </body>
</html>