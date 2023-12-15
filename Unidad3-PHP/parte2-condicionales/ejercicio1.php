<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numAleatorio = rand(0,1);

        if ($numAleatorio == 0){
            echo "<h1>Cara - $numAleatorio</h1>";
        } else {
            echo "<h1>Cruz - $numAleatorio</h1>";
        }
    ?>
</body>
</html>