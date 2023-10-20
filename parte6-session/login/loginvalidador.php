<?php

    //TODO: Validar que llegan los parametros y no son vacios

    // Guardo en variables lo que recibo
    $nombre = $_REQUEST["nombre"];
    $pass = $_REQUEST["pass"];

    // Comprobar si el pass es correcto
    if($nombre == "alu" && $pass=="123"){
        session_start();
        
        $_SESSION["logged"] = true;
        $_SESSION["nombre"] = $nombre;

        // Si es correcto y redirijo a secreto.php
        header("Location: secreto.php");
    }else{
        // Si es incorrecto devuelvo a formulario
        header("Location: index.php");
    }
    
?>