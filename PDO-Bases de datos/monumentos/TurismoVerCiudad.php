<?php
    require_once("TurismoLibreria.php");
    require_once("TurismoManejaBD.php");
    require_once("TurismoDatosConexion.php");
    conecta_bd($mibd,$serv,$base,$usuario,$key);

    //En caso de vengamos por añadir ciudad
    if(isset($_POST["aniadeciudad"])){
        $aniadeCiudad =$_POST['aniadeciudad'];
        inserta_ciudad($mibd, $aniadeCiudad);
    }

    if(isset($_POST["borraciudad"])){
        $borraCiudad=$_POST["borraciudad"];
        $error= borra_ciudad($mibd,$borraCiudad);
        print_r($error);
    }
    ?>


    <html>
        <head>
            <title>Ver Monumentos</title>
            <link rel="stylesheet" href="estilos.css" />
        </head>
        <body>
            <h1> Pagina de ver las ciudades y monumentos </h1>
            <table>
                <caption> Muestra todo! </caption>
                <tr><th>Identificador</th><th>Nombre</th><th>Habitantes</th><th>Pais</th><th>Monumentos</th></tr>
                <?php imprime_ciudad($mibd) ?>
            </table>
        <a href='TurismoPaginaPrincipal.html'>Volver al Inicio </a>

    </html>
