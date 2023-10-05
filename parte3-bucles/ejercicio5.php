<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tabla de multplicar</h1>
    <?php
        $numero = 7;
        for($i=0; $i<=10; $i++){
            echo "$numero * $i = ".$numero*$i."<br/>";
        }
    ?>
</body>
</html>