<?php

    define("T1",0.987);
    $consumo=(float)$_POST['consumo'];
    $monto=T1*$consumo;

    echo "<pre>
    <h2>Calculadora CFE</h2>
    ";

    echo "<br> El total a pagar es: $$monto";
    echo "<br> Tarifa: $".T1." por kWh.";

?>