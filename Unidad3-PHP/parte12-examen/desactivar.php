<?php
    session_start();

    //Recibo el id
    $id = $_REQUEST['id'];
    // Conecto a la BBDD
    include("bbdd.php");
    // Construyo la consulta
    $sql = "update usuarios set estado=2 where id = $id";
    // ejecuto la consulta
    $conn->query($sql);
    // Cierro la conexión
    $conn->close();

    $mensaje =  "Usuario $id desactivado";

    $_SESSION['mensaje'] = $mensaje;
    header("Location: index.php");
?>