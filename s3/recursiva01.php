<?php

    //4!=4*3!
    //4!=4*3*2!
    //Caso base 1!=1
    // 0!=1

    function factorial($n){ //La recursiva evita los ciclos.
        if($n===0)
            return 1; //Caso base
        if($n===1)
            return 1; //Caso base
        if($n>1)
            return $n*factorial($n-1); //Llamada recursiva
    }

    /*
        5!=5*4!
        5!=5*4*3!
        5!=5*4*3*2!
        5!=5*4*3*2*1!
        5!=5*4*3*2*1
        5!=5*4*3*2
        5!=5*4*6
        5!=5*24
        5!=120
    */

    echo "\n\t 0 ! = ".factorial(0);
    echo "\n\n";

?>