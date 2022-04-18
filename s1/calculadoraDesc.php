<?php

    $monto=(float)readline("Monto sin descuento: ");
    $descuento=(float)readline("Porcentaje a descontar: ");
    // 200, 10% -> 200 - 200*(10/100) = 180
    $montoConDesc= $monto - $monto*($descuento/100);

    echo "\n\t El monto $monto con el descuento del $descuento % es: $montoConDesc";

    echo "\n\n";

?>