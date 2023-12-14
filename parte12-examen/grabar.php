<?php

    // Me aseguro que existe un mensaje;
    $mensaje = "";
    session_start();

    // Validamos datos
    if(!empty($_REQUEST['nombre']) && !empty($_REQUEST['apellido']) &&
        !empty($_REQUEST['ciclo'])){

        // Recoger datos
        $nombre = $_REQUEST['nombre'];
        $apellido = $_REQUEST['apellido'];
        $ciclo = $_REQUEST['ciclo'];

        $ciclo = Strtoupper($ciclo);

        // Valido que el ciclo es correcto
        if ($ciclo == "ASIR" || $ciclo == "DAM"){
            // Muestro por pantalla
            echo "Nombre: $nombre <br/>";
            echo "Apellido: $apellido <br/>";
            echo "Ciclo: $ciclo <br/>";

            // Genero un email usando la información del usuario
            $email = generarEmail($nombre, $apellido, $ciclo);
            echo "Email: $email <br/>";

            // Guardo en la BBDD el usuario
            include("bbdd.php");
            // Construyo la consulta
            $sql = "insert into usuarios (nombre,apellido,ciclo,email,estado,ultima_modificacion) values ('$nombre', '$apellido', '$ciclo', '$email', 1, now())";
            // ejecuto la consulta
            $conn->query($sql);
            // Cierro la conexión
            $conn->close();

            $mensaje = "Usuario creado $email";

        } else {
            $mensaje = "Error en el ciclo";
        }

    } else {
        $mensaje = "Error en los parámetros";
    }

    function generarEmail($n, $a, $c){
        $resultado = $n[0] . $a;
        $resultado = Strtolower($resultado) . $c . "@iaw.com";
        return $resultado;
    }

    $_SESSION['mensaje'] = $mensaje;
    header("Location: index.php");
?>