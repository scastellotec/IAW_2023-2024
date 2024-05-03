<?php

    // Faltaria por hacer validación
    /*
        Aqui os he contado el rollo de SQL-Injection
    */

    if(empty($_REQUEST['texto'])
         or empty($_REQUEST['fecha_finalizacion'])
            or !isset($_REQUEST['nota'])){
        $mensaje_enviar = "Faltan parametros";

    }else if($_REQUEST['nota']<0 or $_REQUEST['nota']>10 ){
        $mensaje_enviar = $_REQUEST['nota']." esta fuera de rango";
    } else {
        $texto = $_REQUEST['texto'];
        $ffin = $_REQUEST['fecha_finalizacion'];

        echo $texto[0].$apellido.".".   ($ciclo)."@iaw.com";
        // Grabar en la BBDD

        // Crear una conexión
        include('conexionbbdd.php');

        // Construyo la consulta
        $sql = "insert into tareas (texto, estado, fecha_finalizacion, fecha_creacion) values ('$texto', 1, '$ffin', now())";

        // ejecuto la consulta
        $conn->query($sql);

        // Cierro la conexión
        $conn->close();

        $mensaje_enviar = 'Tarea grabada correctamente con nota '.$_REQUEST['nota'];
    }
    
    // Redirigir al formulario y un mensaje para el usuario
    session_start();
    $_SESSION['mensaje'] = $mensaje_enviar;
    echo $mensaje_enviar
    //header('Location: index.php');
?>