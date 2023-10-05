<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "INICIO var_dump: </br>";
        var_dump($_SERVER);
        echo "FIN var_dump: </br>";

        echo "<ul>";
        echo "<li>IP Servidor: ".$_SERVER['SERVER_ADDR']."</li>";
        echo "<li>Nombre: ".$_SERVER['SERVER_NAME']."</li>";
        echo "<li>Software: ".$_SERVER['SERVER_SOFTWARE']."</li>";
        echo "<li>User agent: ".$_SERVER['HTTP_USER_AGENT']."</li>";
        echo "<li>IP Cliente: ".$_SERVER['REMOTE_ADDR']."</li>";
        echo "</ul>";
    ?>
</body>
</html>