<?php

    class Persona{
        var $nombre;
        var $dni;
        var $direccion;

        function __construct($cNombre, $cDni, $cDireccion){
            $this->nombre=$cNombre;
            $this->dni=$cDni;
            $this->direccion=$cDireccion;
        }
        
        function setName($nuevo_nombre){
           $this->nombre = $nuevo_nombre;
        }

        function setDni($nuevo_dni){
            $this->dni = $nuevo_dni;
         }

        function setDireccion($nueva_direccion){
            $this->direccion = $nueva_direccion;
        }

        function getName(){
            return $this->nombre;
        }

        function getDni(){
            return $this->dni;
        }

        function getDireccion(){
            return $this->direccion;
        }

        function toString(){
            echo "Esta persona se llama: " . $this->getname() ." tiene el siguiente DNI: " . $this->getDni() . " y vive en: " . $this->getDireccion();
        }
    }
?>
