<?php

    /**
     * Si la variable var cambia tambien lo hara
     * la variable ref, cosa que no pasaria
     * sin usar referencias.
     */
    $var="Hola";
    $ref=&$var;
    $var="Mundo";

    echo $ref."\n";

?>