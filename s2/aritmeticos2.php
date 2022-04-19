<?php

    // 130 segundos son 2 minutos con 10 segundos
    $segundos=(int)readline("Segundos: ");

    $minutos=(int)($segundos/60);
    $segundos=$segundos%60;

    echo "\n\t Los segundos de entrada son equivalentes a: ";
    echo "\n\t $minutos minutos con $segundos segundos.";

    echo "\n\n";

?>