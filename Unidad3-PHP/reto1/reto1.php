<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // 1. Inicializo el array
        $sorteoNumeros = [];




        //2. Lo lleno de numeros aleatorios
        for($i=0; $i<10; $i++){
            // Genero numero aletaroio
            $numGenerado = rand(0,20);  
            $numeroRepetido = false;
            //Compruebo que no es repetido
            for($j=0; $j<count($sorteoNumeros); $j++){
                if ($sorteoNumeros[$j] == $numGenerado){
                    // este numero esta repetido
                    $numeroRepetido = true;
                }
            }
            // Sino es repetido lo guardo
            if ($numeroRepetido == false){
                $sorteoNumeros[] = $numGenerado;
            } else {
                $i--;   
            }
        }





        //3. Lo muestro por pantalla.
        echo "<table border='1'>";
        echo "<tr>";
        for($i=0; $i<count($sorteoNumeros); $i++){
            echo "<td>".$sorteoNumeros[$i]."</td>";
        }
        echo "</tr>";
        echo "</table>";
    ?>
</body>
</html>