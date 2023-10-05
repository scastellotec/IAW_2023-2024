<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registrate en nuestra web</h1>
    <form action="ejemplo1.php" method="GET">
        <label for="nombre">Nombre:</label>
        <input id="nombre" type="text" name="nombre"><br/>
        <label for="email">Email:</label>
        <input id="email" type="text" name="email"><br/>
        <label for="condiciones">Aceptar condiciones:</label>
        <input id="condiciones" type="checkbox" name="condiciones"><br/>

        <input type="submit">
    </form>
    <?php
        if(isset($_REQUEST['nombre'])){
            $nombre = $_REQUEST['nombre'];
        }else {
            $nombre = "Nombre no proporcionado";
        }
        if(isset($_REQUEST['email'])){
            $email = $_REQUEST['email'];
        }else {
            $email = "Email no proporcionado";
        }  
        if(isset($_REQUEST['condiciones'])){
            $condiciones = $_REQUEST['condiciones'];
        } else {
            $condiciones = "No se han aceptado";
        }

        echo "<p> Tu nombre es: $nombre</p>";
        echo "<p> Tu email es: $email</p>";
        echo "<p> Condicinoes: $condiciones</p>";
    ?>
</body>
</html>