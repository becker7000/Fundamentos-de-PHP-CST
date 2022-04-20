<?php

    $i=1; //Varible de control

    $n=(int)readline("Escribe la tabla de multiplicar deseada: ");

    while($i<=10){
        echo "\n\t  $i * $n = ".($i*$n);
        $i++; //Incremento
    }

    echo "\n\n";

?>
