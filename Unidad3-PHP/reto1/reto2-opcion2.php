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
            for($j=1; $j<=($i*2-1);$j++){
                for($k=1;$k<=(($altura-$i-1)*2-1)/2 ;$k++){
                    echo "-";
                }
                echo $j;
                for($k=1;$k<($altura*2-1)/2;$k++){
                    echo "-";
                }
            }
            echo "<br/>";
        }

    ?>
</body>
</html>