<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $altura = 5;

        for($i=1; $i<=$altura; $i++){
            for($j=1; $j<=$altura; $j++){
                // Solo se dibuja el asterisco si dibujano la primera o ultima fila o columna
                if($i==1 || $i==$altura || $j==1 || $j==$altura){
                    echo "*&nbsp;";
                }else{
                    echo "&nbsp;&nbsp;&nbsp;"; //2 espacios en blanco = 1 asterisco
                }
            }
            echo "<br/>"; //Al final de cada linea hago un salto de linea
        }
    ?>
</body>
</html>