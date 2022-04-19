<?php

    define("PI",3.141592);

    echo "\n\t El valor de PI es: ".PI;
    // PI=2.71; PI es una constante, por lo tanto esto sería un error.

    echo "\n\n";
    $radio=(float)readline("Escribe el radio de un circulo: ");
    $area=PI*pow($radio,2);
    $perimetro=PI*2*$radio;

    echo "\n\t El área es: $area";
    echo "\n\t El perímetro es: $perimetro";

    echo "\n\n";

?>