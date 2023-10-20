<?php

    // muestro lo que recibo en el request
    //var_dump($_REQUEST);
    $mensaje = "";

    if(isset($_REQUEST['nombre']) && !empty($_REQUEST['nombre'])){
        $nombre = $_REQUEST['nombre'];
        $mensaje = "Hola, te llamas $nombre";
    } else {
        $mensaje = "Parametros insuficientes";
    }

    // Inicio sesion para poder enviar informacion a la siguiente pagina
    session_start();
    $_SESSION['msg'] = $mensaje;

    //echo $mensaje;
    header("Location: ejemplo1.php");

    

?>