<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Con la función var_dump: </br>";
        var_dump($_SESSION);

        echo "Con la función var_dump: </br>";
        var_dump($_FILES);

        echo "Con la función print_r: </br>";
        print_r($_SESSION);

        echo "Con la función print_r: </br>";
        print_r($_FILES);

    ?>
</body>
</html>