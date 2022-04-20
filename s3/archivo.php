<?php
    
    //Manejo de archivos
    // $archivo=fopen("C:/Users/Erick/Documents/Curso PHP CST/codes/s3/prueba.txt","w");
    // fwrite($archivo,"Esto es un texto que va para prueba.txt");
    // fwrite($archivo,"Ahora aparece este texto en el archivo");
    // fclose($archivo);
    // rename("prueba.txt","nuevo.txt");
    // copy("nuevo.txt","C:/Users/Erick/Documents/Curso PHP CST/codes/s2/nuevo.txt");
    // unlink("nuevo.txt");
    //mkdir("nueva",0777);
    $escaneo=scandir("C:/Users/Erick/Documents/Curso PHP CST/codes/s3");
    print_r($escaneo);
    $numeroArc=count($escaneo);
    echo "\n\n\t El directorio tiene $numeroArc archivos.";

    echo "\n\n";

?>