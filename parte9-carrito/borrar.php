<?php
    session_start();

    $posicionBorrar = $_REQUEST['id'];

    $numeroGuardadosLocal = $_SESSION['numerosGuardados'];

    unset($numeroGuardadosLocal[$posicionBorrar]);

    $_SESSION['numerosGuardados'] = $numeroGuardadosLocal;

    header("Location: index.php");

?>