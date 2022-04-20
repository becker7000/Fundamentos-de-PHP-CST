<?php

    /**
     * Numeros de Fibonacci: 0,1,1,2,3,5,8,13,21,34,...
     * Posición:             0,1,2,3,4,5,6,7,8
     */

    function fib($n){
        if($n===0 || $n===1)
            return $n; //Caso base
        else
            return fib($n-1)+fib($n-2); //Llamada recursiva
    }

    /**
     * fib(4)=fib(3)+fib(2)=fib(2)+fib(1)+fib(1)+fib(0)
     *                     = fib(1)+fib(0)+1+1+0 
     *                     = 1+0+1+1=3
     */

    for($i=0;$i<=10;$i++)
        echo "\n\t ".fib($i);

    echo "\n\n";

    /**
     * Reto: Hacer funciones recursivas ahora para
     * la sucesion de Padovan y la sucesion de Perrin.
     */

?>