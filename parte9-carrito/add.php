<?php
    $numero = $_REQUEST['numeroNuevo'];

    session_start();

    // Declaramos un nuevo array vacio
    $numeroGuardadosLocal = array();

    // Si ya existe el array con numero en sesion lo recupero
    // para no sobreescribirlo
    if(isset( $_SESSION['numerosGuardados'])){
        $numeroGuardadosLocal = $_SESSION['numerosGuardados'];
    }

    // Añado el nuevo numero al final de la lista
    $numeroGuardadosLocal[] = $numero;

    $_SESSION['numerosGuardados'] = $numeroGuardadosLocal;

    header("Location: index.php");

?>