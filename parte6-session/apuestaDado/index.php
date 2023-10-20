<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="dado.php" method="get">
        Cuanto apuestas
        <input type="text" name="apuesta"/><br/>
        A que numero
        <input type="text" name="numero"/><br/>
        <input type="submit">
    </form>
    <?php
        session_start();
        if(isset($_SESSION['creditos'])){
            echo "<p>Tienes: ".$_SESSION['creditos']."</p>";
        } else {
            echo "<p>Tienes: 100</p>";
        }

    ?>
</body>
</html>