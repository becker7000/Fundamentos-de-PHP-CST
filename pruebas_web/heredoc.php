<?php

    /**
     * Sintaxis heredoc, heredoc es a las
     * comillas dobles lo que que nowdoc es 
     * a las comillas simples.
     */

    $x=10;
    $cadena=<<<IOF
        <pre>
        <br> Esto es un texto
        <br> que permite dar saltos de linea
        <br> me permite mostrar el valor de x=$x 
        IOF;
    
    echo $cadena;

?>