<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
    <?php
        // Crear un array
        $miArray = [];

        // Rellenarlo con 10 num aleatorios del 1 al 30
        // Aprovecho para al mismo tiempo imprimir los valores
        echo "<ul>";
        for($i=0;$i<10;$i++){
            $numeroGenerado = rand(1,30); 
            $miArray[] = $numeroGenerado;
            echo "<li>".$numeroGenerado."</li>";
        }
        echo "</ul>";

        echo "<h2>Calculos</h2>";
        echo "<ul>";
        
        /*
            Calcular la media artesanalmente
                1º Sumo todos los numeros del array
                2º Divido esa suma entre el numero de posiciones del arrays
        */
        $sumaTotal = 0;
        for($i=0;$i<10;$i++){
            $sumaTotal = $sumaTotal + $miArray[$i];
        }
        $media = $sumaTotal / count($miArray);
        echo "<li>Media artesanal: ".$media."</li>";

        // Calculo de medio mediante funciones
        $media = array_sum($miArray) / count($miArray);
        echo "<li>Media con funciones: ".$media."</li>";

        // Calcular el maximo con funciones
        $valorMaximo = 0;
        for($i=0;$i<10;$i++){
            // Si es mas alto lo guardo, sino no hago nada
            if($valorMaximo <= $miArray[$i]){
                $valorMaximo = $miArray[$i];
            }
        }
        echo "<li>Maximo artesnal: ".$valorMaximo."</li>";
        echo "<li>Maximo: ".max($miArray)."</li>";

        // Calcular el minimo
        $valorMin = 99;
        for($i=0;$i<10;$i++){
            // Si es mas alto lo guardo, sino no hago nada
            if($valorMin > $miArray[$i]){
                $valorMin = $miArray[$i];
            }
        }
        echo "<li>Minimo artesnal: ".$valorMin."</li>";
        echo "<li>Minimo: ".min($miArray)."</li>";
        echo "</ul>";

    ?>
</body>
</html>