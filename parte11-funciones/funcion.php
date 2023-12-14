<?php

    function imprimeTabla(){
        echo "<table border='1'>";
        echo "<tr><td>1</td><td>2</td><td>3</td></tr>";
        echo "</table>";
    }

    function sumaNumeros($a,$b){
        $resultado = $a + $b;
        echo "suma = $resultado";
    }

    function dameSuma($a,$b){
        $resultado = $a + $b;
        return $resultado;
    }

    function imprimeCustomTabla($ancho, $largo){
        echo "<table border='1'>";

        for($i=0; $i<$largo; $i++){
            echo "<tr>";
            for($j=0; $j<$ancho; $j++){
                echo "<td>";
                echo "$j - $i";
                echo "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    }

    $nombre = "SerGio";
    $nombreMinusculas = strtolower($nombre);

    echo "<p>Nombre: $nombre</p>";
    echo "<p>Nombre minusculas: $nombreMinusculas</p>";

    sumaNumeros(33, 100000);

    $resultadoSuma = dameSuma(33,10000);
    echo "<p>Suma: $resultadoSuma </p>";

    echo "<h1>CustomTabla</h1>";
    imprimeCustomTabla(5, 10);


    $sql = "INSERT INTO usuarios ($nombre, $pass, 1, now())"


    $nuevoEstado = !$EstadoActual

    if($estadoActual == 1)
        nuevosetado = 0
    else
        nuevoestado =1

?>