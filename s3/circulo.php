<?php

    function areaCirculo($radio){
        $area=M_PI*pow($radio,2);
        return $area;
    }

    for($i=1;$i<=10;$i++)
        echo "\n\t El area del circulo es: ".areaCirculo($i);

    echo "\n\n";

?>