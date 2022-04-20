<?php

    do{ //Forma de filtrar un valor dentro de un rango.
        $n=(int)readline("Dame un numero entero entre 1 y 10: ");
    }while($n<1 || $n>10);

    // 4!=4*3*2*1=24 , 5!=5*4*3*2*1=120
    $factorial=1; //Las multiplicaciones normalmente se inician en 1.
    for($i=$n;$i>=1;$i--)
        $factorial*=$i;

    echo "\n\t $n ! = $factorial";


    echo "\n\n";

?>