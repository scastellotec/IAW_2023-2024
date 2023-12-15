<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $miFrase = "Adentro del Vaticano está todo forrado de oro y afuera los pibes se están muriendo de hambre.";
        
        // Mostra frase tal y como esta
        echo "<p>".$miFrase."</p>";

        //Muestra por pantalla la frase letras por letra
            //strlen() devuelve el tamaño de un string
        echo "<p>";
        for($i=0; $i<strlen($miFrase); $i++){
            echo $miFrase[$i]."|";
        }
        echo "</p>";

        // Debajo muestra la frase en orden inverso. Utiliza un bucle.
        echo "<p>";
        for($i=strlen($miFrase)-1; $i>=0; $i--){
            echo $miFrase[$i];
        }
        echo "</p>";
        
        // Muestra debajo el tamaño de la frase
        echo "<p>Tamaño frase: ".strlen($miFrase)."</p>";

        //Muestra la frase en mayúsculas utilizando una función. strtoupper()
        echo "<p>Mayusculas: ".strtoupper($miFrase)."</p>";

    ?>
</body>
</html>