<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numAleatorio = rand(1,7);

        if ($numAleatorio == 1){
            echo "<h1>Lunes</h1>";
        } elseif ($numAleatorio == 2){
            echo "<h1>Martes</h1>";
        } elseif ($numAleatorio == 3){
            echo "<h1>Miercoles</h1>";
        } elseif ($numAleatorio == 4){
            echo "<h1>Jueves</h1>";
        } elseif ($numAleatorio == 5){
            echo "<h1>Viernes</h1>";
        } elseif ($numAleatorio == 6){
            echo "<h1>Sabado</h1>";
        } else {
            echo "<h1>Domingo</h1>";
        }
    ?>
</body>
</html>