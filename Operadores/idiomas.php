<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image" href="D:\2º ASIR A\IAW - Ruth Galera\Clase\Icono\ico.png" />
    <title> Operador: Switch con Case </title>
</head>
<body style="background-color:#d8ffd5">
    <h1 style="color:#2e9616;text-align:center"> EXERCISE: LANGUAJES </h1>
    <h1 style="color:#FF6C00;text-align:center"> By Jorge Ortega 2019/20 </h1>
    <?php

        echo "<h2 style='color:blue;text-align:center'> LEARN TO SAY HI! </h2>";

        $lenguaje = "Holandes";

        switch ($lenguaje){
            case "Español";
            case "español":
                echo "<h3 style='color:red;text-align:center;'>En español, decimos HOLA! :D </h3>";
                break;
            case "ingles";
            case "Ingles":
                echo "<h3 style='color:green;text-align:center;'>In english, we say HELLO! :D </h3>";
                break;
            case "frances";
            case "Frances":
                echo "<h3 style='color:purple;text-align:center;'>En français, on dit BONJOUR! :D </h3>";
                break;
            case "aleman";
            case "Aleman":
                echo "<h3 style='color:blue;text-align:center;'>Auf Deutsch, sagen wir HALLO! :D </h3>";
                break;
            case "holandes";
            case "Holandes":
                echo "<h3 style='color:orange;text-align:center;'>In het Nederlands zeggen, we HALLO! :D </h3>";
                break;
            default:
                echo "<h3 style='text-align:center;'>No tenemos una traduccion conocida para ese idioma, perdona las molestias. </h3>";
                break;
        }