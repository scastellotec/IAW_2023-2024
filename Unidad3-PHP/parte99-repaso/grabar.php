<?php

    function sonIguales($a, $b){
        if ($a==$b){
            return true;
        }else{
            return false;
        }
    }

    function daFormatoNombre($a){
        $a = strtolower($a);
        $a = ucfirst($a);
        return $a;
    }

    // Muestro todos los datos que recibo
    var_dump($_REQUEST);

    // Variable para guardar el mensaje de ERROR u OK
    $mensaje = "";

    // Validaciones: Recibo los parametros y no estan vacios
    if(empty($_REQUEST['nombre']) || empty($_REQUEST['email']) ||
            empty($_REQUEST['password']) || empty($_REQUEST['confirm_password'])){

                $mensaje = "Error en los parametros";
    }else{
        // Recibo todos los parametros y reviso otras validaciones
        $nombre = $_REQUEST['nombre'];
        $nombre = daFormatoNombre($nombre); //Uso la función
        $email = $_REQUEST['email'];
        $email = strtolower($email);
        $pass1 = $_REQUEST['password'];
        $pass2 = $_REQUEST['confirm_password'];

        //Compruebo que el nombre tiene la longitud minima
        if(strlen($nombre) <= 2){
            $mensaje = "Nombre muy corto";
        }else{
            if(sonIguales($pass1, $pass2) == false){
                $mensaje = "Contraseña distintas";
            } else{
                // Todas las validacinoes han ido bien y lo quiero guardar en BBDD

                // Me conecto a la base de datos
                include ('conexion.php');

                // Construyo la consulta a realizar
                $sql = "insert into usuarios (email, nombre, password, ultima_modificacion) values ('$email', '$nombre', '$pass1', now())";
                //echo $sql;

                // Ejecuto la consulta
                $conn->query($sql);

                // Cierro la conexión
                $conn->close();

                // Genero un mensaje para el usuario
                $mensaje = "El usuario '".$nombre."' creado correctamente";
            }
        }
    }

    session_start();
    $_SESSION['msg'] = $mensaje;
    header("Location: index.php");
?>