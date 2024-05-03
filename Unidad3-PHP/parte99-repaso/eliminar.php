<?php
    // Recojo parametro ID
    $id = $_REQUEST["id"];
    
    // Me conecto a la BBDD
    include("conexion.php");

    // Construyo la consulta
    $sql = "DELETE FROM usuarios WHERE ID = $id";

    // Ejecuto
    $result = $conn->query($sql);

    // Cierro conexion
    $conn->close();

    // Preparo mensaje y redireccion a index
    session_start();
    $_SESSION['msg'] = "El usuario con id $id ha sido borrado";
    header("Location: index.php");

?>