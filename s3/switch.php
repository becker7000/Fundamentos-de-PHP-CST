<?php

    $opcion=(int)readline("Opicion (1-4): ");

    switch($opcion){

        case 1: 
            echo "\n\t Hola soy la primera opcion";
            break;
        case 2:
            echo "\n\t Hola soy la segunda opcion";
            break;
        case 3:
            echo "\n\t Hola soy la tercera opcion";    
            break;
        case 4:
            echo "\n\t Hola soy la cuarta opcion";
            break;
        default: //El default es opcional.
            echo "\n\t Hola una opcion no contemplada";  
            break; //Se puede omitir el break.  

    }

    echo "\n\n";
?>