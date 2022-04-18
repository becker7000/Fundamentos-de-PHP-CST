<?php

    $decimal=(float)readline("Escribe un numero flotante: ");
    $parteEntera=(int)$decimal;
    $parteDecimal=$decimal-$parteEntera;

    echo "\n\t La parte entera es: $parteEntera";
    echo "\n\t La parte despues del punto decimal es: $parteDecimal";
    
    echo "\n\n";

?>