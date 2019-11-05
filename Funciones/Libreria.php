<?php

//Funcion que muestra el resultado de sumar y multiplicar 3 valores
function mostrar_resul($num1,$num2,$num3){
    $suma = $num1 + $num2 + $num3;
    $multiplicacion = $num1 * $num2 * $num3;

    echo "El resultado de sumar $num1, $num2 y $num3 es -> $suma <br/>";
    echo "El resultado de multiplicar $num1, $num2 y $num3 es -> $multiplicacion<br/>";
}

//Funcion que intercambia por valor
function intercambia($s, $t){
    $cajon = $s;
    $s = $t;
    $t = $cajon;

    echo "Ahora, la variable \$e tiene el valor $s y la variable \$e tiene el valor $t<br/>";
}

//Funcion que intercambia por referencia
function intercambia_ref(&$e,&$d){
    $cajon = $e;
    $e = $d;
    $d = $cajon;

    echo "Ahora, la variable \$e tiene el valor $e y la variable \$e tiene el valor $d<br/>";
}



//Funcion que crea arrays por referencia
function crea_array(&$a ,$longitud){
    for($i=0;$i <$longitud;$i++){
        $a[] = mt_rand(-100,100);
    }
}

//Funcion que muestra el array de longitud variable y de tamaño 1dimensional o 2dimensional
function muestra_array($array){

    foreach($array as $indUno => $valor){
        if(is_array($valor)){
            foreach($valor as $indDos => $contenido){
                echo "<br/> La $contenido esta en la posicion ($indUno ,$indDos)";
            }
        }else echo "<br/> La $valor esta en la posicion $indUno";
    }  
}

//Funcion que multiplica los valores del array y lo muestra por pantalla
function multiplica_array($array){
        $total = 1;
    foreach($array as $indice => $valor){
        $total = $array[$indice] * $total;
    }

    return $total;
}


//Funcion que hace el factorial
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

//Funcion de fibonacci

function fibonnacci($longitud){
    
    $fibonacci = array();
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;
 
    for ($i = 2; $i < $longitud; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
 
    echo "Los valores de Fibonnaci de longitud $longitud <br/>";
    for($i=0; $i <$longitud;$i++){
        echo "$fibonacci[$i] ";
    }

}
?>