<?php
    session_start();

    if(empty($_POST["usuario"]) or empty($_POST["password"])){
        $_SESSION["error"] ="error";
        header('Location:login_inicio.php');
    }else{
        if(($_POST["usuario"] == "Darkinci") && ($_POST["password"] == "jorge")){
            $_SESSION["nombre"] = $_POST["usuario"];
            $_SESSION["password"] == $_POST["password"];
            header('Location:login_correcto.php');
        }else{
            $_SESSION["error"] ="mal_login";
            header('Location:login_inicio.php');
        }
    }
?>