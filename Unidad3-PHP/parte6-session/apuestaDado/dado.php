<?php
    session_start();

    // Recojo la apuesta que envia el usuario
    $numeroUsuario = $_REQUEST['numero'];
    $apuestaUsuario = $_REQUEST['apuesta'];
    
    // Recupero los creditos si el usuario ya ha jugado o es nuevo
    if(isset($_SESSION['creditos'])){
        $creditosUsuario = $_SESSION['creditos'];
    }else {
        $creditosUsuario = 100;
    }

    // Genero numero aleatorio
    $numeroAleatorio = rand(1,6);

    // Calculo si gana o pierde
    if($numeroUsuario == $numeroAleatorio){
        $creditosUsuario = $creditosUsuario + $apuestaUsuario*2;
    }else{
        $creditosUsuario = $creditosUsuario - $apuestaUsuario;
    }

    // Guardo la informacino en sesino
    $_SESSION['creditos'] = $creditosUsuario;

    header("Location: index.php");
?>