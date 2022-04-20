<?php

    $opcion=(int)readline("Opicion (1-4): ");

    if($opcion===1)
        echo "\n\t Hola soy la primera opcion";
    elseif($opcion===2)
        echo "\n\t Hola soy la segunda opcion";
    elseif($opcion===3)
        echo "\n\t Hola soy la tercera opcion";
    elseif($opcion===4)
        echo "\n\t Hola soy la cuarta opcion";
    else    
        echo "\n\t Hola soy una opcion no contemplada!";

    echo "\n\n";
?>