<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Numero aleatorio rand(1,10);
        //$miArray = [5,6,7,8,33,21,4,32,87,65];
        $miArray = [];

        // Relleno el array con numeros aleatorios
        echo "<h2>Numero generados</h2>";
        for($i=0; $i<10; $i++){
            $valorAleatorio = rand(1,10);
            $miArray[] = $valorAleatorio;
            echo $valorAleatorio." | ";
        }
        echo "<br/>";
        $miArray[] = 99;

        // Recorro el array y muestro su valor
        echo "<h2>Numero guardados</h2>";
        for($i=0; $i<count($miArray); $i++){
            echo $miArray[$i] ." | ";
        }

        // Mostrar toda la info del array
        echo "<h2>Con var_dump()</h2>";    
        var_dump($miArray);
        ?>
</body>
</html>