<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num1 = 10;
        $num2= 2;

        echo "<h1>Operaciones</h1>";
        echo "<ul>";
        echo "<li>Suma: ".$num1+$num2."</li>";
        echo "<li>Resta: ".$num1-$num2."</li>";
        echo "<li>Multiplicacion: ".$num1*$num2."</li>";
        echo "<li>Division: ".$num1/$num2."</li>";
        echo "<li>Modulo: ".$num1%$num2."</li>";
        echo "<li>Potencia: ".$num1**$num2."</li>";
        echo "</ul>";
    ?>
</body>
</html>