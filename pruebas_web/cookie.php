<?php

    session_start();

    $usuario=$_POST['usuario'];
    $correo=$_POST['correo'];

    echo "
        <pre>
        <h2>Gracias por enviar tus datos</h2><br>
        <p>Nosotros nos comunicamos contigo</p><br>
        Datos guardados: <br>
        Usuario: $usuario <br>
        Correo: $correo <br>
    ";

    //Creacion de una cookie:
    //setcookie("email",$correo,time()+86400);
    //Eliminacion de la misma cookie:
    //setcookie("email",$correo,time()-86400);
    // echo "<br> Hemos guardado una cookie de tu correo: ".$_COOKIE['email'];

    $_SESSION['nameUser']=$usuario;

    echo "\n\t Bienvenido ".$_SESSION['nameUser'];

    session_unset();
    

?>