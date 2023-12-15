<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /* Ejemplo de condicionales
        $edad = 30;
        echo "Tienes $edad años<br/>";

        if($edad > 40){
            echo "Eres un viejo<br/>";
        } elseif ($edad > 30) {
            echo "Eres un adultescente<br/>";
        } elseif ($edad > 20) {
            echo "Eres joven y maravilloso<br/>";
        } else {
            echo "Estas creciendo<br/>";
        }*/

        echo "<h1>Generamos numero aleatorio</h1>";
        $numAleatorio = rand(1,6);
        echo "<p>El numero generado es: $numAleatorio</p>";
    ?>
</body>
</html>