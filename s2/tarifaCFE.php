<?php

    define("T1",0.987);

    $consumo=(float)readline("Escriba su consumo (kWh): ");
    $monto=T1*$consumo;

    echo "\n\t El monto a pagar es: $monto";
    echo "\n\n";

?>