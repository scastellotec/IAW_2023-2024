<?php
    session_start();
    
    // Borraria toda la sesion, y puede que en algun caso nos genere problemas
    //session_destroy();

    unset($_SESSION['numerosGuardados']);

    header("Location: index.php");

?>