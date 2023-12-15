<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            color:orange;
        }
        .negro{
            background-color: black;
        }
        .blanco{
            background-color: white;
        }
    </style>
</head>
<body>
    <h1>Tablero de ajedrez</h1>
    <?php
        // Primera version
        /*
        echo "<table border='1'>";
        for($i=0;$i<9;$i++){
            echo "<tr>";
            for($j=0;$j<9;$j++){
                echo "<td ";
                if($i%2 == 0){ //fila par
                    if($j%2 == 0){
                        echo "class='negro'"; //columna par
                    } else {
                        echo "class='blanco'";  //columna impar
                    }
                } else {
                    if($j%2 == 0){  // fila impar
                        echo "class='blanco'";  //columna par
                    } else {
                        echo "class='negro'";   //columna impar
                    }
                }
                echo ">$i - $j</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        */
        echo "<table border='1'>";
        for($i=0;$i<9;$i++){
            echo "<tr>";
            for($j=0;$j<9;$j++){
                echo "<td ";
                if(($i+$j)%2 == 0){
                    echo "class='negro'";
                } else {
                    echo "class='blanco'";
                }
                echo ">$i - $j</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>