<?php
    session_start();

    $actor = $_SESSION["actor_elegido"];
    $_SESSION["peli_elegida"] = $_POST["pelicula"];
    $peli = $_POST["pelicula"];

    if(empty($_POST["pelicula"])){
        $_SESSION["error"] ="peli_vacia";
        header('Location:nada_DAR.php');
    }else{
        if($actor == "Brad Pitt" and $peli =="Seven"){
            $_SESSION["salida"] = "correcto";
            header('Location:pantalla_final_DAR.php');
        }elseif($actor == "Tom Cruise" and $peli == "Misión Imposible"){
            $_SESSION["salida"] = "correcto";
            header('Location:pantalla_final_DAR.php');
        }elseif($actor == "Angelina Jolie" and $peli == "Tomb Raider"){
            $_SESSION["salida"] = "correcto";
            header('Location:pantalla_final_DAR.php');
        }elseif($actor == "Jennifer Aniston" and $peli == "Exposados"){
            $_SESSION["salida"] = "correcto";
            header('Location:pantalla_final_DAR.php');
        }elseif($actor == "Scarlett Johansson" and $peli == "Match Point"){
            $_SESSION["salida"] = "correcto";
            header('Location:pantalla_final_DAR.php');
        }elseif($actor == "Will Smith" and $peli == "Men in black"){
            $_SESSION["salida"] = "correcto";
            header('Location:pantalla_final_DAR.php');
        }elseif($actor == "Julia Roberts" and $peli == "Pretty woman"){
            $_SESSION["salida"] = "correcto";
            header('Location:pantalla_final_DAR.php');
        }elseif($actor == "George Clooney" and $peli == "Tres reyes"){
            $_SESSION["salida"] = "correcto";
            header('Location:pantalla_final_DAR.php');
        }elseif($actor == "Bruce Willis" and $peli == "El sexto sentido"){
            $_SESSION["salida"] = "correcto";
            header('Location:pantalla_final_DAR.php');
        }elseif($actor == "Nicole Kidman" and $peli == "The others"){
            $_SESSION["salida"] = "correcto";
            header('Location:pantalla_final_DAR.php');
        }else{
            $_SESSION["salida"] = "incorrecto";
        } header('Location:pantalla_final_DAR.php');
    }
?>