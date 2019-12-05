<?php
    session_start();
    
    if(empty($_POST["nombre"]) or empty($_POST["edad"])){
        $_SESSION["error"] ="error";
        header('Location:index.php');
    }else{
        if($_POST["edad"] >= 18){
            if($_POST["sexo"] == "Mujer"){
                $_SESSION["sexo"] = "Mujer";
                $_SESSION["nombre"] = $_POST["nombre"];
                $_SESSION["edad"] = $_POST["edad"];
                header('Location:file_mujer.php');
            }else{
                    $_SESSION["sexo"] = "Hombre";
                    $_SESSION["nombre"] = $_POST["nombre"];
                    $_SESSION["edad"] = $_POST["edad"];
                    header('Location:file_hombre.php');
            }
        }else{
            $_SESSION["edad"] = "menor";
            header('Location:index.php');
        } 
    }
?>

