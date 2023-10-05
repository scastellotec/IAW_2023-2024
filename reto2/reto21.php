<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $nums = [1,2,3,4,5,6,9,9,9];
       $target = 10;

        for($i=0;$i<count($nums);$i++){
            for($j=$i+1;$j<count($nums);$j++){
                $resultado = $nums[$i] + $nums[$j];
                if($resultado == $target){
                    echo "<p>".$nums[$i]." + ".$nums[$j]." = </p>";                    
                }
            }
       }
    ?>
</body>
</html>