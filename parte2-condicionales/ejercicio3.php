<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numAleatorio = rand(1,6);

        if ($numAleatorio == 1){
            echo "<h1>1</h1>";
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/1/1b/Dice-1-b.svg'>";
        } elseif ($numAleatorio == 2){
            echo "<h1>2</h1>";
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/5/5f/Dice-2-b.svg'>";
        } elseif ($numAleatorio == 3){
            echo "<h1>3</h1>";
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/b/b1/Dice-3-b.svg'>";
        } elseif ($numAleatorio == 4){
            echo "<h1>4</h1>";
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/f/fd/Dice-4-b.svg'>";
        } elseif ($numAleatorio == 5){
            echo "<h1>5</h1>";
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/0/08/Dice-5-b.svg'>";
        } else {
            echo "<h1>6</h1>";
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/2/26/Dice-6-b.svg'>";
        }
    ?>
</body>
</html>