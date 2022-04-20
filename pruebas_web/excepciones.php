<?php

    try{
        $x=(int)readline("Escribe un numero: ");
        if($x===0)
            throw new Exception("\n\tNo puedes divir por cero pero no te preocupes, escribe otra vez el numero.\n\n");
        else
            echo "\n\t El reciproco es: ".(1/$x)."\n\n"; 
    }catch(Exception $ex){
        echo "\n\t Excepcion capturada: ".$ex->getMessage()."\n\n";
    }finally{
        echo "\n\t Esto es un finally\n";
    }

    // $x=(int)readline("Escribe un numero: ");
    // echo "\n\t El reciproco es: ".(1/$x)."\n\n";
    

?>