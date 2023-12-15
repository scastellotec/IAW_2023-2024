<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numAleatorio = rand(0,10);

        if ($numAleatorio >= 9){
            echo "<h1>Sobresaliente - $numAleatorio</h1>";
        } elseif ($numAleatorio >= 7) {
            echo "<h1>Notable - $numAleatorio</h1>";
        } elseif ($numAleatorio >= 6) {
            echo "<h1>Bien - $numAleatorio</h1>";
        } elseif ($numAleatorio >= 5) {
            echo "<h1>Suficiente - $numAleatorio</h1>";
        } else {
            echo "<h1>Insuficiente - $numAleatorio</h1>";
        }
    ?>
</body>
</html>