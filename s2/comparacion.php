<?php

    $a="5"; //Cadena
    $b=7; //Entero
    $c=7;
    $comparacion=($a==$b); //Compara unicamente los valores
    var_dump($comparacion);

    $comparacion=($a===$b); //Compara además el tipo.
    var_dump($comparacion);

    $comparacion=($b>$c);
    var_dump($comparacion);

    /**
     * Un caso de uso de este operador es el ordenamiento 
     * de datos en un arreglo.
     */
    echo "\n NAVE ESPACIAL <=> \n";
    $x=4;
    $y=5;
    $comp=($x<=>$y);
    var_dump($comp);

    /**
     * Operador fusión a NULL
     */

    echo "\n Fusión a NULL\n";
    var_dump($t ?? $x);

    echo "\n\n";

?>