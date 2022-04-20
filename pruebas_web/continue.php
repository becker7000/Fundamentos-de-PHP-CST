<?php

    $numero=0; // Sala 15.

    while($numero<=15){
        ++$numero;
        if($numero==13)
            continue;
        echo "\n\t Boleto vendido #$numero";
    }


    echo "\n\n";

?>