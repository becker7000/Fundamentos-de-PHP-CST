<?php

    echo "<pre>";
    $mensaje="<br> Me gustaria ser algun día un desarrollador backend con PHP.";
    echo $mensaje;
    echo strtoupper($mensaje);
    echo mb_strtoupper($mensaje);

    echo "<br>";
    $texto="    Curso de PHP    ";
    echo $texto;
    echo "<br>";
    /**
     * trim() quita espacios en ambos lados
     * ltrim() quita espacios sólo del lado izquierdo
     * rtrim() quita espacios sólo del lado derecho
     */
    $texto = rtrim($texto); 
    echo $texto;

?>