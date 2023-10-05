<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FizzBuzz</h1>
    <?php
        for($i=1;$i<=100;$i++){
            $texto = "";

            if($i%3==0){$texto.="Fizz";}
            if($i%5==0){$texto.="Buzz";}

            if($texto==""){$texto=$i;}

            echo $texto."<br/>";
        }

    ?>
</body>
</html>