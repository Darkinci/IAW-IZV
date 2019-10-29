<?php
function mostrar_resul($num1,$num2,$num3){
    $suma = $num1 + $num2 + $num3;
    $multiplicacion = $num1 * $num2 * $num3;

    echo "El resultado de sumar $num1, $num2 y $num3 es -> $suma <br/>";
    echo "El resultado de multiplicar $num1, $num2 y $num3 es -> $multiplicacion<br/>";
}

function intercambia($s, $t){
    $cajon = $s;
    $s = $t;
    $t = $cajon;

    echo "Ahora, la variable \$e tiene el valor $s y la variable \$e tiene el valor $t<br/>";
}

//para pasar la posicion por referencia, hacemos &$s , &$t

function muestra_array($array){

    foreach($array as $indUno => $valor){
        if(is_array($valor)){
            foreach($valor as $indDos => $contenido){
                echo "<br/> La $contenido esta en la posicion ($indUno ,$indDos)";
            }
        }else echo "<br/> La $valor esta en la posicion $indUno";
    }  
}

function crea_array($longitud){
    for($i=0;$i <$longitud;$i++){
        $array[$i] = mt_rand(-100,100);
    }
    return $array;
}

function multiplica_array($array){
        $total = 1;
    foreach($array as $indice => $valor){
        $total = $array[$indice] * $total;
    }

    return $total;
}

function factorial ($numero){

    $almacen = $numero;
    $total = 1;

    if($numero < 1)
        echo "Introduce un numero mayor o igual que 1 porfavor!";
    else{
        for($numero; $numero > 1; $numero--){
            $total = $total * $numero;
        }
        echo "El factorial de $almacen es $total <br/> ";
    }

}

funcion 

?>