<?php

    /**
     * Los slug nos sirven para generar URL's amigables
     */
    $cadena=readline("Escribe algo: ");
    $cadena=str_replace(" ","-",$cadena);
    echo "\n\t $cadena";

    echo "\n\n";

?>