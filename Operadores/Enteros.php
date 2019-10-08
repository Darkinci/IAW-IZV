<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image" href="D:\2º ASIR A\IAW - Ruth Galera\Clase\Icono\ico.png" />
    <title> Operador: BOOL & RESULT </title>
</head>
<body style="background-color:#d8ffd5">
    <h1 style="color:#2e9616;text-align:center"> EXERCISE: BOOL & RESULTS </h1>
    <h1 style="color:#FF6C00;text-align:center"> By Jorge Ortega 2019/20 </h1>
    <?php

    /* 
        C y D -> int
        A y B -> bool
        *************
        A & B == true -> C * D
        A & B == false -> C + D
        A == true y B == false -> C -D
        A == false y B == true -> D -C
    */

    echo "<h2 style='color:#ffd000;text-align:center'> ***************************************</h2>";
    echo "<h2 style='color:blue;text-align:center'> Problems with IF-ELSE and MATHS! </h2>";

    $A = true;
    $B = true;
    $C = 4;
    $D = 3;

    /* NO ES OPTIMO!
    if(($A == true) & ($B == true)){
        $res=$C * $D;   
        echo "Como \$A es true y \$B es true, ahora \$C y \$D vale $res";
    }elseif (($A == true) & ($B == false)){
            $res=$C - $D;
            echo "Como \$A es true y \$B es false, ahora \$C y \$D vale $res";
        }elseif(($A == false) & ($B == true)){
                $res = $D - $C;
                echo "Como \$A es false y \$B es true, ahora \$C y \$D vale $res";
            }else{
                    $res= $C + $D;
                    echo "Como \$A es false y \$B es false, ahora \$C y \$D vale $res";
                }
    
    */

    
    if($A){
        if($B){
            $res=$C * $D;   
            echo "Como \$A es true y \$B es true, ahora \$C y \$D vale $res";
        }else{
                $res=$C - $D;
                echo "Como \$A es true y \$B es false, ahora \$C y \$D vale $res";
            } 
    }else{
        if($B){
            $res = $D - $C;
            echo "Como \$A es false y \$B es true, ahora \$C y \$D vale $res";
        }else{
                $res= $C + $D;
                echo "Como \$A es false y \$B es false, ahora \$C y \$D vale $res";
        }
    }   
   

    ?>
</body>
</html>

    