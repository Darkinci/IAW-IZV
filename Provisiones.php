<?php
    //Funcion crea_provisiones
    require_once("Provisiones.php");
    function crea_provisiones(&$array,$num_productos){
        $productos = array("Carne","Lechuga","Tomate","Maiz","Trigo","Zanahorias","Avena","Patatas");
        $elementos_usados = array();

        for($i=0; $i < $num_productos;$i++){
            
            $pos_alimento = array_rand($productos,1);
            $alimento = $productos[$pos_alimento];
            $array[$alimento] = mt_rand(0,300);
            unset($productos[$alimento]);
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
    ECHO "SOY UN WITLAS";

?>
