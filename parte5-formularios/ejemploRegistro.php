<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Muestro el contenido que llega a esta pagina
        var_dump($_REQUEST);

        $nombre = $_REQUEST['nombre'];
        $email = $_REQUEST['email'];
        
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