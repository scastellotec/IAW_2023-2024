<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="grabar.php" method="get">
        <label for="nombre">Nombre:</label>
        <input id="nombre" type="text" name="nombre"><br/>

        <input type="submit">
    </form>

    <?php
        session_start();
        echo "<p>".$_SESSION['msg']."</p>";
    ?>
</body>
</html>