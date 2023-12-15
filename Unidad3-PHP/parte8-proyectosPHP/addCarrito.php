<?php
    // Hago lo que sea para añadir en sesion
    session_start();

    $_SESSION['msg'] = "Añadido al carrito";

    //Redirigo de vuelta a la pagina de productos
    Header("Location: index.php");
?>