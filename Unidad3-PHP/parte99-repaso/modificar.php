<?php
    // Recojo parametro ID
    $id = $_REQUEST["id"];
    $nombre = $_REQUEST["nombre"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];

    
    // Me conecto a la BBDD
    include("conexion.php");

    // Construyo la consulta
    $sql = "UPDATE usuarios SET nombre = '$nombre', email = '$email', password = '$password', ultima_modificacion = now() WHERE ID = $id";

    // Ejecuto
    $result = $conn->query($sql);

    // Cierro conexion
    $conn->close();

    // Preparo mensaje y redireccion a index
    session_start();
    $_SESSION['msg'] = "El usuario con id $id ha sido modificado";
    header("Location: index.php");

?>