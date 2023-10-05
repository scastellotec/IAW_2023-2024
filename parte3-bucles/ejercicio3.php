<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Triangulo creciente</h1>
    <?php
    // El triangulo izquieda creciente
    $altura=8;
    for($i=1;$i<=$altura;$i++){
        for($j=1;$j<=$i;$j++){
            echo "*";   
        }
        echo "<br/>";
    }
    

    // El triangulo izquierda decreciente
    ?>
    
    <h1>Triangulo creciente</h1>

    <?php
    $altura=8;
    for($i=$altura;$i>=0;$i--){
        for($j=1;$j<=$i;$j++){
            echo "*";   
        }
        echo "<br/>";
    }
    ?>
</body>
</html>