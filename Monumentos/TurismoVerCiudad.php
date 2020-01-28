<?php
    require_once("TurismoLibreria.php");
    require_once("TurismoManejaBD.php");
    require_once("TurismoDatosConexion.php");
    conecta_bd($mibd,$serv,$base,$usuario,$key);

    session_start();

    //Para saber si han introducido una insercion
    if(isset($_POST['nomciu'])){
        $nom_ciu = strtoupper($_POST['nomciu']);
        $hab = $_POST['habitantes'];
        $pais = $_POST['pais'];
        $mon = $_POST['monumentos'];
        if(comprueba_existe($mibd,$nom_ciu) > 0){
            $_SESSION["error"] = "duplicado";
            header('Location:TurismoInserta.php');
        }else inserta_ciudad($mibd,$nom_ciu,$hab,$pais,$mon);
 
        // 
    }

    //Para saber si han introducido un borrado
    if(isset($_POST['borra_ciudad'])){
        $nom_ciu=$_POST['borra_ciudad'];
        borra_ciudad($mibd,$nom_ciu);
    }

    //Para saber si han introducido un update
    if (isset($_POST['viejonombre'])){
        $viejonombre=$_POST['viejonombre'];
        $nuevonombre=strtoupper($_POST['nuevonombre']);
        if(comprueba_existe($mibd,$nuevonombre) > 0){
            $_SESSION["error"] = "duplicado";
            header('Location:TurismoActualiza.php');
        }else actualiza_ciudad($mibd,$nuevonombre,$viejonombre);
        
    }
    
    
?>
<html>
    <head>
        <title> Muestra ciudades </title>
        <link rel="stylesheet" href="estilos.css" />
    </head>
    <body class="ver">
        <h1> Muestra ciudades </h1>
        <div class="verciudad">

        <?php
            if(comprueba_bd($mibd)){
                echo "<h4 class='error'> La Base de Datos está vacía, inserte datos antes de visualizarlos</h4>";
                echo "<a class='error' href='TurismoPaginaPrincipal.html'>Volver al Inicio</a><br/><br/>";
            }else {
                echo "<br/>
                        <table>
                            <tr><th>ID</th><th>Nombre Ciudad</th><th>Habitantes</th><th>Pais</th><th>Monumentos</th><tr/>"; 
                imprime_ciudad($mibd);
                echo "</table>
                <a class='inicio' href='TurismoPaginaPrincipal.html'>Inicio</a>
                <br/><br/>";
            }
        ?>
        </div>
    </body>
</html>
