<?php

    $a = 10;
    $b = 20; 
    $c = 5;
    $a = $a + 3; // a=10+3=13 
    $b = $b + 4 - $a; // b=20+4-13=24-13=11
    $c = $a + $b + $c; // c=13+11+5=29
    $a = $a + $c; // a=13+29=42
    $b = 4; // b=4
    $c = $c + 3 - $b + 2;  //c=29+3-4+2=30

    echo "\n a = $a , b = $b y c = $c";
    echo "\n\n";

?>