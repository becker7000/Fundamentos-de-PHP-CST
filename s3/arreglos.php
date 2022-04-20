<?php

    /**
     * La logica cero es empezar a contar desde cero.
     * 0,1,2,3,4,5,...
     */

    //        0, 1, 2, 3, 4 
    //$edades=[22,45,29,55,12];
    $edades=readline("Escribe las edades separadas por comas: ");
    $edades=explode(",",$edades);
    //implode hace lo contrario a explode...

    $suma=0;
    for($i=0;$i<count($edades);$i++){
        echo "\n\n ".$edades[$i];
        $suma+=$edades[$i];
    }

    $promedio=$suma/count($edades);
    echo "\n\t El promedio de las edades es: $promedio";    

    echo "\n\n";
?>