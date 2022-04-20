<?php

    //Arreglos asociativos usan una clave en ves de un indice.
    $capitales=array(
        "Hidalgo"=>"Pachuca",
        "Jalisco"=>"Guadalajara",
        "Michoacan"=>"Morelia",
        "Guerrero"=>"Chilpancingo"
    );

    foreach($capitales as $estado => $capital)
        echo "\n\t $capital es capital de $estado";

?>