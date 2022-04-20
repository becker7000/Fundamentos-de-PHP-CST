<?php

    $edad=(int)readline("Edad: ");
    $altura=(float)readline("Altura: ");
    
    if($edad>=18){
        echo "\n\t Eres mayor de edad ";
        if($altura>=1.5)
            echo "y puedes subir a la montaña rusa.";
        else
            echo "pero no puedes subir a la montaña rusa.";
    }
    else{
        echo "\n\t Como eres menor no puedes subir ";
        if($altura>=1.5)
            echo " pero puedes ir a los juegos tipo A.";
        else
            echo "pero puedes ir a los juegos tipo B.";


    }
        

    echo "\n\n";
?>