<?php

    //Funcion str_replace
    $telefono="5512218902";

    //Códificando un numero telefonico:
    $telefono=str_replace("2","*",$telefono);

    echo "\n\t $telefono";

    //Funcion strip_tags
    $formateado="<br> <br> <h3> Esto es un mensaje con HTML </h3>";
    echo $formateado;

    /**
     * La funcion strip_tags es incluso una medida 
     * de seguridad informatica para la captación
     * de datos a través de formularios.
     */
    $formateado=strip_tags($formateado);
    echo $formateado;

    echo "\n\n";
?>