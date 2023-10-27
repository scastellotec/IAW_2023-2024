<?php

    // Debería validad el ID que me envian

    // Recojo el ID a borar
    $idmodificar = $_REQUEST['idmodificar'];

    // Conectarme a la BBDD
    //$conn = new mysqli("localhost", "root", "", "examen2022"); // (IP servidor BBDD, usuario, password, nombre base de datos)
    include('conexionbbdd.php');

    // Construir SQL con DELETE...
    $sql = "UPDATE tareas set estado=2 where id=$idmodificar";

    // ejecuto la consulta
    $conn->query($sql);

    // Cierro la conexión
    $conn->close();

    // Una vez borrado redirigo a inicio
    session_start();
    $_SESSION['mensaje'] = 'Tarea modificada';
    header('Location: index.php');
?>