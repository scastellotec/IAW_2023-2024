<?php

    // Debería validad el ID que me envian

    // Recojo el ID a borar
    $idBorrar = $_REQUEST['idborrar'];

    // Conectarme a la BBDD
    $conn = new mysqli("localhost", "root", "", "examen2022"); // (IP servidor BBDD, usuario, password, nombre base de datos)

    // Construir SQL con DELETE...
    $sql = "delete from tareas where id=$idBorrar";

    // ejecuto la consulta
    $conn->query($sql);

    // Cierro la conexión
    $conn->close();

    // Una vez borrado redirigo a inicio
    session_start();
    $_SESSION['mensaje'] = 'Tarea borrada';
    header('Location: index.php');
?>