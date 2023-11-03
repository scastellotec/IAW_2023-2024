<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="css/estilos.css"/>
</head>
<body>
    <h1>La tienda de Sergio</h1>
    <?php
            session_start();
            // Compruebo si existe el mensaje (en la primera carga no existira)
            if(isset($_SESSION['msg'])){
                echo "<h1>".$_SESSION['msg']."</h1>"; // Muestro el mensaje
                unset($_SESSION['msg']); // Lo borro para que no siga apareciendo
            }
        ?>