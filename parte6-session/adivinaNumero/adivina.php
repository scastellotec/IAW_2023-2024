<?php

    // Inicio sesion para poder guardar informatcion
    session_start();

    // Faltaria por validar que el usuario me envia un numero   

    // Recupero el numero que me envia el usuario
    $numeroUsuario = $_REQUEST['numero'];

    // Si el numero aleatorio todavia no ha sido generado, lo genero
    if(isset($_SESSION['numeroAleatorio']) != true || isset($_REQUEST['nueva'])){
        //Genero el numero
        $numeroAleatorio = rand(1,100);
        //Lo guardo en sesion para el futuro
        $_SESSION['numeroAleatorio'] = $numeroAleatorio;
        // Pongo el contador de intentos a 0
        $_SESSION['intentos'] = 1;
        // Guardo información de los numeros intentados
        $_SESSION['numerosProbados'] = [];
        $_SESSION['numerosProbados'][] = $numeroUsuario;
    } else {
        // Si ha sido generado lo recupero
        $numeroAleatorio = $_SESSION['numeroAleatorio'];
        $_SESSION['intentos']++;
        $_SESSION['numerosProbados'][] = $numeroUsuario;
    }

    if($numeroUsuario == $numeroAleatorio){
        $mensaje = "Has acertado. Num usuario $numeroUsuario - Num aleatorio $numeroAleatorio - Intentos:".$_SESSION['intentos'];
    }else{
        $mensaje = "Has fallado. Num usuario $numeroUsuario - Num aleatorio $numeroAleatorio - Intentos:".$_SESSION['intentos'];
    }

    $_SESSION['msg'] = $mensaje;

    // Me redirige automaticamente a la pagina inicial
    header("Location: index.php");

?>