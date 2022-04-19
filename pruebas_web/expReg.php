<?php

    $password='1234987678588';

    /**
     * La función preg_match me ayuda a verificar
     * si una cadena cumple con ciertos requisitos
     * de una expresion regular.
     */

    $centinela=preg_match('/^[0-9]{6,9}$/',$password);
    $centinela=(bool)$centinela;

    var_dump($centinela);

    echo "\n\n";
?>