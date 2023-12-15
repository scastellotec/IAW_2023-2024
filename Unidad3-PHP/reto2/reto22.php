<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $romanNumber = "IX";
        $resultado = 0;

        for($i=0; $i<strlen($romanNumber); $i++){
            if($romanNumber[$i] == 'I'){ $resultado +=1; }
            elseif($romanNumber[$i] == 'V'){ $resultado +=5; }
            elseif($romanNumber[$i] == 'X'){ $resultado +=10; }
            elseif($romanNumber[$i] == 'L'){ $resultado +=50; }
            elseif($romanNumber[$i] == 'C'){ $resultado +=100; }
            elseif($romanNumber[$i] == 'D'){ $resultado +=500; }
            elseif($romanNumber[$i] == 'M'){ $resultado +=1000; }
        }
        echo $resultado;
    ?>  
</body>
</html>