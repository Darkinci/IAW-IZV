<?php
    session_start();
?>
<html>
        <head>
            <title> Login </title>
        </head>
        <body style="background-color:lightseagreen;">
            <table border="1px" align="center" cellpadding="15">
                <tr><th><h2>Prueba de Login</h2></th></tr>
                <tr><td>
                <form action="login_verificador.php" method="post">
                    USUARIO: <input type="text" name="usuario" placeholder="Jorge"/><br/><br/>
                    PASSWORD: <input type="password" name="password" placeholder="******"/><br/><br/>
                    <input type="submit" value="Loguear"/>
                    <input type="reset" value="Reset"/>
                </form>
                </td></tr>
            </table>

            <div align="center" style="color:red; font-size: medium; font-weight:bald;">
                <?php
                    echo "<br/>";
                    if(isset($_SESSION["error"])){
                        if($_SESSION["error"] == "error"){
                            echo "Por favor, introduce bien los datos";
                        }else echo "Las credenciales son incorrectas";
                    }
                ?>
            </div>
        </body>
</html>

