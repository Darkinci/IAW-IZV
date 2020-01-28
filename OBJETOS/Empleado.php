<?php

    require_once("persona.php");
    Class Empleado extends Persona {
        var $cargo;
        var $sueldo;

        function __construct($nombre,$denei,$dir,$trabajo){
            $this->nombre=$nombre;
            $this->dni=$denei;
            $this->direccion=$dir;
            $this->cargo=$trabajo;
        }
        function getCargo (){
            return $this->cargo;
        }

        function getSueldo(){
            return $this->sueldo;
        }

        function setCargo($nuevoCargo){
            $this->cargo = $nuevoCargo;
        }

        function setSueldo($nuevoSueldo){
            $this->sueldo = $nuevoSueldo;
        }

        function toString(){
            //vamos a llamar al metodo del padre para ahorranos escribir
            parent::toString();
            echo " su trabajo es ". $this->getCargo();
        }
    }




?>