<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Arrays</h1>
    <?php
        // Creo el array
        $alumnosClase = ['Ruben','Pablo','Gabriel','Roberto','Lucia','Israel','Alex','Santiago','Alejandro','Pablo','Miguel'];

        // Muestro el tamaño del array
        echo "Tamaño array: ".count($alumnosClase)."<br/>";

        // Elimino una posicion
        unset($alumnosClase[7]);

        // Recorro el array para mostrarlo
        for($i=0;$i<count($alumnosClase);$i++){
            echo "<p>".$alumnosClase[$i]."</p>";
        }

        // Recorro el array de otra forma
        echo "<h2>Ejemplo con Foreach</h2>";
        foreach($alumnosClase as $clave => $valor){
            echo "<p>Estas en la posicion $clave y el valor es $valor</p>";
        }

        echo "<h2>Strings como arrays</h2>";
        $frase = "Santiago es guapo, pero esta empadronado en Zaragoza.";
        echo "Esta es la posicion 33: ".$frase[33]."<br/>";

        // Recorro la frase letra por letra
        for($i=0; $i<strlen($frase); $i++){
            echo "<p>".$frase[$i]."</p>";
        }

    ?>
</body>
</html>