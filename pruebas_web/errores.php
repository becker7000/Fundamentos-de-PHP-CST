<?php

    //Funciones para el control de error.
    ini_set("display_errors", 2); // 1 quiere decir: mostrar.
    ini_set("log_errors", 1); // Con esta linea iniciar un nuevo archivo de errores.
    ini_set("error_log", "C:/wamp64/www/pruebas_web/php_error.log");

    //Esta función no existe, fatal error.
    echo sumar(10,12);

    //División por cero, warning.
    //$x=3;
    //echo $x/0;

    //Olvidando punto y coma, parse error.
    echo "Hola";
    echo " Mundo";


?>