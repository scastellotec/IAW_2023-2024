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

        /*
            con isset() valido que me llega el parametros GET o POST
            con empty() valido que el parametro que llega no esta vacio
            !empty() con el simbolo ! digo lo contrario, es decir, no esta vacio
        */
        if(isset($_REQUEST['nombre']) && isset($_REQUEST['email'])
            && !empty($_REQUEST['nombre']) && !empty($_REQUEST['email'])){
                
                // Recojo los valores en variables
                $nombre = $_REQUEST['nombre'];
                $email = $_REQUEST['email'];

                //asegurar que los textos estan en "bonito"
                $nombre = strtolower($nombre);
                $nombre = ucfirst($nombre);
                $email = strtolower($email);

                echo "<p>Tu nombre es $nombre y tu email es $email</p>";

        } else {
            echo "<p>Faltan parametros</p>";
        }

    ?>
</body>
</html>