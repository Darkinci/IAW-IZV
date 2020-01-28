<?php
    session_start();

    require_once("TurismoLibreria.php");
    require_once("TurismoManejaBD.php");
    require_once("TurismoDatosConexion.php");
    conecta_bd($mibd,$serv,$base,$usuario,$key);

    if(comprueba_bd($mibd)){
        $_SESSION['error']="vacio";
        header('Location:TurismoBorra.php');
    }else{
        header('Location:TurismoBorra.php');
    }

?>
