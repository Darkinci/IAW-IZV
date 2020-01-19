<?php
    function elegida ($cadena, $nombre, $pelicula){
        if($cadena == "correcto"){
            echo "<hr/><h1 class='victoria'> ENHORABUENA! </h2><hr/>";
            echo "<h2 class='final'> Has acertado la pelicula del Actor/Actriz Elegido/a</h3>";
            echo "<h2 class='menor'> La pelicula donde actua ' $nombre ' es '$pelicula'</h3><br/><br/><br/>";
            echo "<p class='final'><a href='EXA_1eval_pelis_2019_DAR.html'>Volver a jugar </a></p>";
        }else {
            echo "<hr/><h1 class='final'> OHHH LO SENTIMOS HAS FALLADO </h2><hr/>";
            echo "<h2 class='final'> Has fallado la pelicula del Actor/Actriz Elegido/a</h3>";
            echo "<h2 class='menor' > La pelicula donde actua ' $nombre ' NO es '$pelicula'</h3><br/><br/><br/>";
            echo "<p class='final'><a href='EXA_1eval_pelis_2019_DAR.html'>Volver a jugar </a></p>";
        }
    }
?>