<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        for($i=1;$i<10;$i++){ //$i<=99 También se podría
            for ($j=1;$j<10;$j++){
                echo $j." | ";
            }
            echo "<br>";
        }
    ?>
</body>
</html>