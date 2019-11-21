<?php
    //Funcion crea_provisiones
    require_once("Provisiones.php");
   /*function crea_provisiones(&$array,$num_productos){
        $productos = array("Carne","Lechuga","Tomate","Maiz","Trigo","Zanahorias","Avena","Patatas");

        for($i=0; $i < $num_productos;$i++){
            
            $pos_alimento = array_rand($productos,1);
            $alimento = $productos[$pos_alimento];
            $array[$alimento] = mt_rand(0,300);
            unset($productos[$alimento]);
        }
    }*/

    function crea_provisiones(&$array,$num_productos){
        $productos = array("Carne","Lechuga","Tomate","Maiz","Trigo","Zanahorias","Avena","Patatas");

        for($i=0;$i < $num_productos;$i++){
            $num_max = count($productos);
            $indice = mt_rand(0,$num_max);
            $producto = $productos[$indice];
            $array[$producto] = mt_rand(0,300);
            unset($productos[$indice]);
            if(isset($nuevo_productos)){
                unset($nuevo_productos);
            }
            foreach($productos as $prod){
                $nuevo_productos[] = $prod;
            }
            if(isset($nuevo_productos)){
                $productos = $nuevo_productos;
            }  
        }
    }

    // Funcion Imprime_prov

    function imprime_prov ($array_provisiones, $nombre_array){
        if($nombre_array == null){
            $nombre_edificio = "Edificio";
        }else $nombre_edificio = $nombre_array;

        Echo "<br/><p>El $nombre_edificio tiene:</p>";
        foreach($array_provisiones as $alimento => $cantidad){
            echo "<li>$cantidad de $alimento</li>";
        }     
    }

    // Funcion crea_ciudad

    function crea_ciudad(){
        $Granero = array();
        crea_provisiones($Granero,mt_rand(1,8));
        $Establo = array();
        crea_provisiones($Establo,mt_rand(1,8));
        $Molino = array();
        crea_provisiones($Molino,mt_rand(1,8));
        
        $ciudad_jorge = array("Granero" => $Granero,
                              "Establo" => $Establo,
                              "Molino" => $Molino
                            );
        return $ciudad_jorge;
    }


?>
