<?php

    /**
     * Estilo de naming camell case.
     */
    $sinIva=(float)readline("Escribe un monto sin I.V.A. => ");
    // 100 -> 100*0.16+100=116
    $conIva=$sinIva*0.16+$sinIva;
    echo "\n\t El monto con I.V.A. es: $conIva";

    echo "\n\n";

?>