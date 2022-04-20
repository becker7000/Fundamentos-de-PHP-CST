<?php

    /**
     * Se genera una matriz de 3x3 llena de numero aleatorios
     * i representa las filas 
     * j las columnas
     * por cada fila damos un salto de linea
     * por cada columna damos una tabulacion
     */

    $n=(int)readline("Dame el rango de la matriz: ");

    for($i=0;$i<$n;$i++){ // $i filas
        echo "\n";
        for($j=0;$j<$n;$j++){ // $j columnas
            $matrix[$i][$j]=rand(10,50);
            echo "\t".$matrix[$i][$j];
        } 
    }

    echo "\n\n";

?>